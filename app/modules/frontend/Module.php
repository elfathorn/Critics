<?php

namespace Critics\Frontend;

use Critics\ModuleBase;

class Module extends ModuleBase
{
	protected function getNamespaces()
	{
		return array(
	        'Critics\Frontend\Controllers' => '../app/modules/frontend/controllers/',
	        'Critics\Frontend\Forms'       => '../app/modules/frontend/forms/',
	        'Critics\Frontend\Models'      => '../app/modules/frontend/models/',
	    );
	}
	
	protected function getViewsDir()
	{
		return '../app/modules/frontend/views/';
	}
}
