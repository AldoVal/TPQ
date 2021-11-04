<?php

namespace App\Http\Controllers;

use App\Models\ModelDetailPeran;
use Illuminate\Http\Request;

class DetailPeran extends Controller
{
    public function index(){
        $peran = ModelDetailPeran::all();
        return view('display.detailperan',['peran'=>$peran]);
    }
}
