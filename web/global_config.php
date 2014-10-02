<?php
         include("includes/function.php");
		 
		 $conf = array(
		 'NAME' => 'test',
		 'DES' => 'test',
		 'KEY' => 'test',
		 'STYLE' => 'leco',
		 'ICON' => '1',
		 'COPY' => ' '.$_SERVER["HTTP_HOST"].' © 2014 <font color=red>Powered by Virus.Crazy</font>'
		 );
         
		 $menu_left = array(
		 'REG' => 'on',
		 'AUT' => 'on',
		 'BUT1' => 'on',
		 'CAST' => 'on'
		 );
		  
		 $os_server = PHP_OS; 
		 $os_server_pd = php_uname();
//===================================DB==========================================
//=================================mysql=========================================
		 $db_data = array(
		  'name' => 'l17632_data', //newproject_data
		  'user' => 'l17632_dbuser',
		  'pass' => 'pass',
		  'host' => 'localhost'
		 );
		 $db_game = array(
          'name' => 'l17632_db', //newproject_db
		  'user' => 'l17632_dbuser',
		  'pass' => 'pass',
		  'host' => 'localhost'
		 );
		 $db_auth = array(
		  'name' => 'l17632_auth', //newproject_db_auth
		  'user' => 'l17632_dbuser',
		  'pass' => 'pass',
		  'host' => 'localhost'
		 );
		 $db_user = array(
		  'name' => 'l17632_db_user', //newproject_db_user
		  'user' => 'l17632_dbuser',
		  'pass' => 'pass',
		  'host' => 'localhost'
		 );
		 $db_post = array(
		  'name' => 'l17632_post', //newproject_post
		  'user' => 'l17632_dbuser',
		  'pass' => 'pass',
		  'host' => 'localhost'
		 );
		 
		 //------------------------------------1----------------------------------------------------------------
		 $con_data = mysql_connect($db_data['host'],$db_data['user'],$db_data['pass']) or die(db_error_message($db_data['name'],"C"));
		 $sel_db_data = mysql_select_db($db_data['name']) or die(db_error_message($db_data['name'],"S"));
		 //------------------------------------1----------------------------------------------------------------
		 //------------------------------------2----------------------------------------------------------------
		 $con_game = mysql_connect($db_game['host'],$db_game['user'],$db_game['pass']) or die(db_error_message($db_game['name'],"C"));
		 $sel_db_game = mysql_select_db($db_game['name']) or die(db_error_message($db_game['name'],"S"));
		 //------------------------------------2----------------------------------------------------------------
		 //------------------------------------3----------------------------------------------------------------
		 $con_auth = mysql_connect($db_auth['host'],$db_auth['user'],$db_auth['pass']) or die(db_error_message($db_auth['name'],"C"));
		 $sel_db_auth = mysql_select_db($db_auth['name']) or die(db_error_message($db_auth['name'],"S"));
		 //------------------------------------3----------------------------------------------------------------
		 //------------------------------------4----------------------------------------------------------------
		 $con_user = mysql_connect($db_user['host'],$db_user['user'],$db_user['pass']) or die(db_error_message($db_user['name'],"C"));
		 $sel_db_user = mysql_select_db($db_user['name']) or die(db_error_message($db_user['name'],"S"));
		 //------------------------------------4----------------------------------------------------------------
		 //------------------------------------5----------------------------------------------------------------
		 $con_post = mysql_connect($db_auth['host'],$db_post['user'],$db_post['pass']) or die(db_error_message($db_post['name'],"C"));
		 $sel_db_post = mysql_select_db($db_post['name']) or die(db_error_message($db_post['name'],"S"));
		 //------------------------------------5----------------------------------------------------------------
//==============================mysql============================================
//===============================DB==============================================
	 
		 $count_slid = "2";
		 include("includes/function_template.php");
		/// include("includes/function.php");
?>