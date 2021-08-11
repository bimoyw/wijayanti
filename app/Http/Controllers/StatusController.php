<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $status = wo::all();           
        return view('status',compact('status'));
    }
}
