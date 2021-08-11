<?php

namespace App\Http\Controllers;
use App\Models\kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $data_kategori = kategori::all();           
        return view('kategori',compact('data_kategori'));
    }
    public function tambahkategori()
    {
        return view('kategori.tambahkategori');
    }
    public function insert_kategori(Request $request)
    {
        $this -> validate($request,[
            'kategori' =>'required',
        ]);

        kategori::create([
            'kategori' => $request->kategori,                  
        ]);
        return redirect('kategori');
    }
    public function delete_kategori($id)
    {
        $delete_kategori = kategori::find($id);
        $delete_kategori->delete();
        return redirect('kategori')->with('success','Data Berhasil Di Update');
    }
}
