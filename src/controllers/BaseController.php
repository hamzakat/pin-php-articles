<?php

class BaseController
{

    private $dao;

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

    public function handleRequests()
    {
        // handling using URL parameters
        if (isset($_GET['getAll']) && $_SERVER['REQUEST_METHOD'] === 'GET') {
            $this->getAll();
        }

        if (isset($_GET['getById']) && $_SERVER['REQUEST_METHOD'] === 'GET') {
            $this->getById($_GET['getById']);
        }

    }
}
