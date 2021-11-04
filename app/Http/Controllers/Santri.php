<?php

namespace App\Http\Controllers;

use App\Models\ModelSantri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\COntrollers\Controller;

class Santri extends Controller
{
    public function index()
	{
		$santri = ModelSantri::all();
		return view('display.santri',['santri' => $santri]);
	}

	public function tambah()
	{
		return view('tambah.santri');
	}

	public function store(Request $request)
	{
		DB::table('santri')->insert([
			'IDSANTRI' => $request->IDSANTRI,
			'NAMASANTRI' => $request->NAMASANTRI,
			'GENDER' => $request->GENDER,
			'TGLLAHIR' => $request->TGLLAHIR,
            'KOTALHR' => $request->KOTALHR,
            'NAMAORTU' => $request->NAMAORTU,
            'ALAMATORTU' => $request->ALAMATORTU,
            'HP' => $request->HP,
            'EMAIL' => $request->EMAIL,
            'PASSWORD' => $request->PASSWORD,
            'TANGGALMASUK' => $request->TANGGALMASUK,
            'AKTIF' => $request->AKTIF
		]);
		return redirect('/santri');
	}

	public function edit(Request $request)
	{
		$santri = DB::table('santri')->where('IDSANTRI',$request)->get();
		return view('edit.santri',['santri' => $santri],['request' => $request]);
	}

	public function update(Request $request)
	{
		DB::table('santri')->where('IDSANTRI',$request->id)->update([
			'IDSANTRI' => $request->IDSANTRI,
			'NAMASANTRI' => $request->NAMASANTRI,
			// 'GENDER' => $request->GENDER,
			// 'TGLLAHIR' => $request->TGLLAHIR,
            // 'KOTALAHIR' => $request->KOTALAHIR,
            // 'NAMAORTU' => $request->NAMAORTU,
            // 'ALAMATORTU' => $request->ALAMATORTU,
            'HP' => $request->HP,
            'EMAIL' => $request->EMAIL,
            // 'PASSWORD' => $request->PASSWORD,
            // 'TANGGALMASUK' => $request->TANGGALMASUK,
            'AKTIF' => $request->AKTIF
		]);
		return redirect('/santri');
	}

	public function hapus($id)
	{
		DB::table('santri')->where('IDSANTRI',$id)->delete();
		return redirect('/santri');
	}
}
