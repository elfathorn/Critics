<?php

namespace Critics\Modules\Frontend\Controllers;

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    protected function initialize()
    {
        \Phalcon\Tag::prependTitle('CRITICS | ');
    }
}
