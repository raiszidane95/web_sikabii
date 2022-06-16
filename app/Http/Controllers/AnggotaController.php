<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Departemen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Anggota as ModelsAnggota;
use Illuminate\Support\Facades\File;

class AnggotaController extends Controller
{
    public function index()
    {
        $data = ModelsAnggota::all();
        return view('profile', compact('data'));
    }
    public function showEdit($id_anggota)
    {
        $data = ModelsAnggota::all()->find($id_anggota);
        $departemen = Departemen::all();
        return view('edit-profile', compact('data', 'departemen'));
    }
    public function update(Request $request, $id_anggota)
    {
        $data = ModelsAnggota::find($id_anggota);
        if(File::exists(public_path('fotoprofile/'.$request->oldfoto))){
            File::delete(public_path('fotoprofile/'.$request->oldfoto));
        }
        $data->update($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotoprofile/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('profile')->with('success', 'Data berhasil diubah');
    }
}
