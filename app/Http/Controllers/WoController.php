<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WoController extends Controller
{
    public function index()
    {
        $data_wo = wo::all();           
        return view('wo',compact('wo'));
    }
}
