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

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setSungularName($singularName)
    {
        $this->singularName = $singularName;
    }

    public function setMenuName($menuName)
    {
        $this->menuName = $menuName;
    }

    public function setPatentIdemColon($patentIdemColon)
    {

        $this->patentIdemColon = $patentIdemColon;

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