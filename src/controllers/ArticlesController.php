<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Headers: *");

require_once  SITE_ROOT . '/datastore/ArticleDAO.php';
require_once 'BaseController.php';

$articlesController = new BaseController(new ArticleDAO());
