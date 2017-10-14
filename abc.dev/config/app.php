<?php


/*echo "<pre/>";
print_r($_SERVER);
//die;*/

//App configurations
define('PROTOCOL',$_SERVER['REQUEST_SCHEME']);
$sitePath = PROTOCOL.'://'.$_SERVER['SERVER_NAME'];


define('SITE_PATH',$sitePath);
define('PUBLIC_HTTP_PATH',SITE_PATH.'/public');

