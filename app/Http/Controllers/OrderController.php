<?php

namespace App\Http\Controllers;

use App\Exports\OrderExport;
use App\Models\pelanggan;
use App\Models\User;
use App\Models\wo;
use App\Models\wo_detil;
use App\Models\status;
use Carbon\Carbon;
use App\Models\kategori;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class OrderController extends Controller
{
    public function tambahorder()
    {
        $t_masuk = Carbon::now()->format('d-m-Y');
        $datawo_detil = wo_detil::all();        
        $data_pelanggan = pelanggan::all();
        $data_marketing = user::where('level','=','marketing')->get();   
        $now = Carbon::now();
        $thnBulan = $now->year . $now->month;
        $cekwo = wo::count();
        $details = wo_detil::all();
        if ($cekwo==0) {
            $urut = '-00001';
            $no_wo = 'WJ-' . $thnBulan . $urut;
        }
        else {
            $ambil = wo::all()->last();
            $urut = (int)substr($ambil->no_wo,-5)+1;
            $no_wo = 'WJ' . $thnBulan . $urut;
        }
        return view('order.tambahorder',compact('data_pelanggan','details','data_marketing','no_wo','t_masuk','datawo_detil'));
    }


    
    public function index(){
    return view('order');
    }
    public function tambahitem(){
        // wo::create([
        //     'id_kategori' => $request->kategori,
        //     'id_wo' => $request->id_wo,
        //     'id_user' => $request->mk,
        //     'tanggal_masuk' => $request->nama_order,
        //     'no_wo' => $request->no_wo,
        //     'deadline' => $request->deadline,
        //     'tanggal_ambil'=> $request->tanggal_ambil,
        //     'id_pel' => $request->id_pel,                     
        // ]);
        $data_kategori = kategori::all();
        $status = status::all();
        $wos = wo::all();
        $data_marketing = user::where('level','=','marketing')->get();
        $data_produksi = user::where('level','=','produksi')->get();
        return view('order.tambahitem',compact('data_kategori','status','data_produksi','data_marketing', 'wos'));
        }

    public function store(Request $request)
    {
        $wos = wo::create([
            'id_kategori' => $request->kategori,
            'id_user' => $request->mk,
            'tanggal_masuk' => $request->tanggal_masuk,
            'no_wo' => $request->no_wo,
            'deadline' => $request->deadline,
            'tanggal_ambil'=> $request->tanggal_ambil,
            'id_pel' => 4,                     
        ]);
        $wos->details()->attach($request->details);

        return 'berhasil';
    }

    public function insert_wo(Request $request)
    {
        // $this -> validate($request,[
        //     'kategori' => 'required',
        //     'nama_order' =>'required',
        //     'jumlah' =>'required',
        //     'h_satuan' => 'required',
        //     'totalbayar' => 'required',
        //     'ukuran' => 'required',
        //     'warna' => 'required',
        //     'jenis_bahan' => 'required',
        //     'keterangan' => 'required',
        // ]);
        
        wo_detil::create([
            'id_kategori' => $request->kategori,
            'id_wo' => $request->id_wo,
            'id_user' => $request->op,
            'id_status' => $request->status,
            'nama_order' => $request->nama_order,
            'jumlah' => $request->jumlah,
            'h_satuan' => $request->h_satuan,
            'totalbayar' => $request->totalbayar,
            'ukuran' => $request->ukuran,
            'warna' => $request->warna,  
            'jenis_bahan' => $request->jenis_bahan,  
            'keterangan' => $request->keterangan,                       
        ]);

        
        return redirect('tambahorder');
    }

    public function excel()
    {
        return Excel::download(new OrderExport, 'order.xlsx');
    }

}
