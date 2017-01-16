<?php
@session_start();
define('SHAMIM','true');
define('SITE_TITLE','Community | Englishfor2day');
define('PROJECT','stackoverflow');
define('BASE_HOST','http://'.$_SERVER['HTTP_HOST']);
define('BASE_URL',BASE_HOST.'/'.PROJECT);
//define('BASE_URL',BASE_HOST);
define('BASE_DIR',dirname(dirname(__FILE__)));
define('TEMP_NAME','v1');
define('TEMP_PATH','template/'.TEMP_NAME);

define('TEMP_JS',BASE_URL.'/'.TEMP_PATH.'/js');
define('TEMP_CSS',BASE_URL.'/'.TEMP_PATH.'/css');
define('TEMP_IMG',BASE_URL.'/'.TEMP_PATH.'/images');
define('TEMP_FONT',BASE_URL.'/'.TEMP_PATH.'/fonts');
?>