<?php

$loader = new \Phalcon\Loader();
$loader->registerNamespaces(
    $config->get('namespaces')->toArray()
)->register();