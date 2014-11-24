<?php

namespace Critics\Backend\Controllers;

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    protected function initialize()
    {
        \Phalcon\Tag::prependTitle('CRITICS | ');
        \Phalcon\Tag::prependTitle('BACKOFFICE | ');
        $this->view->setVar('project_name', 'Critiques Littéraires');
    }
}
