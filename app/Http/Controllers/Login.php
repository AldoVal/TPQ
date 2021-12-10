<?php

namespace App\Http\Controllers;


use App\Models\ModelSantri;
use App\Models\ModelPengurus;
use App\Models\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Login extends Controller
{
    public function index()
    {
        $xxx= Session::truncate();
        return view('login', [
            "title" => "Login"
        ]);
    }

    public function authenticate(Request $Request)
    {
        $login = $Request['id'];
        $pw    = $Request['password'];
        $null = "[]";



        $a = ModelSantri::all()->where('IDSANTRI','=',$login);
        $usernamea = $a->where('IDSANTRI','=',$login);
        $passworda = $a->where('PASSWORD','=',$pw);

        $b = ModelPengurus::all()->where('IDPENGURUS','=',$login);
        $usernameb = $b->where('IDPENGURUS','=',$login);
        $passwordb = $b->where('PASSWORD','=',$pw);

        // echo $a;
        // echo $usernamea;
        // echo $passworda;
        // if ($usernamea==$passworda) {
        //     echo "sama";
        // }


        if($a!=$null)
        {
            if($usernamea==$passworda){
                $asd 		= $Request->input();
                $session 	= new session;
                $session->name  = $asd['id'];
                $session->role  = "1";//role
                $session->save();

                return redirect('/author');
            }else{
                return redirect('/');}
            }
        else if($b=!$null)
        {
            if($usernameb==$passwordb){
                $asd 		= $Request->input();
                $session 	= new session;
                $session->name  = $asd['id'];
                $session->role  = "2";//role
                $session->save();

                return redirect('/wali');
            }else{
                return redirect('/');}
            }

        }
}
