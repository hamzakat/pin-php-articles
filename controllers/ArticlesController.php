<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Headers: *");
header('Content-type: application/json');

require_once '../datastore/ArticleDAO.php';
require_once '../configs.php';
require_once 'BaseController.php';

$articleController = new BaseController(new ArticleDAO());
$articleController->handleRequests();
