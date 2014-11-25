<?php

namespace Critics\Backend;

use Critics\ModuleBase;

class Module extends ModuleBase
{
    protected $namespaces = array(
        'Critics\Backend\Controllers' => '../app/modules/backend/controllers/',
        'Critics\Backend\Models'      => '../app/modules/backend/models/',
    );
    
    protected $viewsDir = '../app/modules/backend/views/';
}
