<?php
/* CursosController */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        return view('gallery.index');
    }
    
    public function join(){
        //create    
        return view('gallery.joinus');
    }

    public function show($imagenID){
        return view('gallery.show', ['imagenID' => $imagenID]);
    }
}
