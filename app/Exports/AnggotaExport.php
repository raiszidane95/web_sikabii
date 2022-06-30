<?php

namespace App\Exports;

use App\Models\RekamKegiatan;
use App\Models\DataKegiatanModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AnggotaExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return DB::table('anggota')
            ->join('departemen', 'anggota.id_departemen', '=', 'departemen.id_departemen')
            ->join('kepengurusan', 'departemen.id_kepengurusan', '=', 'kepengurusan.id_kepengurusan')
            ->select(
                'nama',
                'npm',
                'jurusan',
                'fakultas',
                'angkatan',
                'tempat_lahir',
                'tanggal_lahir',
                'no_handphone',
                'jenis_kelamin',
                'alamat_asal',
                'alamat_domisili',
                'nama_departemen',
                'nama_kepengurusan'
            )->where('role', '=', '2')
            ->get();
    }

    public function headings(): array
    {
        return [
            "Nama",
            "NPM",
            "Departemen",
            "Kepengurusan",
            'Jurusan',
            'Fakultas',
            'Angkatan',
            'Tempat Lahir',
            'Tanggal Lahir',
            'No Handphone',
            'Jenis Kelamin',
            'Alamat Asal',
            'Alamat Domisili',
        ];
    }
}
