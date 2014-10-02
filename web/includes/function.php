<?php
    include("includes/list_error_message.php");
    
    
    ///--------JSON--------
    include("includes/class/json.php");
    // json_encode - за кодирование
    if( !function_exists('json_encode') ) {
        function json_encode($data) {
            $json = new Services_JSON();
            return( $json->encode($data) );
        }
    }
    // json_decode - раскодирование
    if( !function_exists('json_decode') ) {
        function json_decode($data, $bool) {
            if ($bool) {
                $json = new Services_JSON(SERVICES_JSON_LOOSE_TYPE);
            } else {
                $json = new Services_JSON();
            }
            return( $json->decode($data) );
        }
    }
    ///--------JSON--------
    $j = file_get_contents('http://api.vk.com/method/wall.get?owner_id=-'.$id['owner'][0].'&filter=owner');
    $response = json_decode($j, true);
    ///--------unixdecode--------
    function unixdecode($t){
    $r = date("Y-m-d H:i:s" , $t);
    return $r;
        }
    ///--------unixdecode--------
    
    function db_error_message($n,$t){
	    include("includes/list_error_message.php");
        if($t == "C"){
            $m = "<center>".$mess_error['er_con']." <b>".$n."</b></center>";
         }
         else if($t == "S"){
            $m = "<center>".$mess_error['er_sel']." <b>".$n."</b></center>";
         }
         else {
            $m = "<center>".$mess_error['er_all']." <b>".$n."</b></center>";
         }
         return $m;
    }
    function error_message_site($t){
	    global $mess_error;
        if($t == "F"){
            $m = '<html><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><center>'.$mess_error['er_fol'].'</center></html>';
         }
         else if($t == "MD"){
            $m = '<html><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><center>'.$mess_error['er_mob_d'].'</center></html>';
         }
         else if($t == "D"){
            $m = '<html><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><center>'.$mess_error['er_device'].'</center></html>';
         }
	     else
	     {
	        $m = '<html><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><center>'.$mess_error['er_none'].'</center></html>';
	     }
         return $m;
    }
	
    function os_info()
    {
        $userAgent = $_SERVER['HTTP_USER_AGENT'] . "";
        $os_type   = array(
            'Windows' => 'Win16',
            'Windows' => '(Windows 95)|(Win95)|(Windows_95)',
            'Windows' => '(Windows 98)|(Win 9x 4.90)|(Windows ME)',
            'Windows' => '(Windows 98)|(Win98)',
            'Windows' => '(Windows NT 5.0)|(Windows 2000)',
            'Windows' => '(Windows NT 5.1)|(Windows XP)',
            'Windows' => '(Windows NT 5.2)',
            'Windows' => '(Windows NT 6.0)',
            'Windows' => '(Windows NT 6.1)',
            'Windows' => '(Windows NT 6.2)',
            'Windows' => '(Windows NT 4.0)|(WinNT4.0)|(WinNT)|(Windows NT)',
            'OpenBSD' => 'OpenBSD',
            'SunOS' => 'SunOS',
            'Ubuntu' => 'Ubuntu',
            'Android' => 'Android',
            'Linux' => '(Linux)|(X11)',
            'iOS' => 'iPhone',
            'iOS' => 'iPad',
            'MacOS' => '(Mac_PowerPC)|(Macintosh)',
            'QNX' => 'QNX',
            'BeOS' => 'BeOS',
            'OS2' => 'OS/2',
            'SearchBot' => '(nuhk)|(Googlebot)|(Yammybot)|(Openbot)|(Slurp)|(MSNBot)|(Ask Jeeves/Teoma)|(ia_archiver)'
        );
    	
        $userAgent = strtolower($userAgent ? $userAgent : $_SERVER['HTTP_USER_AGENT']);
    	
        foreach ($os_type as $os => $pattern){
            if (preg_match('/' . $pattern . '/i', $userAgent))
                return $os;
    	}
    	
        return 'Unknown';
    }
	function type_os()
    {
	    $n = os_info();
		
	    if($n == "Windows"){ $type_client = "PC"; }
	    else if($n == "Linux"){$type_client = "PC";}
	    else if($n == "MacOS"){$type_client = "PC";}
	    else if($n == "SunOS"){$type_client = "PC";}
	    else if($n == "Ubuntu"){$type_client = "PC";}
	    else if($n == "BeOS"){$type_client = "PC";}
	    else if($n == "OpenBSD"){$type_client = "PC";}
	    else if($n == "OS2"){$type_client = "PC";}
	    else if($n == "Android"){$type_client = "MOB";}
	    else if($n == "iOS"){$type_client = "MOB";}
	    else if($n == "QNX"){$type_client = "MOB";}
	    else if($n == "SearchBot"){$type_client = "BOT";}
	    else {$type_client = "UNK";}
		
		return $type_client;
	}
?>