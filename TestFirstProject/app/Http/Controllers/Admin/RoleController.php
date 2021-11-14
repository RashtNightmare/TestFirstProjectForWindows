<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\role;
use App\Http\Controllers\Admin\UserController;

class RoleController extends Controller
{
    //
    public function add(Request $request){
        $name=$request->name;
        role::create(["name"=>$name]);}
}
