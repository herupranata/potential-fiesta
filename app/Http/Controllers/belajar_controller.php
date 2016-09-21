<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class belajar_controller extends Controller
{
    public function belajar($id){
    	return '<h1>Belajar Controller dengan parameter : '.$id.' </h1>';
    }
}
