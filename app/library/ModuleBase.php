<?php

namespace Critics;

use Phalcon\Loader,
    Phalcon\Mvc\Dispatcher,
    Phalcon\Mvc\View,
    Phalcon\Mvc\View\Engine\Volt as VoltEngine,
    Phalcon\Mvc\ModuleDefinitionInterface;

abstract class ModuleBase implements ModuleDefinitionInterface
{
	/**
	 *
	 *
	 */
	abstract protected function getNamespaces();
	
	/**
	 *
	 *
	 */
	abstract protected function getViewsDir();
	
	/**
	 *
	 *
	 */
	final protected function getDefaultNamespace()
	{
		return empty(array_keys($this->getNamespaces())) ? '' : array_keys($this->namespaces)[0];
	}

    /**
     * Register a specific autoloader for the module
     * @param \Phalcon\DiInterface $di
     */
    public function registerAutoloaders($di)
    {
        $loader = new Loader();

        $loader->registerNamespaces(
            $this->getNamespaces()
        )->register();
    }

    /**
     * Register specific services for the module
     * @param \Phalcon\DiInterface $di
     */
    public function registerServices($di)
    {

        //Registering a dispatcher
        $di->set('dispatcher', function() {
            $dispatcher = new Dispatcher();
            $dispatcher->setDefaultNamespace(
                $this->getDefaultNamespace()
            );
            return $dispatcher;
        });

        //Registering the view component
        $di->set('view', function() {
            $view = new View();
            $view->setViewsDir($this->getViewsDir());
            $view->registerEngines(array(
                ".volt" => 'voltService'
            ));
            return $view;
        });
    }
}
