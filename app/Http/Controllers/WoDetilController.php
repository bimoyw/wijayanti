<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class WoDetilController extends Controller
{
    public function index()
    {
        $datawo_detil = wo_detil::all();           
        return view('tambahorder',compact('datawo_detil'));
    }
}
