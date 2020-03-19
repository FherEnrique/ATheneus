<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\prueba;

class UserController extends Controller
{   
    public function saluda(){
        //return view('users', ['name' => 'Jose','name2' => 'IGNACIIO']);
        return view('users')->with('name','IGNACIIO')->with('name2','SALUUU'); 
    }
}