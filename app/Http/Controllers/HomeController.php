<?php

namespace App\Http\Controllers;

/**
 * 
 */
class HomeController extends Controller{
	
	function showAdmin(){
		return view('admin.admin');
	}
	function showLayout(){
		return view('admin.layout');
	}
	function showCheckout(){
		return view('checkout');
	}
	function showContact(){
		return view('contact');
	}
	function showExperiance(){
		return view('experiance');
	}
	function showShop(){
		return view('shop');
	}
	function showCheckout2(){
		return view('checkout2');
	}
	function showContact2(){
		return view('contact2');
	}
	function showExperiance2(){
		return view('experiance2');
	}
	function showShop2(){
		return view('shop2');
	}
}