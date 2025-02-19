<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pio;

class HomeController extends Controller{
    function index(){
        $pios=Pio::all();
        return view('home',['pios'=>$pios]);    
    }
}
