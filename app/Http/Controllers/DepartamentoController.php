<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function departamentoIndex(){
        return view('departamento.index');
    }
}
