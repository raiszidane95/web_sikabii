<?php

namespace App\Http\Controllers;

use App\Models\DataKepengurusan;
use Illuminate\Http\Request;
use App\Models\DataKepengurusanModels;
use Illuminate\Support\Facades\Redirect;

use function GuzzleHttp\Promise\all;

class DataKepengurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $data = DataKepengurusanModels::all();
        return view('admin.data-kepengurusan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DataKepengurusanModels::create($request->all());
        return redirect()->route('data-kepengurusan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_kepengurusan)
    {
        $data = DataKepengurusanModels::all()->find($id_kepengurusan);
        return view('admin.detail-data-kepengurusan', compact('data'));
    }

    public function Editshow(Request $request, $id_kepengurusan)
    {
        $data = DataKepengurusanModels::find($id_kepengurusan);
        return view('admin.Edit-data-kepengurusan', compact('data'));

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    public function update(Request $request, $id_kepengurusan)
    {
        $data = DataKepengurusanModels::find($id_kepengurusan);
        $data->update($request->all());
        return redirect()->route('data-kepengurusan')->with('success', 'Data berhasil diubah');
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
