<?php

/**
 * Created by PhpStorm.
 * User: PiushaKalyana
 * Date: 9/9/17
 * Time: 1:07 PM
 */
namespace Model;
use \Core\Model;
class Category extends Model
{

    protected  $table ="categories";
    function __construct()
    {
       parent::__construct();
    }

    public function getItems(){


       return $this->find(['title']);

    }


}