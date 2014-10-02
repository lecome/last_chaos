<?php
    require 'includes/class/Router.php';
    require 'includes/class/Route.php';
    
    $router = new Router();
    
    $router->setBasePath(''); //папка
    
    $router->map('/', 'page_home', array('methods' => 'GET', 'name' => 'admin'));
    $router->map('/home', 'page_home', array('methods' => 'GET', 'name' => 'admin'));
    $router->map('/register', 'page_register', array('methods' => 'GET', 'name' => 'admin'));
    $router->map('/download', 'page_download', array('methods' => 'GET', 'name' => 'admin'));
    $router->map('/donate', 'page_donate', array('methods' => 'GET', 'name' => 'admin'));
    $router->map('/ranking', 'page_ranking', array('methods' => 'GET', 'name' => 'admin'));
    $router->map('/os', 'page_osinfo', array('methods' => 'GET', 'name' => 'admin'));
	
    $router->map('/:name', 'page_null', array('methods' => 'GET', 'name' => 'admin'));
    
    $route = $router->matchCurrentRequest();


?>