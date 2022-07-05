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

    public function RekamKegiatan(){
        $data = RekamKegiatan::all()->sortByDesc('id_kegiatan');
        return view('admin.kegiatan.riwayat-kegiatan', compact('data'));
    }

    public function Show(Request $request, $id_rekamkegiatan){

        $datakegiatan = RekamKegiatan::find($id_rekamkegiatan);
        $data = $datakegiatan->where('id_rekamkegiatan', '!=', 'null');
        return view('admin.kegiatan.detail-riwayat-kegiatan', compact('data'));


    }
}
