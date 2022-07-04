<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public  function login(){
        return view('login.form');
    }

    public function proses1(Request $request){
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'],
        [
            'email.required' => 'Alamat email tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',

        ]);
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/');
        }

        return \redirect('login');
    }

    public function register(){
        return view('register.form');
    }

    public function proses2(Request $request){
        //dd($request->all());
        //return view('registerPengguna');
        $this->validate($request,[
            'name' => 'required|unique:Penggunas',
            'email' => 'required|unique:Penggunas',
            'password' => 'required|min:5|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%-_]).*$/'],
        [
            'name.required' => 'Nama tidak boleh kosong',
            'name.unique' => 'Nama sudah digunakan',
            'email.required' => 'Alamat email tidak boleh kosong',
            'email.unique' => 'Alamat email sudah digunakan',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal 5 karakter',
            'password.regex' => 'Password harus mengandung huruf besar, kecil, angka, dan simbol',
        ]);
        Pengguna::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        return redirect('/login');
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
