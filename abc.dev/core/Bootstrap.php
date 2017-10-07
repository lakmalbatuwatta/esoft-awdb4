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




use App\Controller\Controller;
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
            //Invoking base controller
            require_once './app/controller/Controller.php';
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


        //Default Index action function will invoke when Action function not defined in the URL as
        //second parameter
        $methodName = (isset($urlDataSet[1]))?$urlDataSet[1]:'index';

        if(!method_exists($controller,$methodName)){
            $this->error();
            return ;
        }

        if(isset($urlDataSet[2])){
            $controller->{$methodName}($urlDataSet[2]);

        }else{
            $controller->{$methodName}();
        }









    }





}