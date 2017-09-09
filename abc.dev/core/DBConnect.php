<?php

/**
 * User: PiushaKalyana
 * Date: 9/9/17
 * Time: 1:03 PM
 */
class DBConnect
{

    private $con = NULL;

    function __construct()
    {
       // echo "DB CONNECTION CONFIGURATIONS INIT<br/>";
    }


    private function prepareConnection(){

        $this->con = "CONNECTION PREPARED<br/>";

    }

    public function getConnection(){
        $this->prepareConnection();
        return $this->con;
    }


    protected function closeConnection(){
        echo "CLOSE CONNECTION<br/>";
    }

    public function getTableName(){
        echo "TABLE SET FROM CHILD BUT DISPLAY FROM PARENT  ";

        echo $this->tbName;

        echo "<br/>";

    }



}