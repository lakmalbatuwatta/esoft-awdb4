<?php

/**
 * Created by PhpStorm.
 * User: PiushaKalyana
 * Date: 9/16/17
 * Time: 11:12 AM
 *
 * Bootstrap Layer
 *
 * This layer will help to communicate with URL and
 * point to the relevent controller and its action methods
 */

namespace Core;




use App\Controller;
use Lib\Util;
require_once './lib/Util.php';


class Bootstrap
{


    function __construct()
    {


        if(isset($_GET['url'])){
            $_explodedUrl = Util::explode('/',$_GET['url']);

            //Allways first parameter will be controller

            $this->invokeController($_explodedUrl[0]);
        }

        else{
            echo "Call Default Controller when URL not defined";
        }

        //


    }

    /**
     * Invoke Controller
     * @param $urlDataSet
     */
    private function invokeController($controllerName){

        $_contollerName = ucwords($controllerName.'Controller');
        $fileName = $_contollerName.'.php';
       //echo  $_contollerName."<br/>";



        // require

        $fileName = './app/controller/'.$fileName;

        echo $fileName;

        require_once $fileName;


        $c= "UsersController";
        $object = new $c;









    }





}