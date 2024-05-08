<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;


class ProductController extends Controller
{
    // input produk
    public function createProduct(Request $request){
        $list = [
            
                'gambar' => $request->input('gambar'),
                'nama' => $request->input('nama'),
                'kondisi' => $request->input('kondisi'),
                'stok' => $request->input('stok'),
                'berat' => $request->input('berat'),
                'harga' => $request->input('harga'),
                'deskripsi' => $request->input('deskripsi'),
        ];

        if(!$request->filled('gambar')){
            return redirect()->back()->with('error', 'Error. File Nama Produk Wajib Diisi');
        }elseif(!$request->filled('nama')){
            return redirect()->back()->with('error', 'Error. File Nama Produk Wajib Diisi');
        }elseif(!$request->filled('berat')){
            return redirect()->back()->with('error', 'Error. File Berat Wajib Diisi');
        }
        elseif(!$request->filled('harga')){
            return redirect()->back()->with('error', 'Error. File Harga Wajib Diisi');
        }
        elseif(!$request->filled('stok')){
            return redirect()->back()->with('error', 'Error. File Stok Wajib Diisi');
        }
        elseif(!$request->filled('kondisi') || !in_array($request->kondisi, ['Baru', 'Bekas'])){
            return redirect()->back()->with('error', 'Error. File Kondisi Wajib Diisi');
        }
        elseif(!$request->filled('deskripsi')){
            return redirect()->back()->with('error', 'Error. File Deskripsi Wajib Diisi');
        }
        
        Product::create($list);
        return redirect()->route('list_product');
        
    }

    public function tambahProducts(){
        return view('form');
    }

    // tampilan semua list produk 
    public function productAll(){
        $list = Product::all();
        return view('products', ['list'=>$list]);
    }

    // halaman list produk per user
    public function productsList($akun_id){
        $list = Product::where('akun_id', $akun_id)->get();
        return view('list_product', ['list'=>$list, 'akun_id' =>$akun_id]);
    }


    // update produk
    public function productUpdate($idProduct){
        $list = Product::find($idProduct);

        return view('product_update', ['list' => $list]);
    }

    public function update(Request $request, Product $id){
        $id->gambar = $request->gambar;
        $id->nama = $request->nama;
        $id->harga = $request->harga;
        $id->stok = $request->stok;
        $id->berat = $request->berat;
        $id->kondisi = $request->kondisi;
        $id->deskripsi = $request->deskripsi;

        $id->save();
        
        return redirect()->route('list_product', $id->akun_id);
    }

    // delete produk
    public function delete(Request $request, $id) {
        $post = Product::find($id);
        $post->delete();
        return redirect()->back();
    }

    // Detail Akun
    public function profile($akun_id){
        $akun = Akun::find($akun_id);
        $toko = $akun->toko;
        return view('profile',[
            'akun'=>$akun,
            'toko'=>$toko,
        ]);
    
    }
}

