<?php

namespace lib;

class Router{
	protected $router = array(
		'site'=>'site',
		'admin'=>'admin'
	);
	protected $routerOnRoot = 'site';
	protected $onRoot = true;
}

?>