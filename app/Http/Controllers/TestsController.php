<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpMyAdmin\Config\Form;

class TestsController extends Controller
{

    public function store(Request $request){
        
        dd($request->all());

        }
}
