<?php

$router = $di->getRouter();

// Index route
$router->add("/", ["controller" => "index", "action" => "index"]);

// Website's routes
$router->add("/admin-login", ["controller" => "login", "action" => "index"]);
$router->add("/admin-logout", ["controller" => "admin", "action" => "logout"]);
$router->add("/login-submit", ["controller" => "login", "action" => "homepage"]);
$router->add("/admin-page", ["controller" => "admin", "action" => "index"]);

$router->handle();
