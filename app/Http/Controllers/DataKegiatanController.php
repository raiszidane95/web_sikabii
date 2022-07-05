<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RekamKegiatan;
use App\Models\DataKegiatanModels;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class DataKegiatanController extends Controller
{
    public function Userindex()
    {
        $data = DataKegiatanModels::all()->sortDesc();
        return view('kegiatan', compact('data'));
    }

    public function kegiatan()
    {
        $data = DataKegiatanModels::paginate(3)->sortDesc();
        return view('home', compact('data'));
    }


    public function Usershow($id_kegiatan)
    {
        $data = DataKegiatanModels::all()->find($id_kegiatan);
        return view('detail-kegiatan', compact('data'));
    }

    public function index()
    {
        $data = DataKegiatanModels::all();
        return view('admin.kegiatan.data-kegiatan', compact('data'));
    }

    public function store(Request $request)
    {
        $data = DataKegiatanModels::create($request->all());
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('gambarkegiatanbaru/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('data-kegiatan')->with('success', 'Data berhasil ditambahkan');
    }

    public function show($id_kegiatan)
    {
        $data = DataKegiatanModels::all()->find($id_kegiatan);
        $datarekam = RekamKegiatan::all();
        $show = $datarekam->where('id_kegiatan', '==', $id_kegiatan);
        $get = $show->all();
        return view('admin.kegiatan.detail-data-kegiatan', compact('data', 'get'));
    }

    public function Editshow(Request $request, $id_kegiatan)
    {
        $data = DataKegiatanModels::find($id_kegiatan);
        return view('admin.kegiatan.Edit-data-kegiatan', compact('data'));
    }

    public function update(Request $request, $id_kegiatan)
    {
        $data = DataKegiatanModels::find($id_kegiatan);
        $data->update($request->all());
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('gambarkegiatanbaru/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('data-kegiatan')->with('success', 'Data berhasil diubah');
    }

    public function destroy($id_kegiatan)
    {
        $data = DataKegiatanModels::find($id_kegiatan);
        $data->delete();
        return redirect()->route('data-kegiatan')->with('success', 'Data berhasil dihapus');
    }

    public function Excel($id_kegiatan)
    {
        $data = DataKegiatanModels::all()->find($id_kegiatan);
        $datarekam = RekamKegiatan::all();
        $show = $datarekam->where('id_kegiatan', '==', $id_kegiatan);
        $get = $show->all();
        return view('admin.kegiatan.detaildata-riwayat-kegiatan', compact('data', 'get'));
    }
}
