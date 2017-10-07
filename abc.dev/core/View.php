<?php
/**
 * Created by PhpStorm.
 * User: PiushaKalyana
 * Date: 10/7/17
 * Time: 11:30 AM
 */

namespace core;


class View
{



    public function __construct($layout)
    {

        $layoutName = 'layout/'.$layout.'.layout';
        $this->renderView($layoutName);
    }




    public function render($viewName){

        return $this->renderView($viewName);

    }

    private function renderView($viewName){
        $viewFileName =  './app/view/'.$viewName.'.php';

        if(!file_exists($viewFileName)){
            echo "Cannot fine any View";
        }

        require_once $viewFileName;
    }



}