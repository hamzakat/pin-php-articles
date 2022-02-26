<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Headers: *");
header('Content-type: application/json');

require_once  SITE_ROOT . '/datastore/ArticleDAO.php';
require_once 'BaseAPIController.php';

$articlesAPI = new BaseAPIController(new ArticleDAO());

// serve API
// $articlesAPI->handleRequests();
