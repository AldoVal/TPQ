<?php

namespace App\Http\Controllers;

use Facade\Ignition\Tabs\Tab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DataSantri extends Controller
{
    public function detailkemajuan(){
        $santri = DB::table('santro')->get();
        $kemajuan = DB::table('kemajuan')->get();
        $bab = DB::table('bab')->get();
        $detail = DB::table('detailkemajuan')
        ->join('santri','santri.IDSANTRI','=','kemajuan.IDKEMAJUAN')
        ->join('kemajuan','kemajuan.IDKEMAJUAN','=','detialkemajuan.IDKEMAJUAN')
        ->join('bab','bab.IDBAB','=','kemajuan.IDBAB')
        ->get();
        return view('display.wali.detailkemajuan')->with('santri',$santri)->with('kemajuan',$kemajuan)->with('bab',$bab)->with('detailkemajuan',$detail);
    }
    public function kemajuan(){
            $pengurus = DB::table('pengurus')->get();
            $santri = DB::table('santri')->get();
            $kemajuan =DB::table('kemajuan')
            ->join('santri','santri.IDSANTRI','=','kemajuan.IDSANTRI')
            ->join('pengurus','pengurus.IDPENGURUS','=','kemajuan.IDPENGURUS')
            ->where('santri.IDSANTRI',Auth::user()->IDSANTRI)
            ->get();
            return view('display.wali.kemajuan')->with('kemajuan',$kemajuan)->with('pengurus',$pengurus)->with('santri',$santri);
    }
    public function index(){
        $santri = DB::table('santri')->get();
        return view('display.wali.santri',['santri'=>$santri]);
    }

}
