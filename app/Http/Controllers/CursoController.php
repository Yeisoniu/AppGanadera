<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){    
        return view('cursos.index');
    }
    public function create(){
        return view('cursos.create');
    }
    public function show ($nombre){
        return view('cursos.show',['curso' =>$nombre]);
        }
}
