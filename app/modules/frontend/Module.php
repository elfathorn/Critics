<?php

namespace Critics\Frontend;

use Critics\ModuleBase;

class Module extends ModuleBase
{
    protected $namespaces = array(
        'Critics\Frontend\Controllers' => '../app/modules/frontend/controllers/',
        'Critics\Frontend\Models'      => '../app/modules/frontend/models/',
    );

    protected $viewsDir = '../app/modules/frontend/views/';
}
