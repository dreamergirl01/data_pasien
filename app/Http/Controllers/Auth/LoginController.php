<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
     //tampilan login
     public function index(){
        return view('login.index');
    }

    //tampilan register
    public function register(){
        return view('login.register');
    }

    //save register
    public function save(RegisterRequest $r){
        if($r->validated()){
            User::create([
                'name' => $r->name,
                'email'=> $r->email,
                'password' => Hash::make($r->password)
            ]);
            return redirect('/')->with('pesan','Register Berhasil Dilakukan');
        }
    }

    //proses login
    public function store(LoginRequest $r){
        if($r->validated()){
            if(Auth::guard('web')->attempt(['email' => $r->email, 'password' => $r->password])){
                return redirect('/home')->with('pesan','Berhasil Login');
            }else{
                return back()->with('pesan','gagal login');
            }
        };
    }

    //proses logout
    public function logout(){
        Auth::logout();

        return redirect('/');
    }
}
