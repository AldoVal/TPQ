<?php

namespace App\Http\Controllers;

use App\Models\ModelDetailKemajuan;
use App\Models\ModelKemajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataSantri extends Controller
{
    public function detailkemajuan(){
        $santri = DB::table('detailkemajuan')->get();
        return view('display.wali.detailkemajuan',['detailkemajuan'=>$santri]);
    }
    public function kemajuan(){
        $santri = DB::table('kemajuan')->get();
        return view('display.wali.kemajuan',['kemajuan'=>$santri]);
    }
    public function index(){
        $santri = DB::table('santri')->get();
        return view('display.wali.santri',['santri'=>$santri]);
    }

}
