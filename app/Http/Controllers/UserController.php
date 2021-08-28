<?php

namespace App\Http\Controllers;

use Crypt;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
     
     $User= User::all();

     return response()->json($user
    );

    }

     public function create(Request $request)
     {
        $User = new User;

       $User->name= $request->name;
       $User->email = $request->email;
       $User->password= $request->password;
       
       $User->save();

       return response()->json($User);
     }
     public function authenticate(Request $request){
         $User = new User;
         $token = $request->bearerToken();
     }

   
    }