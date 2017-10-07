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

    protected $layout = "theme1";



    public function isLogged(){

        $this->view->getLayout();
        return "true";
    }

}