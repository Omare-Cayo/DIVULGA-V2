<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class catalogocontroller extends Controller
{
 public function index(){
return view('catalogo.index');
 }
public function create(){
    view('catalogo.create');
}
public function show($catalogo){
    view('catalogo.show');
}
}
