<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentsM;

class HomeC extends Controller
{
    public function index(){
        $user = ['name' => 'Dazai', 'role' => 'teller'];
    return view('pages.home', $user);
    }

    public function about(){
        $user = ['name' => 'chuya', 'role' => 'admin'];
        return view('pages.about', $user);
    }

    public function contact(){
        $data = StudentsM::all();
        return view('pages.contact', ['data' => $data]);
    }
}
