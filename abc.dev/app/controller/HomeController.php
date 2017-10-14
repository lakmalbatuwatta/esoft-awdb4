<?php
/**
 * Created by PhpStorm.
 * User: PiushaKalyana
 * Date: 9/16/17
 * Time: 12:07 PM
 */

namespace App\Controller;
require_once 'app/model/Category.php';



class HomeController extends Controller
{

    function __construct()
    {
       parent::__construct();
    }


    //default index function

    public function index(){

        $category = new \Model\Category();
        $this->categories = $category->getItems();




        $this->render('home_index.page');
    }

}