<?php

namespace App\Http\Controllers\API;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;  
use Auth;



class Usercontroller extends Controller
{
    public function userLogin(Request $req)
    {

   $validatedData = $req->validate([
    'email'=>'required',
    'password'=>'required' 

   ]);

   $user= migrations::create($validatedData);
   echo "<pre>";
   print_r($user);
    
    }

}
