<?php
//================================================================================================================================================================
    $L = $_POST['rusername'];
	
    $P1 = $_POST['rpassword1'];
	
    $P2 = $_POST['rpassword2'];
	
    $E = $_POST['remail'];
	
	$S1 = $_POST['seccode'];
	
	$S2 = $_POST['seccode2'];
	
	if(isset($_POST['rusername'])){
	print "login null";
	//if($L = NULL){print "login null";}
	
	}
//================================================================================================================================================================
    /*if(isset($_POST['rusername'])){
	//////////////////////////////////

	
    $date_creat = Date('Y.m.d')." ".Date('h:i:s');
    
    if($login == ""){
    $erros_reg = "<b>Укажите имя пользователя.</b>";
    } else {
    if($password1 == ""){
    $erros_reg = "<b>Укажите пароль.</b>";
    } else {
    if($email == ""){
    $erros_reg = "<b>Укажите E-Mail.</b>";
    } else {
    if($date == ""){
    $erros_reg = "<b>Укажите Дату рождения.</b>";
    } else {
    if($code == ""){
    $erros_reg = "<b>Введите проверочный код.</b>";
    } else {
    
    if($code == $_SESSION['capcha']){
    if( strlen( $login ) < 3 || strlen( $login ) > 12 ) $erros_reg = "<b>Логин может быть от 3 символов до 12</b>";
    elseif( !ctype_alnum( $login ) ) $erros_reg = "<b>Логин может состоять только из ( a-Z 0-9 ) символов</b>";
    else {
    if( strlen( $password1 ) < 3 || strlen( $password1 ) > 12 ) $erros_reg = "<b>Пароль может быть от 3 символов до 12</b>";
    elseif( !ctype_alnum( $password1 ) ) $erros_reg = "<b>Пароль может состоять только из ( a-Z 0-9 ) символов</b>";
    else {
    //
    $login = mb_strtolower($login);
    $connect = mysql_connect($server_ip,$user,$pass_server) or die(mysql_error());
    $sql_l = mysql_query("SELECT * FROM $database_2.bg_user WHERE user_id='".$login."'");
    $sql_l_p = mysql_fetch_assoc($sql_l);
    //
    if($login == $sql_l_p['user_id']){
    $erros_reg = "<b>Указаное имя пользователя уже используется.</b>";
    } else {
    if($password1 == $password2){
    $pass = hash("sha256",$login.$salt.$password1);
    $sql = mysql_query("INSERT INTO $database_2.bg_user (user_id,passwd,email,create_date,a_birth_day,ip) VALUES('".$login."','".$pass."','".$email."','".$date_creat."','".$date."','".$ip_user."')",$connect);
    }
	}
	}
	}
	}
	}
	}
	}
	}
	}
	
	//////////////////////////////////
	}*/
?>