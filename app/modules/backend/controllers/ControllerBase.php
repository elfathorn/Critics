<?php

namespace Critics\Backend\Controllers;

use Critics\Controller\ControllerBase as Controller;

class ControllerBase extends Controller
{
    protected function initialize()
    {
        \Phalcon\Tag::prependTitle('BACKOFFICE | ');
        parent::initialize();
    }
}
