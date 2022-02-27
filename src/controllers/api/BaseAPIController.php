<?php

class BaseAPIController
{

    private $dao;

    function __construct($dao)
    {
        $this->dao = $dao;
    }

    public function getAll()
    {
        echo json_encode($this->dao->getAll());
    }

    public function getById($id)
    {
        echo json_encode($this->dao->getById($_GET['getById']));
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

        if (isset($_GET['add']) && $_SERVER['REQUEST_METHOD'] === 'PUT') {
            $body = file_get_contents("php://input");
            $event = json_decode($body);
            $this->dao->add($event);
        }
    }
}
