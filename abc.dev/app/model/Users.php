<?php

/**
 * Created by PhpStorm.
 * User: PiushaKalyana
 * Date: 9/9/17
 * Time: 1:16 PM
 */

require_once './core/Model.php';
class Users extends Model
{

    protected $table = "users";
    function __construct()
    {
        parent::__construct();


    }

    public function getUser(){
        //echo "ACCESS CONNECTION FROM USER CLASS<br/>";
        //echo $this->getConnection();
        //$this->closeConnection();
        echo '<br/>';
        $query = $this->find();
        echo $query;
    }



}