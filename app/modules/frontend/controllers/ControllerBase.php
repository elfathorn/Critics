<?php

namespace Critics\Frontend\Controllers;

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    protected function initialize()
    {
        \Phalcon\Tag::prependTitle('CRITICS | ');
        $this->view->setVar('project_name', 'Critiques Littéraires');
    }
}
