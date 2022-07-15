<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Departemen;
use Illuminate\Http\Request;
use App\Models\RekamKegiatan;
use App\Exports\AnggotaExport;
use App\Models\DataKegiatanModels;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\DataKepengurusanModels;
use Illuminate\Support\Facades\Storage;
use App\Models\Anggota as ModelsAnggota;

class AnggotaController extends Controller
{
    public function dashboard()
    {
        $datakader = ModelsAnggota::paginate(50)->where('role', '=', 2);
        $Countdatakader = ModelsAnggota::all()->where('role', '=', 2)->count('role');
        $Countdepartemen = Departemen::all()->count('id');
        $Countkegiatan = DataKegiatanModels::all()->count('id');

        return view('admin.dashboard', compact('Countdatakader', 'Countdepartemen', 'Countkegiatan', 'datakader',));
    }

    public function indexAdmin()
    {
        $datakegiatan = RekamKegiatan::all();
        $data = ModelsAnggota::paginate(50)->where('role', '=', 2);
        return view('admin.data-kader', compact('data'));
    }

    public function index()
    {
        $datakegiatan = RekamKegiatan::all();
        $data = ModelsAnggota::all();
        return view('profile', compact('data'));
    }

    public function show($id_anggota)
    {
        $data = ModelsAnggota::all()->find($id_anggota);
        $departemen = Departemen::all();
        return view('admin.detail-data-kader', compact('data', 'departemen'));
    }

    public function showEdit($id_anggota)
    {
        $data = ModelsAnggota::all()->find($id_anggota);
        $departemen = Departemen::all();
        return view('edit-profile', compact('data', 'departemen'));
    }

    public function update(Request $request, $id_anggota)
    {
        // $data->update($request->except('nama', 'npm', 'password'));
        $data = ModelsAnggota::find($id_anggota);
        $data->update($request->except('password'));
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotoprofile/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            File::delete(public_path('fotoprofile/' . $request->oldfoto));
            $data->save();
        }
        return redirect()->route('profile')->with('success', 'Data berhasil diubah');
    }

    public function showEditPassword($id_anggota)
    {
        $data = ModelsAnggota::all()->find($id_anggota);
        return view('edit-password', compact('data'));
    }

    public function updatePassword(Request $request, $id_anggota)
    {
        $data = ModelsAnggota::all()->find($id_anggota);

        $request->validate([
            'old_password' => 'required',
            'password' => 'required|min:6',
            'new_password_confirmation' => 'required|same:password'
        ]);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }

        #Update the new Password
        $request['password'] = Hash::make($request['password']);
        $data->update($request->only('password'));

        return back()->with("status", "Password changed successfully!");
    }

    public function showResetPassword($id_anggota)
    {
        $data = ModelsAnggota::all()->find($id_anggota);
        return view('admin.reset-password', compact('data'));
    }

    public function resetPassword(Request $request, $id_anggota)
    {
        $data = ModelsAnggota::all()->find($id_anggota);

        $request->validate([
            'password' => 'required|min:6'
        ]);

        #Update the new Password
        $request['password'] = Hash::make($request['password']);
        $data->update($request->only('password'));

        return back()->with("status", "Password changed successfully!");
    }

    public function export()
    {
        return Excel::download(new AnggotaExport, 'DataKader.xlsx');
    }
}
