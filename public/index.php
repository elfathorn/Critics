<?php
error_reporting(E_ALL);

use Phalcon\Mvc\Application,
    Phalcon\Exception;

$config = include __DIR__ . "/../app/config/config.php";
$router = include __DIR__ . "/../app/config/router.php";
include __DIR__ . "/../app/config/services.php";

try {

    //Create an application
    $application = new Application($di);

    // Register the installed modules
    $application->registerModules(
        array(
            'frontend' => array(
                'className' => 'Critics\Modules\Frontend\Module',
                'path'      => '../app/modules/frontend/Module.php',
            ),
            'backend'  => array(
                'className' => 'Critics\Modules\Backend\Module',
                'path'      => '../app/modules/backend/Module.php',
            )
        )
    );

    //Handle the request
    echo $application->handle()->getContent();

} catch(Exception $e){
    echo $e->getMessage();
}
