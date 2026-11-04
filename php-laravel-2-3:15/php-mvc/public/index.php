<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$baseDir = preg_replace(
    "#/public$#i",
    "",
    str_replace("\\", "/", dirname($_SERVER["SCRIPT_NAME"] ?? ""))
);

define("BASE_URL", $baseDir === "/" ? "" : $baseDir);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/*
|--------------------------------------------------------------------------
| Core
|--------------------------------------------------------------------------
*/
require_once __DIR__ . '/../app/Core/Database.php';
require_once __DIR__ . '/../app/Core/Controller.php';
require_once __DIR__ . '/../app/Core/Router.php';

/*
|--------------------------------------------------------------------------
| Models
|--------------------------------------------------------------------------
*/

require_once __DIR__ . '/../app/Models/Model.php';
require_once __DIR__ . '/../app/Models/Product.php';


/*
|--------------------------------------------------------------------------
| Controllers
|--------------------------------------------------------------------------
*/

require_once __DIR__ . '/../app/Controller/ProductController.php';


/*
|--------------------------------------------------------------------------
| Router
|--------------------------------------------------------------------------
*/

$router = new Router();

require_once __DIR__ . '/../routes/web.php';

$router->dispatch();