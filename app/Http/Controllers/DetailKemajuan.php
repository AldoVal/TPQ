<?php

namespace App\Http\Controllers;

use App\Models\ModelDetailKemajuan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DetailKemajuan extends Controller
{
    public function index(){
        $santri = DB::table('santri')->get();
        $kemajuan = DB::table('kemajuan')->get();
        $bab = DB::table('bab')->get();
        $detail = DB::table('detailkemajuan')
        ->join('santri','santri.IDSANTRI','=','kemajuan.IDKEMAJUAN')
        ->join('kemajuan','kemajuan.IDKEMAJUAN','=','detailkemajuan.IDKEMAJUAN')
        ->join('bab','bab.IDBAB','=','kemajuan.IDBAB')
        ->get();
        return view('display.detailkemajuan')->with('santri',$santri)->with('kemajuan',$kemajuan)->with('bab',$bab)->with('detailkemajuan',$detail);

    }

    public function detail($id){
        $santri = DB::table('santri')->get();
        $kemajuan = DB::table('kemajuan')->get();
        $bab = DB::table('bab')->get();
        $detail = DB::table('detailkemajuan')
        ->join('kemajuan','kemajuan.IDKEMAJUAN','=','detailkemajuan.IDKEMAJUAN')
        ->join('santri','santri.IDSANTRI','=','kemajuan.IDSANTRI')
        ->join('bab','bab.IDBAB','=','detailkemajuan.IDBAB')
        ->where('kemajuan.IDKEMAJUAN',$id)
        ->get();
        return view('display.detailkemajuan')->with('santri',$santri)->with('kemajuan',$kemajuan)->with('bab',$bab)->with('detailkemajuan',$detail);
    }

    public function tambah(){
        return view('tambah.detailkemajuan');
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

}
