<?php
// DATABASE CONFIG
////////////////////////////////////////////////////////////////////////////////////////////// 
	if($_SERVER['HTTP_HOST']=='localhost:8080'  ){

		$conf_db_hostname = "localhost";
		$conf_db_dbname   = "DB_NAME";
		$conf_db_username = "DB_USER";
		$conf_db_password = "DB_PASSWORD";


		define("SU","http://localhost:8080/anargtsCms/");
		define("IMG","http://localhost:8080/anargtsCms/public/img/");
		define("_IMG",IMG);
		define("SITEURL",SU);
	}else{
		$conf_db_hostname = "localhost";
		$conf_db_dbname   = "DB_NAME";
		$conf_db_username = "DB_USER";
		$conf_db_password = "DB_PASSWORD";


		define("SU","http://example.com/anargtsCms/");
		define("IMG","http://example.com/anargtsCms/public/img/");
		define("_IMG",IMG);
		define("SITEURL",SU);

			// if(eregi("www.",$_SERVER["SERVER_NAME"])==false){
			// 	header("Location: ".SU."");
			// 	exit();
			// }
	}


// DEFINE
////////////////////////////////////////////////////////////////////////////////////////////// 

	define("_site_title","anargtsCms");
	define("_config_site_name","anargtsCms DEMO");
	define("_config_site_url",SITEURL);
	define("_config_site_email","anargts0209@gmail.com");

// DEBUG MODE
////////////////////////////////////////////////////////////////////////////////////////////// 

	define("_site_debug", true);

// CONNECT DB
////////////////////////////////////////////////////////////////////////////////////////////// 
	$connect_result = @mysql_connect($conf_db_hostname, $conf_db_username, $conf_db_password);
	if($connect_result==false){
		die("<h3>anargtsCms error: ".mysql_error()."</h3>");
	}

	$connect_db = @mysql_select_db($conf_db_dbname, $connect_result);

	if($connect_db==false){
		die("<h3>anargtsCms error: ".mysql_error()."</h3>");
	}

	mysql_query("SET NAMES 'utf8';", $connect_result);
	mysql_query("SET CHARACTER SET 'utf8';", $connect_result);
	mysql_query("SET SESSION collation_connection = 'utf8_unicode_ci';", $connect_result);

// 汎用クラス集
////////////////////////////////////////////////////////////////////////////////////////////// 
	date_default_timezone_set("Asia/Ulaanbaatar");

	function phptime(){
		return time();
	}

	function nosql($a){
		$a = mysql_real_escape_string($a);
		return $a;
	}

	function nohtml($a){
		$a = htmlspecialchars($a);
		return $a;
	}

	function delhtml($a){
		$a = preg_replace("!\<(.*)\>!Usi", "", $a);
		return $a;
	}

	function nocode($a){
		$a = htmlspecialchars($a);
		return $a;
	}

	function taslah($data,$temdegttiintoo){
		$zz1 = substr($data,0,$temdegttiintoo);
		$zz2 = substr($data,$temdegttiintoo,200);
		$zz3 = explode(" ",$zz2);
		$hariu = $zz1.$zz3[0];
		return $hariu;
	}
	// session start
	session_start();

	function phpmail($to, $title, $body, $header){
		@mail($to, $title, $body, $header);
	}

// 汎用クラスここまで
////////////////////////////////////////////////////////////////////////////////////////////// 
	if($_POST){
		foreach ($_POST as $key => $val) {
			$$key = $val;
		}
	}

	if($_GET){
		foreach ($_GET as $key => $val) {
			$$key = $val;
		}
	}
?>