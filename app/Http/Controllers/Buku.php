<?php

namespace App\Http\Controllers;

use App\Models\ModelBuku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\COntrollers\Controller;

class Buku extends Controller
{
    public function index()
	{
		$buku = ModelBuku::all();
		return view('display.buku',['buku' => $buku]);
	}

	public function tambah()
	{
		return view('tambah.buku');
	}

	public function store(Request $request)
	{
		DB::table('buku')->insert([
			'BUKU' => $request->BUKU,
			'KETERANGAN' => $request->KETERANGAN,
		]);
		return redirect('/buku');
	}

	// public function edit(Request $request)
	// {
	// 	$santri = DB::table('buku')->where('IDBUKU',$request)->get();
	// 	return view('edit.buku',['buku' => $santri],['request' => $request]);
	// }

	// public function update(Request $request)
	// {
	// 	DB::table('santri')
    //     ->where('IDSANTRI',$request->IDSANTRI)
    //     ->update([
    //         'ALAMATORTU' => $request->ALAMATORTU,
    //         'HP' => $request->HP,
    //         'EMAIL' => $request->EMAIL,
    //         'AKTIF' => $request->AKTIF
	// 	]);
	// 	return redirect('/santri');
	// }

	public function hapus($id)
	{
		DB::table('buku')->where('IDBUKU',$id)->delete();
		return redirect('/buku');
	}
}
