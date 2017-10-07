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




use Lib\Util;
require_once './lib/Util.php';


class Bootstrap
{


    function __construct()
    {


        if(isset($_GET['url'])){
            $_explodedUrl = Util::explode('/',$_GET['url']);

            //Allways first parameter will be controller
            $controller     = $this->invokeController($_explodedUrl[0]);
            $this->invokeActionMethods($controller,$_explodedUrl);


        }else{
            //Invoke default home page when browser load the application
            $controller     = $this->invokeController('home');
            $controller->index();
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

        $fileName = './app/controller/'.$fileName;

        if(file_exists($fileName)){
            //echo $fileName;
            require_once $fileName;
            $class= "App\\Controller\\";
            $class .= $_contollerName;
            return new $class();
        }

        $this->error();



    }

    /**
     * Handle Errors
     */
    private function error(){


        $fileName = './app/controller/ErrorController.php';

        //echo $fileName;

        require_once $fileName;
        $class= "App\\Controller\\ErrorController";

        $object = new $class();
        $object->error404();

    }

    /**
     * @param $controller Controller Class object
     * @param $urlDataSet
     */
    private function invokeActionMethods($controller,$urlDataSet){

        if(isset($urlDataSet[1])){
            $_functionName = $urlDataSet[1];
            $controller->$_functionName();
            //function_exists()
        }else{
            $controller->index();
        }




    }





}