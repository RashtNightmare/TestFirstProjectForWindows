<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class useer extends Model
{
    use HasFactory;
    /*
    *@var string[]
    */
    protected $fillable = [
        'name','email','password'];
    /*
    *@var string[]
    */
    protected $hidden = [
        'password','remember_token'];
    /*
    *@var string[]
    */
    protected $casts = [
       'email_verified_at' => 'datetime'];
    
    public function role(){
        return $this->belongsTo(Role::class);
    } 
    


}
