<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    // header("Cache-Control: post-check=0, pre-check=0", false);
    // header("Pragma: no-cache");


    include("conf.php");

    $module = '';
    $page_title= '';
    $page_custom_title = '';
    $v1=''; 
    $is_404_page = false;
    $PHP_SELF = &$_SERVER['PHP_SELF'];

// Router設定
//////////////////////////////////////////////////////////////////////////////////////////////
    // search engine friendly URL make
    $ru = $_SERVER["REQUEST_URI"];
    $ru = "http://".$_SERVER["HTTP_HOST"].$ru;
    $ru = str_replace(SITEURL,"",$ru);
    $ru2 = explode("?",$ru);
    $ru = $ru2[0];
    $v1 = $ru;

    if($ru==true){
        if(substr($ru,-1)!="/"){ 
            $ru .= "/"; 
        }
        $ru_t = explode("/",$ru);
        $niit_ru_t = count($ru_t);
        for($z=0;$z<$niit_ru_t;$z++){
            $nm = $z+1;
            $v_ner = "v".$nm;
            $v_ner = $ru_t[$z];
        }
    }

    // search engine friendly URL end
    if($v1==false){ $v1='home'; }
    switch($v1){
        default:  $is_404_page = 1; break;
        case "home": $module = "home"; break;
        case "doc": $module = "doc"; break;
        case "contact": $module = "contact"; break;
    }

    if($module==true){
         include("module/$module/mod_header.php");
    }

    if($is_404_page==1){ include("404.php"); exit(); }
// Router設定ここまで
//////////////////////////////////////////////////////////////////////////////////////////////

// メインビュー
//////////////////////////////////////////////////////////////////////////////////////////////
    include("layout/main.php");  
?>