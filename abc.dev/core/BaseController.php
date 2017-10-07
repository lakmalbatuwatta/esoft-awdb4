<?php
/**
 * Created by PhpStorm.
 * User: PiushaKalyana
 * Date: 10/7/17
 * Time: 11:40 AM
 */

namespace core;



class BaseController 
{

    protected $layout = NULL;
    function __construct()
    {

        $this->view = new View($this->layout);

    }


}