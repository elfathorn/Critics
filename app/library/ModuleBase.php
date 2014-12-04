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
	 * Get namespaces to register for the module
	 * @return array
	 */
	abstract protected function getNamespaces();
	
	/**
	 * Get the views directory for the module
	 * @return string
	 */
	abstract protected function getViewsDir();
	
	/**
	 * Get the default namespace for the module
	 * @return string
	 */
	final protected function getDefaultNamespace()
	{
        $keys = array_keys($this->getNamespaces());
		return (!empty($keys) && isset($keys[0])) ? $keys[0] : '';
	}

    /**
     * Register a specific autoloader for the module
     * @param \Phalcon\DiInterface $di
     */
    public function registerAutoloaders($di = null)
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
