<?php 
namespace App\Http\Controllers;
use App\Models\Shop;
class ShopController extends Controller{
	function index(){
		$data['list_shop2'] = Shop::all();

		return view('shop2.index', $data);
	}
	function create(){
		return view('shop2.create');
	}
	function store(){
		$shop2 = new Shop;
		$shop2->nama = request ('nama');
		$shop2->harga = request ('harga');
		$shop2->berat = request ('berat');
		$shop2->deskripsi = request ('deskripsi');
		$shop2->stok = request ('stok');
		$shop2->save();
			
			return redirect('shop2')->with('success','Data Berhasil Ditambahkan');
		
	}
	function show(Shop $shop2){
		$data['shop2'] = $shop2;
		return view('shop2.show', $data);
	}
	function edit(Shop $shop2){
		$data['shop2'] = $shop2;
		return view('shop2.edit', $data);
	}
	function update(Shop $shop2){
	
		$shop2->nama = request ('nama');
		$shop2->stok = request ('stok');
		$shop2->harga = request ('harga');
		$shop2->berat = request ('berat');
		$shop2->deskripsi = request ('deskripsi');
		$shop2->save();
			
		return redirect('shop2')->with('success','Data Berhasil Diedit');
	}
	function destroy(Shop $shop2){
		$shop2->delete();

		return redirect('shop2')->with('danger','Data Berhasil Dihapus');

	}
}