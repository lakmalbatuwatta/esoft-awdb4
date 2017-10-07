<?php
/**
 * User: PiushaKalyana
 * Date: 9/9/17
 * Time: 12:31 PM
 */
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);

require_once 'core/Bootstrap.php';
require_once 'core/View.php';
require_once 'core/BaseController.php';



$bootstrap = new Core\Bootstrap();

new Core\BaseController();
