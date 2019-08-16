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

    public function __construct()
    {
        $this->labels = [];
    }

    public function setLabel($label, $name){

        $this->labels[] = [$label  => __($name)];
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
        

    }

    public function setViewItems($viewItems)
    {
        $this->viewItems = $viewItems;
    }

    public function setAddNewItems($addNewItems)
    {
        $this->addNewItems = $addNewItems;
    }

    public function setAddNew($addNew)
    {

        $this->addNew = $addNew;

    }

    public function setEditItem($editItem)
    {

        $this->editItem = $editItem;

    }

    public function setUpdateItem($updateItem)
    {

        $this->updateItem = $updateItem;

    }

    public function setSearchItems($searchItems)
    {

        $this->searchItems = $searchItems;

    }

    public function setNotFound($notFound)
    {
        $this->notFound = $notFound;
    }

    public function setNotFoundInTrash($notFoundInTrash)
    {
        $this->notFoundInTrash = $notFoundInTrash;
    }


}