<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\prueba;

class UserController extends Controller
{
    public function show($id){
        //$uu = \DB::table('prueba')->where('id', $id)->first();
        //dd($uu);
        return view('users', ['uu' => prueba::where('id',$id)->firstOrFail()]);
    }
    
    public function saluda(){
        //return view('users', ['name' => 'Jose','name2' => 'IGNACIIO']);
        return view('users')->with('name','IGNACIIO')->with('name2','SALUUU'); 
    }
    public function array()
    {
        $titulo ="pruebas" ;
        if (request()->has('empty')) {
            $aprueba = [];
        }else {
            $aprueba = [
                "uno",
                "dos",
                "tres",
                "<script>alert('HOLA MUNDO')</script>"
            ];
        }
        
        return view('users', compact('aprueba','titulo'));
        /*return view('users',[
            'aprueba' => $aprueba,
            'titulo' => $titulo ="prueas" 
        ]);*/
    }
}
