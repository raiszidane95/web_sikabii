<?php

namespace App\Http\Controllers;

use App\Models\Anggota as ModelsAnggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }
    public function store(Request $request){

        $validatedData = $request->validate([
            'role' => 'required',
            'nama' => 'required|max:255',
            'email' => 'required|email:dns|unique:anggota,email',
            'password' => 'required|min:6',
            'confirm' => 'required|same:password|min:6'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        ModelsAnggota::create($validatedData);
        return redirect('/login')->with('success', 'Registrasi berhasil!. Silakan login ');
    }
}