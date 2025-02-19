<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pio;

class HomeController extends Controller{
    function index(){
        $pios=Pio::all();
        return view('home',['pios'=>$pios]);    
    }
    function contact(){
        return view('pages.contact');
    }
    function about(){
        return view('pages.about');
    }
}
