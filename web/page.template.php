<?php
    include_once( "includes/class/Template.php" );
	
    $tpl = new TemplatePower( "styles/".$conf['STYLE']."/template/templ.tpl" );
	$tpl->assignInclude( "MENU", "styles/".$conf['STYLE']."/template/menu.tpl" );
	$tpl->assignInclude( "MENU_LEFT", "styles/".$conf['STYLE']."/template/menu_left.tpl" );
	$tpl->assignInclude( "BODY", "styles/".$conf['STYLE']."/template/body.tpl" );
	
    $tpl->assignInclude( "BODYS", "styles/".$conf['STYLE']."/template/".$name_page.".tpl" );
	
    $tpl->prepare();
    
	$tpl->Assign('title' , $conf['NAME'] );
	$tpl->Assign('keywords' , $conf['DES'] );
	$tpl->Assign('description' , $conf['KEY'] );
	$tpl->Assign('STYLE' , $conf['STYLE'] );
	$tpl->Assign('ICON_NUM' , $conf['ICON'] );
	$tpl->Assign('host' , $_SERVER["HTTP_HOST"] );
	$tpl->Assign('fav_ico' , $_SERVER["HTTP_HOST"] );
	$tpl->Assign('url' , $_SERVER["HTTP_HOST"] );
	$tpl->Assign('Copyright' , $conf['COPY'] );
	
	$tpl->Assign('platform' , os_info() );
	$tpl->Assign('user_agent' , $_SERVER['HTTP_USER_AGENT'] );
	$tpl->Assign('platform_server' , $os_server );
	$tpl->Assign('platform_server_dop' , $os_server_pd );
	//в body.tpl -- начало
	
	$tpl->Assign('STATUS_SERVER' , "ONLINE" );
	
	//status_s_on и off
	$tpl->Assign('style_status_s' , "status_s_on" );
	
	
	$tpl->newBlock('bannershow');
	
	for($i=0;$i<$count_slid;$i++){
	//Размеры баннера 495х141
	$tpl->newBlock('slide');
	$tpl->Assign('pr_int' , "" );
	$tpl->Assign('num' , $i );
	}
	
	
	//в body.tpl -- конец
	
	if($menu_left['REG'] == 'on'){
	//
	$tpl->newBlock('MENU_LEFT_REG');
	//
	}
	if($menu_left['AUT'] == 'on'){
	//
	$tpl->newBlock('MENU_LEFT_AUT');
	//
	}
	if($menu_left['BUT1'] == 'on'){
	//
	$tpl->newBlock('MENU_LEFT_BUT1');
	//
	}
	if($menu_left['CAST'] == 'on'){
	//
	$tpl->newBlock('MENU_LEFT_CASTLE');
	$tpl->Assign('cast_merac' , "test1" );
	$tpl->Assign('m_next' , "Смотрите в игре" );

	$tpl->Assign('cast_dratan' , "test2" );
	$tpl->Assign('d_next' , "Смотрите в игре" );
	//
	}
	
	$tpl->newBlock('NEW');
    $tpl->printToScreen();
	
?>