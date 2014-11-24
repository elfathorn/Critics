<?php

namespace Critics\Frontend\Controllers;

class IndexController extends ControllerBase
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
