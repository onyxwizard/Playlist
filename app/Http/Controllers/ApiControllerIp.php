<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class ApiControllerIp extends Controller
{
    function index()
    {
        $req = Http::get("https://api.ipify.org/");
        return view('api')->with('req',$req);
    }
}
