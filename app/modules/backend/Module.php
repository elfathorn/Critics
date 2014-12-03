<?php

namespace Critics\Backend;

use Critics\ModuleBase;

class Module extends ModuleBase
{
	protected function getNamespaces()
	{
		return array(
	        'Critics\Backend\Controllers' => '../app/modules/backend/controllers/',
	        'Critics\Backend\Models'      => '../app/modules/backend/models/',
	    );
	}
	
	protected function getViewsDir()
	{
		return '../app/modules/backend/views/';
	}
}
