<?php
/**
 * Created by PhpStorm.
 * User: PiushaKalyana
 * Date: 9/16/17
 * Time: 12:07 PM
 */

namespace App\Controller;


class HomeController extends Controller
{

    function __construct()
    {
       parent::__construct();
    }


    //default index function

    public function index(){
        $this->render('home_index.page');
    }

}