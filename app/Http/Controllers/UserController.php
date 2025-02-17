<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //Handing POST request
    public function submitForm(Request $request){
        $request->validate([
            'name'=> 'required|string|max:255',
            'email'=> 'required|email|unique:users'
        ]);
        $user->create([
            'name'=> $request->name,
            'email'=> $request->email
        ]);
        return response()->json([
            'message'=> 'User created successfully!',
            'user'=> $user
        ],201);
    }
}
