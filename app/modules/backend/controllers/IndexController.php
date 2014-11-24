<?php

namespace Critics\Backend\Controllers;

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
