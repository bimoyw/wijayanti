<?php

namespace App\Http\Controllers;
use App\Models\pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $data_pelanggan = pelanggan::all();           
        return view('pelanggan',compact('data_pelanggan'));
    }
    public function tambahpelanggan()
    {
        return view('pelanggan.tambahpelanggan');
    }
    public function insert_pelanggan(Request $request)
    {
        $this -> validate($request,[
            'nama_pel' => 'required',
            'telp' => 'required',
            'RT' => 'required',
            'RW' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'keterangan' => 'required',
        ]);

        pelanggan::create([
            'nama_pel' => $request->nama_pel,
            'telp' => $request->telp,
            'RT' => $request->RT,
            'RW' => $request->RW,
            'kelurahan' => $request->kelurahan,
            'kecamatan' => $request->kecamatan,
            'kota' => $request->kota,
            'keterangan' => $request->keterangan,                   
        ]);
        return redirect('pelanggan');
    }
    public function viewpelanggan($id)
    {
        $viewpelanggan = pelanggan::find($id);
        return view('pelanggan.viewpelanggan',compact('viewpelanggan'));
    }

    public function updatepelanggan(Request $request,$id)
    {
        $updatepelanggan = pelanggan::find($id);
        $this -> validate($request,[
            'nama_pel' => 'required',
            'telp' => 'required',
            'RT' => 'required',
            'RW' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'keterangan' => 'required',
        ]);
        $updatepelanggan->update([
            'nama_pel' => $request->nama_pel,
            'telp' => $request->telp,
            'RT' => $request->RT,
            'RW' => $request->RW,
            'kelurahan' => $request->kelurahan,
            'kecamatan' => $request->kecamatan,
            'kota' => $request->kota,
            'keterangan' => $request->keterangan,                 
        ]);
        return redirect('pelanggan')->with('success','Data Berhasil Di Update');
    }
    public function deletepelanggan($id)
    {
        $deletepelanggan = pelanggan::find($id);
        $deletepelanggan->delete();
        return redirect('pelanggan')->with('success','Data Berhasil Di Update');
    }
}
