<?php

namespace App\Http\Controllers;

use App\Models\ModelKemajuan;
use App\Models\ModelDetailKemajuan;
use App\Models\ModelSantri;
use App\Models\ModelPengurus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class Kemajuan extends Controller
{


    public function index(){
        $pengurus = DB::table('pengurus')->get();
        $santri = DB::table('santri')->get();
        $kemajuan =DB::table('kemajuan')
        ->join('santri','santri.IDSANTRI','=','kemajuan.IDSANTRI')
        ->join('pengurus','pengurus.IDPENGURUS','=','kemajuan.IDPENGURUS')
        ->get();
        return view('display.kemajuan')->with('kemajuan',$kemajuan)->with('pengurus',$pengurus)->with('santri',$santri);
    }

    public function detailKemajuan($id){
     
    }

    public function tambah(){
        $pengurus = DB::table('pengurus')->get();
        $santri = DB::table('santri')->get();
        $kemajuan =DB::table('kemajuan')
        ->join('santri','santri.IDSANTRI','=','kemajuan.IDSANTRI')
        ->join('pengurus','pengurus.IDPENGURUS','=','kemajuan.IDPENGURUS')
        ->get();
        return view('tambah.kemajuan')->with('kemajuan',$kemajuan)->with('pengurus',$pengurus)->with('santri',$santri);
    }

    public function store(Request $request){
		DB::table('kemajuan')->insert([
			'IDSANTRI' => $request->IDSANTRI,
			'IDPENGURUS' => $request->IDPENGURUS,
            'TANGGAL' => $request->TANGGAL,
            'STATUS' => $request->STATUS
		]);
		return redirect('/kemajuan');
	}

	public function edit(Request $request)
	{
		$kemajuan = DB::table('kemajuan')->where('IDKEMAJUAN',$request)->get();
		return view('edit.kemajuan',['kemajuan' => $kemajuan],['request' => $request]);
	}

	public function hapus($id)
	{
		DB::table('kemajuan')->where('IDKEMAJUAN',$id)->delete();
		return redirect('/kemajuan');
	}
}
