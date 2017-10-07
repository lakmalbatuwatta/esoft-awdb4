<?php

/**
 * Created by PhpStorm.
 * User: PiushaKalyana
 * Date: 9/16/17
 * Time: 11:41 AM
 */

namespace App\Controller;




class UsersController extends Controller
{


    public function __construct()
    {


    }


    public function index($userId = null){

        $this->isLogged();
        //$this->render('viewname');
    }

    public function profile(){
        echo "This is Profile Function";
    }

    public function edit(){
        echo "this is edit function";
    }

}