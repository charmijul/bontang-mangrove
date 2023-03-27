<?php

namespace App\Http\Controllers;

use App\Models\Mangrove;
use Illuminate\Http\Request;

class MangroveController extends Controller
{
    public function index(){
        return view('mangrove', [
            "title" => "Data Mangrove",
            "mangroves" => Mangrove::all()
        ]);
    }
}
