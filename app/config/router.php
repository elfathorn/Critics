<?php

$router = new \Phalcon\Mvc\Router();
$router->setDefaultModule("frontend");

$router->add(
    "/admin",
    array(
        'module'     => 'backend',
        'controller' => 'index',
        'action'     => 'index',
    )
);

$router->add(
    '/inscription',
    array(
        'module'     => 'frontend',
        'controller' => 'users',
        'action'     => 'new'
    )
);

return $router;