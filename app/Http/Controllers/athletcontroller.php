<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\athlet;

class athletcontroller extends Controller
{
    function getData(){
        $data=athlet::all();
        return view('home',['athlets'=>$data]);
    }

}
