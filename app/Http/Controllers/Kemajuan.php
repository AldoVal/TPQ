<?php

namespace App\Http\Controllers;

use App\Models\ModelKemajuan;
use App\Models\ModelDetailKemajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\COntrollers\Controller;

class Kemajuan extends Controller
{
    public function index(){
        $santri = DB::table('kemajuan')->get();
        return view('guru.kemajuan',['kemajuan'=>$santri]);
    }
    public function tambah(){
        return view('guru.kemajuan');
    }

    public function store(Request $request)
	{
		DB::table('kemajuan')->insert([
			'IDPERAN' => $request->idperan,
			'PERAN' => $request->peran,
			'AKTIF' => $request->status
		]);
		return redirect('/peran');
	}

	public function edit(Request $request)
	{
		$peran = DB::table('kemajuan')->where('IDKEMAJUAN',$request)->get();
		return view('guru.editkemajuan',['kemajuan' => $kemajuan],['request' => $request]);
	}

	public function update(Request $request)
	{
		DB::table('peran')
        ->where('IDPERAN',$request->idperan)
        ->update([
			// 'IDPERAN' => $request->idperan,
			'PERAN' => $request->peran,
			'AKTIF' => $request->status
		]);
		return redirect('/peran');
	}

	public function hapus($id)
	{
		DB::table('peran')->where('IDPERAN',$id)->delete();
		return redirect('/peran');
	}
}
