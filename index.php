<?php
ob_start();

require __DIR__."/vendor/autoload.php";


use CoffeeCode\Router\Router;


$route = new Router(url(), ":");


/*
 * :: WEB ROUTES ::
 */
$route->namespace("Source\App");
$route->get("/","Web:home");

/*
 * :: ERROR ROUTES ::
 */
$route->namespace("Source\App")->group("/ops");
$route->get("/{errcode}", "Web:error");

/*
 * :: ROUTE ::
 */
$route->dispatch();

/*
 * :: ERROR REDIRECT ::
 */
if($route->error()){
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();