<?php

/**
 * Created by PhpStorm.
 * User: PiushaKalyana
 * Date: 9/16/17
 * Time: 11:41 AM
 */

namespace App\Controller;


class UsersController
{


    public function __construct()
    {
    }


    public function index($userId){
        echo "This is Index function from the user-->".$userId;;
    }

    public function profile(){
        echo "This is Profile Function";
    }

    public function edit(){
        echo "this is edit function";
    }

}