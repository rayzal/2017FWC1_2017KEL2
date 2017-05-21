<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\pengguna;

use Illuminate\Auth\SessionGuard;
// use Illuminate\Contracts\Auth\Authenticatable;
use Auth;

use validator;

class SesiController extends Controller
{
    public function index(){
        return view('index');
    }
    public function form(){
        if(Auth::check()){
            return redirect('/');
        }
        return view('/');
    }
    public function validasi(Request $input){

          // validasi
          $this->validate($input,[
            'username'=>'required',
            'password'=>'required',
            ]);

     if($pengguna = Pengguna::where($input->only('username','password'))->where('level','=','1')->first()){
        if(!is_null($pengguna)){
            Auth::login($pengguna);
            if(Auth::check())
                return redirect('/admin')->with('informasi',"Selamat Datang ".Auth::user()->username);
        }
    }
    
  if($pengguna = Pengguna::where($input->only('username','password'))->where('level','=','2')->first()){

           if(!is_null($pengguna)){
            Auth::login($pengguna);
            if(Auth::check())
                return redirect('/lamantamu')->with('informasi',"Selamat Datang ".Auth::user()->username);
        }
    }
        return redirect('/')->withErrors(['Pengguna Tidak Di Temukan/Password Salah']);
        
    }

    public function logout(){
        if(Auth::check()){
            Auth::logout();
            return redirect('/')->withErrors(['Silahkan Login Untuk Masuk Ke sistem']);
          }else{
             return redirect('/')->withErrors(['Silahkan Login terlebih dahulu']);
          }
        }  
}