<?php

namespace App\Http\Controllers;

use App\Models\ModelBuku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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

	public function hapus($id)
	{
		DB::table('buku')->where('IDBUKU',$id)->delete();
		return redirect('/buku');
	}
}
