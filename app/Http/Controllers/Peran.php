<?php

namespace App\Http\Controllers;

use App\Models\ModelPeran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\COntrollers\Controller;

class Peran extends Controller
{
    public function index(){
        $user = ModelPeran::all();
        return view('staff.peran.peran',['peran'=>$user]);
    }

    public function tambah(){
        return view('tambahperan');
    }

    public function store(Request $request)
	{
		DB::table('peran')->insert([
			'IDPERAN' => $request->idperan,
			'PERAN' => $request->namasantri,
			'AKTIF' => $request->gender,
		]);
		return redirect('/tambahperan');
	}
}
