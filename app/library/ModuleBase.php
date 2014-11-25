<?php

namespace Critics;

use Phalcon\Loader,
    Phalcon\Mvc\Dispatcher,
    Phalcon\Mvc\View,
    Phalcon\Mvc\View\Engine\Volt as VoltEngine,
    Phalcon\Mvc\ModuleDefinitionInterface;

abstract class ModuleBase implements ModuleDefinitionInterface
{
    protected $namespaces;
    protected $viewsDir;

    /**
     * Register a specific autoloader for the module
     */
    public function registerAutoloaders()
    {
        $loader = new Loader();

        $loader->registerNamespaces(
            $this->namespaces
        )->register();
    }

    /**
     * Register specific services for the module
     */
    public function registerServices($di)
    {

        //Registering a dispatcher
        $di->set('dispatcher', function() {
            $dispatcher = new Dispatcher();
            $dispatcher->setDefaultNamespace(
                array_keys($this->namespaces)[0]
            );
            return $dispatcher;
        });

        //Registering the view component
        $di->set('view', function() {
            $view = new View();
            $view->setViewsDir($this->viewsDir);
            $view->registerEngines(array(
                ".volt" => 'voltService'
            ));
            return $view;
        });
    }
}
