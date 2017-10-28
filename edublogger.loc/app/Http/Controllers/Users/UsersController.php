<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    //


    /**
     * Create New User
     * @param Request $request
     */

    public function createUser(Request $request){


        $data = [
            'status'=>600,
            'data'=>$request->all()
        ];
        return response()->json($data,200);
    }
}
