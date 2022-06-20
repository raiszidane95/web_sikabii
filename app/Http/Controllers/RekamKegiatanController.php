<?php

namespace App\Http\Controllers;

use App\Models\RekamKegiatan;
use Illuminate\Http\Request;

class RekamKegiatanController extends Controller
{
    public function index(){
        $data = RekamKegiatan::all();
        return view('/profile', compact('data'));
    }
    public function store(Request $request){
        RekamKegiatan::create($request->all());
        return redirect('/profile');
    }
}
