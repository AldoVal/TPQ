<?php

namespace App\Http\Controllers;

use App\Models\ModelKemajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\COntrollers\Controller;

class Kemajuan extends Controller
{
    public function index(){
        $santri = DB::table('kemajuan')->get();
        return view('display.kemajuan',['kemajuan'=>$santri]);
    }
    public function tambah(){
        return view('display.kemajuan');
    }

    public function store(Request $request)
	{
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

	public function update(Request $request)
	{
		DB::table('peran')
        ->where('IDPERAN',$request->idkemajuan)
        ->update([

		    'STATUS' => $request->status
		]);
		return redirect('/peran');
	}

	public function hapus($id)
	{
		DB::table('kemajuan')->where('IDKEMAJUAN',$id)->delete();
		return redirect('/kemajuan');
	}
}
