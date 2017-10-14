<?php

/**
 * Created by PhpStorm.
 * User: PiushaKalyana
 * Date: 9/9/17
 * Time: 12:38 PM
 */

namespace Core;
class Model
{

    protected $table    = NULL;

    private $con        = NULL;
    private $where      = NULL;

    function __construct()
    {

        try{
            $conStr = "mysql:host=".DB_SERVER.";dbname=".DB_NAME;
            //$dbCon = new PDO();
            $this->con = new \PDO($conStr, DB_USER, DB_PASSWORD);
        }catch (\PDOException $e){

            echo $e->getMessage();

        }

    }


    /**
     * Where
     * @param $where
     */
    public function where($where){

        $this->where = $where;
        return $this;

    }
    /**
     * Query table based on the protected var name
     * @return string
     */
    protected function find($fields = []){

        $implodedFields = (count($fields) > 0 )?implode(',',$fields):"*";
        $q = "SELECT {$implodedFields} FROM ".$this->table;

        $q = $this->buildWhereQuery($q);


        $stmt = $this->con->prepare($q);
        $stmt->execute();
        return self::prepareDataSet($stmt,$fields);

    }


    private  function buildWhereQuery($q){

        $q = $q;

        if( count($this->where) > 0){

            $q .= ' WHERE 1 = 1';
            foreach($this->where as $key => $val){
                $q .= " AND {$key} = {$val}";
            }
            return $q;
        }

        return $q;

    }


    private static function prepareDataSet($statement,$fields){

        $out = [];
        while ($row = $statement->fetch())
        {

            if(count($fields) > 0){
                $temp = [];
                foreach($fields as $val ){
                    $temp[$val] =  $row[$val];
                }

                $out[] = $temp;
            }else{

                $temp = [];
                foreach($row as $key=>$val ){
                    if(gettype($key) != 'integer'){
                        $temp[$key] =  $row[$key];
                    }

                }

                $out[] = $temp;
            }


        }

        return $out;


    }






}