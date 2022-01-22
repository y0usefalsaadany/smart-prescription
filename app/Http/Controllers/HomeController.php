<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;

class HomeController extends Controller
{
    public function home(){
        $medicines = Medicine::all();
        $i = 1;
        return view('home',compact('medicines','i'));
    }
}
