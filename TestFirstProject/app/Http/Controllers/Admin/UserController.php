<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\useer;
use App\Http\Controllers\Admin\RoleController;
use Exception;

class UserController extends Controller
{

    public function add(Request $request){
        $name=$request->name;
        $password=$request->password;
        $email=$request->email;
        $mobile=$request->mobile;
        useer::create(["name"=>$name,"password"=>$password,"email"=>$email,"mobile"=>$mobile]);}
    public function get($id){
      try{  
        $user=useer::with('role')->find($id);
        if(!$user){
            return response()->json(['data' => '','msg' => 'NOT FOUND'],404);
        }else{
            return response()->json(['data' => $user,'msg' => 'Successfully'],200);}
       }
       catch(Exception $exception){
        return response()->json(['data' => $exception,'msg' => 'FAILED'],500);}}


    }
