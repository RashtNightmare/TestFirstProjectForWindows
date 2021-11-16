<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\role;
use App\Http\Controllers\Admin\UserController;
use Exception;

class RoleController extends Controller
{
    //yawp
    //
    public function add(Request $request){
        $name=$request->name;

        try {
            $role=role::create(["name"=>$name]);
            return response()->json([
               'data'=> $role,
               'msg' => 'successfully'
            ],200);
        }catch(Exception $exception){
            return response()->json([
                'data'=> '',
                'msg' => 'failed'
             ],500);
           }  
        }
}
