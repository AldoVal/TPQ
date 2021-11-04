<?php

namespace App\Http\Controllers;

use App\Models\ModelDetailKemajuan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DetailKemajuan extends Controller
{
    public function index(){
        $santri = DB::table('detailkemajuan')->get();
        return view('display.detailkemajuan',['detailkemajuan'=>$santri]);
    }
    public function tambah(){
        return view('guru.kemajuan');
    }

    public function store(Request $request)
	{
		DB::table('kemajuan')->insert([
			'IDDETAILKEMAJUAN' => $request->idkemajuan,
			'IDKEMAJUAN' => $request->idsantri,
			'IDBAB' => $request->idpegurus,
            'KETERANGAN' => $request->tanggal,
		]);
		return redirect('/kemajuan');
	}

	public function edit(Request $request)
	{
		$kemajuan = DB::table('kemajuan')->where('IDKEMAJUAN',$request)->get();
		return view('edit.kemajuan',['kemajuan' => $kemajuan],['request' => $request]);
	}

	public function update(Request $request)
	{
		DB::table('peran')
        ->where('IDDETAILKEMAJUAN',$request->idkemajuan)
        ->update([

		    'STATUS' => $request->status
		]);
		return redirect('/detailkemajuan');
	}

	// public function hapus($id)
	// {
	// 	DB::table('kemajuan')->where('IDKEMAJUAN',$id)->delete();
	// 	return redirect('/kemajuan');
	// }
}
