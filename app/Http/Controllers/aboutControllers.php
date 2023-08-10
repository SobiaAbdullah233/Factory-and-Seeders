<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutControllers extends Controller
{
    //
    function show(){
        return view('admin.aboutView');
    }
}
