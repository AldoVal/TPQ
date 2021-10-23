<?php

namespace App\Http\Controllers;

use App\Models\ModelPeran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\COntrollers\Controller;

class Peran extends Controller
{
    public function index(){
        $peran = ModelPeran::all();
        return view('staff.peran.peran',['peran'=>$peran]);
    }

    public function tambah(){
        return view('staff.peran.tambahperan');
    }

    public function store(Request $request)
	{
		DB::table('peran')->insert([
			'IDPERAN' => $request->idperan,
			'PERAN' => $request->namasantri,
			'AKTIF' => $request->gender
		]);
		return redirect('/tambahperan');
	}

	public function edit($id)
	{
		$peran = DB::table('peran')->where('IDPERAN',$id)->get();
		return view('staff.peran.editperan',['peran' => $peran]);
	}

	public function update(Request $request)
	{
		DB::table('peran')->where('IDPERAN',$request->id)->update([
			'IDPERAN' => $request->idperan,
			'PERAN' => $request->namasantri,
			'AKTIF' => $request->gender
		]);
		return redirect('/peran');
	}

	public function hapus($id)
	{
		DB::table('peran')->where('IDPERAN',$id)->delete();
		return redirect('/peran');
	}
}
