<?php

namespace Flx\CP\Post;

class CustomPostType
{

    protected $name;
    protected $singularName;
    protected $menuName;
    protected $patentIdemColon;
    protected $allItems;
    protected $viewItems;
    protected $addNewItems;
    protected $addNew;
    protected $editItem;
    protected $updateItem;
    protected $searchItems;
    protected $notFound;
    protected $notFoundInTrash;
    protected $hierarchical;

    public function __construct()
    {
        $this->labels = [];
        $this->support = [];
        $this->hierarchical = false;
        $this->public = true;
        $this->showUi = true;
        $this->inMenu = true;
        
    }

//    Setting Labels

    public function setLabel($label, $name)
    {
        $this->labels[] = [$label => __($name)];
    }

    public function setDescription($description)
    {

        $this->description = $description;
    }


    public function setName($name)
    {
        $this->name = $name;
        $this->labels[] = ['name' => _x($this->name)];
    }

    public function setSingularName($singularName)
    {
        $this->singularName = $singularName;
        $this->labels[] = ['singular_name' => _x($this->singularName)];
    }

    public function setMenuName($menuName)
    {
        $this->menuName = $menuName;
        $this->labels[] = ['menu_name' => __($this->menuName)];
    }

    public function setPatentIdemColon($patentIdemColon)
    {
        $this->patentIdemColon = $patentIdemColon;
        $this->setLabel('parent_item_colon', $this->patentIdemColon);
    }

    public function setAllItems($allItems)
    {
        $this->allItems = $allItems;
        $this->setLabel('all_items', $this->allItems);
    }

    public function setViewItems($viewItems)
    {
        $this->viewItems = $viewItems;
        $this->setLabel('view_item', $this->viewItems);
    }

    public function setAddNewItems($addNewItems)
    {
        $this->addNewItems = $addNewItems;
        $this->setLabel('add_new_item', $addNewItems);
    }

    public function setAddNew($addNew)
    {
        $this->addNew = $addNew;
        $this->setLabel('add_new', $this->addNew);
    }

    public function setEditItem($editItem)
    {
        $this->editItem = $editItem;
        $this->setLabel('edit_item', $this->editItem);
    }

    public function setUpdateItem($updateItem)
    {
        $this->updateItem = $updateItem;
        $this->setLabel('update_item', $this->updateItem);
    }

    public function setSearchItems($searchItems)
    {
        $this->searchItems = $searchItems;
        $this->setLabel('search_items', $this->searchItems);
    }

    public function setNotFound($notFound)
    {
        $this->notFound = $notFound;
        $this->setLabel('not_found', $this->notFound);
    }

    public function setNotFoundInTrash($notFoundInTrash)
    {
        $this->notFoundInTrash = $notFoundInTrash;
        $this->setLabel('not_found_in_trash', $this->notFoundInTrash);
    }

    public function setSupport($support)
    {
        $this->support = [$support];
    }

//    End setting labels

    public function setHierarchical($value)
    {
        if (is_bool($value)) {
            $this->hierarchical = $value;
        } else {
            return 'Please set true or false';
        }
    }

    public function setIsPublic($value){
        if (is_bool($value)) {
            $this->public = $value;
        } else {
            return 'Please set true or false';
        }
    }


    public function setshowUi($value){
        if (is_bool($value)) {
            $this->showUi = $value;
        } else {
            return 'Please set true or false';
        }
    }

    public function setInMenu($value){
        if (is_bool($value)) {
            $this->InMenu = $value;
        } else {
            return 'Please set true or false';
        }
    }

//Set Arguments

    public function execute()
    {

        $this->args = [
            'label'               => __($this->name),
            'description'         => __($this->description),
            'labels'              => $this->labels,
            // Features this CPT supports in Post Editor
            'supports'            => [
                implode(',', $this->support),
            ],
            // You can associate this CPT with a taxonomy or custom taxonomy.
            'taxonomies'          => ['genres'],
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */
            'hierarchical'        => $this->hierarchical,
            'public'              => $this->public,
            'show_ui'             => $this->showUi,
            'show_in_menu'        => $this->inMenu,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        ];

        register_post_type($this->name, $this->args);
    }


}