<?php
/**
 * Created by PhpStorm.
 * User: PiushaKalyana
 * Date: 9/16/17
 * Time: 12:08 PM
 */

namespace App\Controller;


class ProductsController extends Controller
{

    function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $this->render('product_index.page');
    }

}