<?php

namespace App\Http\Controllers;

use App\Models\ModelKemajuan;
use App\Models\ModelSantri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\COntrollers\Controller;

class Kemajuan extends Controller
{
    public function index(){
        $santri = DB::table('santri')->get();
        return view('display.kemajuan',['santri'=>$santri]);
    }
    public function tambah(){
        return view('tambah.kemajuan');
    }

    public function store(Request $request){
        $santri = DB::table('santri')->where('IDSANTRI',$request)->get();
		return view('display.kemajuan',['santri' => $santri],['request' => $request]);

		DB::table('kemajuan')->insert([
			'IDKEMAJUAN' => $request->idkemajuan,
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
