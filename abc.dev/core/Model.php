<?php

/**
 * Created by PhpStorm.
 * User: PiushaKalyana
 * Date: 9/9/17
 * Time: 12:38 PM
 */
require_once 'DBConnect.php';
class Model extends DBConnect
{

    protected $table = NULL;

    function __construct()
    {
       parent::__construct();
    }


    /**
     * Query table based on the protected var name
     * @return string
     */
    public function find(){
        return "SELECT * FROM ".$this->table;
    }




}