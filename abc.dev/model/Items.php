<?php

/**
 * Created by PhpStorm.
 * User: PiushaKalyana
 * Date: 9/9/17
 * Time: 1:07 PM
 */
require_once './core/Model.php';
class Items extends Model
{

    protected  $table ="items";
    function __construct()
    {
       parent::__construct();
    }

    public function getItems(){

       return $this->find();
    }


}