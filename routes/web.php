<?php
/* Laravel lee las entradas de la web de manera secuencial por lo tanto sigue el orden en el cual estén
escritas en este documento */
use Illuminate\Support\Facades\Route;
//Para usar controladores, debo de añadirlos de la siguiente forma
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;

Route::get('/', HomeController::class); /* Route::get('/', 'HomeController'); <<Llamado de controladores Laravel 7>> */
    
Route::controller(GalleryController::class)->group(function(){
    Route::get('gallery', 'index'); /* Route::get('gallery', ['GalleryController@index']); <<Llamado de controladores Laravel 7>> */
    Route::get('gallery/join-us', 'join');
    Route::get('gallery/{imagenID}', 'show');
});

