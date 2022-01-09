<?php

namespace App\Http\Controllers;

use App\Models\ModelKemajuan;
use App\Models\ModelDetailKemajuan;
use App\Models\ModelSantri;
use App\Models\ModelPengurus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Kemajuan extends Controller
{
    public function index(){
        $santri = DB::table('santri')->get();
        return view('display.kemajuan',['santri'=>$santri]);
    }

    public function detailKemajuan($id){
        return view('display.detailkemajuan',[
            'detailKemajuan'    => ModelDetailKemajuan::where('id_kemajuan',$id)->with('bab.buku')->get(),
            'IDKEMAJUAN'        => ModelKemajuan::find($id)->kemajuan->IDKEMAJUAN,
            'IDSANTRI'          => ModelSantri::find($id)->santri->NAMASANTRI,
            'NAMASANTRI'        => ModelSantri::find($id)->id
        ]);
    }

    public function tambah(){
        return view('tambah.kemajuan');
    }

    public function store(Request $request){
		DB::table('kemajuan')->insert([
			'IDSANTRI' => $request->idsantri,
			'IDPENGURUS' => $request->idpegurus,
            'TANGGAL' => $request->tanggal,
            'STATUS' => $request->status
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
