<?php

namespace Critics\Frontend\Controllers;

use Critics\Controller\ControllerBase as Controller;

class IndexController extends Controller
{
    public function initialize()
    {
        \Phalcon\Tag::setTitle('Homepage');
        parent::initialize();
    }

    public function indexAction()
    {

    }

}
