<?php

namespace App\Http\Controllers;

use App\Models\ModelPeran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\COntrollers\Controller;
use Illuminate\Support\Facades\Redis;

class Peran extends Controller
{
    public function index(){
        $peran = ModelPeran::all();
        return view('display.peran',['peran'=>$peran]);
    }

    public function tambah(){
        return view('tambah.peran');
    }

    public function store(Request $request)
	{
		DB::table('peran')->insert([
			'IDPERAN' => $request->IDPERAN,
			'PERAN' => $request->PERAN,
			'AKTIF' => $request->AKTIF
		]);
		return redirect('/peran');
	}

	public function edit(Request $request)
	{
		$peran = DB::table('peran')->where('IDPERAN',$request)->get();
		return view('edit.peran',['peran' => $peran],['request' => $request]);
	}

	public function update(Request $request)
	{
        // $peran = ModelPeran::all()->find($idperan);
               //     $peran = ModelPeran::where($id);
        // $peran->peran       = $request->input('PERAN');
        // $peran->status      = $request->input('AKTIF');
        // $peran->save();

		DB::table('peran')
        ->where('IDPERAN',$request->idperan)
        ->update([
			'IDPERAN' => $request->IDPERAN,
			'PERAN' => $request->PERAN,
			'AKTIF' => $request->AKTIF
		]);
		return redirect('/peran');
	}

	public function hapus($id)
	{
		DB::table('peran')->where('IDPERAN',$id)->delete();
		return redirect('/peran');
	}
}
