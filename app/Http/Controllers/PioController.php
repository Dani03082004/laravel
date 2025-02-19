<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pio;

class PioController extends Controller{
    function index(){
        $pios=Pio::all();
        dd($pios);
        return view('pios.index',['pios'=>$pios]);
    }
    function show(Pio $pio){
        return view('pios.show',['pio'=>$pio]);
    }
}
