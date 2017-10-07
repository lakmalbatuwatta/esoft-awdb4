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
        $this->layout = $layout;
    }



    public function getLayout(){

        echo $this->layout;
    }



}