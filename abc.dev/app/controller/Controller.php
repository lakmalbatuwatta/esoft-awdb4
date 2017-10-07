<?php
/**
 * Created by PhpStorm.
 * User: PiushaKalyana
 * Date: 10/7/17
 * Time: 11:14 AM
 */

namespace App\Controller;
use core\BaseController;

class Controller extends  BaseController
{

    private $layout = "theme1";

    function __construct()
    {
        parent::__construct($this->layout);
    }

    public function isLogged(){


    }

}