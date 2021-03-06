<?php

namespace App\Http\Controllers;

use App\Models\ModelBab;
use App\Models\ModelBuku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class Bab extends Controller
{
    public function index()
	{
		$buku = ModelBab::all();
		return view('display.buku',['buku' => $buku]);
	}

	public function tambah()
	{
        $buku = DB::table('buku')->get();
        $bab = DB::table('bab')
            ->join('buku','buku.IDBUKU','=','bab.IDBUKU')
            ->get();
		return view('tambah.bab')->with('buku',$buku)->with('bab',$bab);
	}

	public function store(Request $request)
	{
		DB::table('buku')->insert([
			'BAB' => $request->BAB,
			'JUDUL' => $request->JUDUL,
            'KETERANGAN' => $request->KETERANGAN
		]);

		return redirect('/buku');
	}

	public function hapus($id)
	{
		DB::table('bab')->where('IDBAB',$id)->delete();
		return redirect('/buku');
	}
}
