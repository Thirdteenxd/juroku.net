<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        //El comando '__invoke' se usa para controladores que solo administren una única ruta
        return view('welcome');
        /* return "Página principal"; */
    }
}
