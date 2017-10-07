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



    private $content = NULL;

    public function __construct($layout)
    {
        $this->layout = $layout;
    }



    private function renderLayout(){
        $layoutName = 'layout/'.$this->layout.'.layout';
        $this->renderView($layoutName);
    }

    public function render($name){

            $this->content   = $name;
            $this->renderLayout();

    }

    public function content(){

        $this->renderView($this->content);
    }

    private function renderView($viewName){
        $viewFileName =  './app/view/'.$viewName.'.php';

        if(!file_exists($viewFileName)){
            echo "Cannot fine any View";
        }

        require_once $viewFileName;
    }



}