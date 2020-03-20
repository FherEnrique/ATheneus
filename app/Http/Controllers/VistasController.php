<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistasController extends Controller
{
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
    
    public function play(){
        return view('play');
    }
    public function about(){
        return view('about');
    }
    public function game(){
        return view('game');
    }
}
