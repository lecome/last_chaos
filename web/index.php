<?php
    error_reporting(0); //скрыть ошибки
	
    include("global_config.php");
	date_default_timezone_set('Europe/Moscow');
	
    if(type_os() == "PC" || type_os() == "BOT"){
//=================================================================================================================================
	    require 'includes/class/PageController.php';
	    
	    if($route) {
		    //none
	    } else {
	        echo error_message_site('F');
	    }
	    if($route == NULL){} else {
            $id = $route->getParameters();
	        $name_page = $route->getTarget();
	    }
        
	    //require 'includes/test.php';
	    
	    if($name_page == NULL) {
		    echo '<meta HTTP-EQUIV="REFRESH" content="0; url=/home">';
		} 
	    else {
	        include_once("page.template.php");
	    }
//=================================================================================================================================
	} 
	else if(type_os() == "MOB"){
	   echo error_message_site('MD');
	}
	else{
	   echo error_message_site('D');
	}
 ?>