<?php

namespace App\Http\Controllers;

use App\Models\DataKepengurusanModels;
use App\Models\Departemen as ModelsDepartemen;
use Illuminate\Http\Request;

class Departemen extends Controller
{
    public function index()
    {
        $datakepengurusan = DataKepengurusanModels::all();
        $datadepartemen = ModelsDepartemen::all();
        return view('admin.departemen.data-departemen', compact('datakepengurusan','datadepartemen'));
    }

    public function show($id_departemen)
    {
        $data = ModelsDepartemen::all()->find($id_departemen);
        $datakepengurusan = DataKepengurusanModels::all();
        return view('admin.departemen.Edit-data-departemen', compact('data', 'datakepengurusan'));
    }

    public function store(Request $request)
    {
        ModelsDepartemen::create($request->all());
        return redirect()->route('data-departemen')->with('success', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, $id_departemen)
    {
        $data= ModelsDepartemen::find($id_departemen);
        $data->update($request->all());
        return redirect()->route('data-departemen')->with('success', 'Data berhasil diubah');

    }

    public function destroy($id_departemen)
    {
        $data = ModelsDepartemen::find($id_departemen);
        $data->delete();
        return redirect()->route('data-departemen')->with('success', 'Data berhasil dihapus');
    }
}
