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
        return view('admin.data-departemen', compact('datakepengurusan','datadepartemen'));
    }

    public function show($id_departemen)
    {
        $data = ModelsDepartemen::all()->find($id_departemen);
        return view('admin.data-departemen', compact('data'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        ModelsDepartemen::create($request->all());
        return redirect()->route('data-departemen')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
