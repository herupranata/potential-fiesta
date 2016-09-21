<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('menu1');
});

Route::get('/menu1', function () {
    return view('menu1');
});

Route::get('/menu2', function () {
    return view('menu2');
});

Route::get('belajar', function () {
    return '<h1><strong>Ini hasil dari route belajar</strong></h1>';
});

Route::get('required/{id}', function ($id) {
    return 'Kode User '.$id;
});

Route::get('Regular/{id}', function ($id) {
   return 'Hanya Boleh Berisi huruf'; 
})
->where('id', '[A-Za-z]+');

Route::get('Regular/{id}/{nama}', function ($id, $nama) {
    return 'ini parameter yang berisi angka "'.$id.'" dan ini parameter yang Berisi huruf "' .$nama.'"';
})
->where(['id' => '[0-9]+', 'nama' => '[a-z]+']);

//--------------------------belajar controller------------------------------//

Route::get('belajar_controller/{id}', 'belajar_controller@belajar');

Route::get('home', 'home@index');

