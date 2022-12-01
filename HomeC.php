<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataprestasiM;
use App\Models\eskulM;
use App\Models\pesertadidikM;
use App\Models\about;


class HomeC extends Controller
{
    public function index(){
        return view('pages.home');
    }
    
    public function pesertadidik(){
        $data = pesertadidikM::all();
        return view('pages.pesertadidik', ['data' => $data]);
    }
    public function eskul (){
        $data = eskulM::all();
        return view('pages.eskul', ['data' => $data]);
    }
    public function dataprestasi (){
        $data = dataprestasiM::all();
        return view('pages.dataprestasi', ['data' => $data]);
    }
    public function about(){
        return view('pages.about');
    }
    
}
