<?php

define('SITE_ROOT', __DIR__);

define("DB_HOST", "localhost");
define("DB_PORT", "3306");
define("DB_NAME", "cms");
define("DB_USER", "user");
define("DB_PASSWORD", "password");

require_once "init/database.php";
init_db();
