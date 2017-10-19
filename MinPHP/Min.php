<?php
session_start();
ini_set('display_errors','Off');

defined('ROOT') or define('ROOT',str_replace('\\','/',dirname(__DIR__).'/'));
defined('MINPHP') or define('MINPHP',str_replace('\\','/',dirname(__DIR__).'/MinPHP/'));

require_once(MINPHP.'Common/constant.php');
require_once(MINPHP.'Common/config.php');
require_once(MINPHP.'Common/functions.php');

set_include_path(get_include_path().PATH_SEPARATOR.ROOT);
set_include_path(get_include_path().PATH_SEPARATOR.MINPHP);

function __autoload($obj) {
	//echo $obj.'<br>';
	$obj = str_replace('\\', '/', $obj); 
	require($obj.'.class.php');
}