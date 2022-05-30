<?php

namespace App\Http\Controllers;

use App\Models\DataKepengurusan;
use Illuminate\Http\Request;
use App\Models\DataKepengurusanModels;
use Illuminate\Support\Facades\Redirect;

use function GuzzleHttp\Promise\all;

class DataKepengurusanController extends Controller
{

    public function index()
    {
        $data = DataKepengurusanModels::all();
        return view('admin.kepengurusan.data-kepengurusan', compact('data'));
    }


    public function store(Request $request)
    {
        DataKepengurusanModels::create($request->all());
        return redirect()->route('data-kepengurusan')->with('success', 'Data berhasil ditambahkan');
    }

    public function show($id_kepengurusan)
    {
        $data = DataKepengurusanModels::all()->find($id_kepengurusan);
        return view('admin.kepengurusan.detail-data-kepengurusan', compact('data'));
    }

    public function Editshow(Request $request, $id_kepengurusan)
    {
        $data = DataKepengurusanModels::find($id_kepengurusan);
        return view('admin.kepengurusan.Edit-data-kepengurusan', compact('data'));
    }

    public function update(Request $request, $id_kepengurusan)
    {
        $data = DataKepengurusanModels::find($id_kepengurusan);
        $data->update($request->all());
        return redirect()->route('data-kepengurusan')->with('success', 'Data berhasil diubah');
    }

    public function destroy($id_kepengurusan)
    {
        $data = DataKepengurusanModels::find($id_kepengurusan);
        $data->delete();
        return redirect()->route('data-kepengurusan')->with('success', 'Data berhasil dihapus');
    }
}
