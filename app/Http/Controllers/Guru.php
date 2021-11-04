<?php

namespace App\Http\Controllers;

use App\Models\ModelPengurus;
use Illuminate\Http\Request;

class Guru extends Controller
{
    public function index(){
        $pengurus = ModelPengurus::all();
        return view('display.guru',['pengurus'=>$pengurus]);
    }
}
