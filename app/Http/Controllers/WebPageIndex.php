<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebPageIndex extends Controller
{
    public function Index(){
        return view("title.home");
    }
}
