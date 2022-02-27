<?php

class BaseController
{

    protected $dao;

    function __construct($dao)
    {
        $this->dao = $dao;
    }

    public function getAll()
    {
        return $this->dao->getAll();
    }

    public function getById($id)
    {
        return $this->dao->getById($id);
    }

    public function add($object)
    {
        return $this->dao->add($object);
    }
}
