<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\athlet;
use Resources\Views\home;
use Resources\Views\edite;

class addcontroller extends Controller
{
    function addData(Request $req){
        $athlet = new athlet;
        $athlet->name=$req->name;
        $athlet->adresse=$req->adresse;
        $athlet->age=$req->age;
        $athlet->phone=$req->phone;
        $athlet->save();
        return redirect('home');
    }
    function deleteData($id){
        $data= athlet::find($id);
        $data->delete();
        return redirect('home');
    }
    function showedite($id){
        $data = athlet::find($id);
        return view('edite',['data'=>$data]);
    }
    function UpdateData(Request $req){
        $data= athlet::find($req->id);
        $data->name=$req->name;
        $data->adresse=$req->adresse;
        $data->age=$req->age;
        $data->phone=$req->phone;
        $data->save();
        return redirect('home');
    }
}
