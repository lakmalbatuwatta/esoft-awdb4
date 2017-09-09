<?php
/**
 * User: PiushaKalyana
 * Date: 9/9/17
 * Time: 12:31 PM
 */
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);

// './core/Model.php';
include_once './model/Items.php';
//include_once './model/Users.php';
$item = new Items();
echo $item->getItems();

echo "<br/>";
//$user = new Users();

//$user->getUser();

//echo "ACCESS THROUGH OBJECT<br/>";
//echo $user->getConnection();

