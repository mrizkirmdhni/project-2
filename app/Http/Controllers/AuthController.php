<?php

namespace App\Http\Controllers;
use Auth;

/**
 * 
 */
class AuthController extends Controller{
	
	
	function showLogin2(){
		return view('login2');
	}
	function showLogin(){
		return view('login');
	}
	function loginProcess(){
		if(Auth::attempt(['username' => request('username'), 'password' => request('password')])) {
			return redirect('admin')->with('success', 'Login Berhasil');
		}else{
			return back()->with('danger', 'Login Gagal, Silahkan cek email dan password anda');
		}
	}

	function logout(){
		Auth::logout();
		return redirect('login');
	}

	function registration(){

	}

	function forgotPassword(){

	}
}