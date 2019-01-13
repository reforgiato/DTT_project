<?php

$router = $di->getRouter();

// Index route
$router->add("/", ["controller" => "index", "action" => "index"]);

// Website's routes
$router->add("/admin-login", ["controller" => "login", "action" => "index"]);
$router->add("/admin-logout", ["controller" => "admin", "action" => "logout"]);
$router->add("/login-submit", ["controller" => "login", "action" => "homepage"]);
$router->add("/admin-page", ["controller" => "admin", "action" => "index"]);
$router->add("/archive", ["controller" => "archive", "action" => "index"]);
$router->add("/article", ["controller" => "article", "action" => "index"]);
$router->add("/add-new-article", ["controller" => "add", "action" => "index"]);
$router->add("/submit-new-article", ["controller" => "add", "action" => "addnew"]);
$router->add("/edit-article", ["controller" => "edit", "action" => "index"]);
$router->add("/edit-submit", ["controller" => "edit", "action" => "edit"]);
$router->add("/delete-article", ["controller" => "edit", "action" => "delete"]);
$router->add("/cancel", ["controller" => "edit", "action" => "cancel"]);


$router->handle();
