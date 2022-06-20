<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekamKegiatan extends Model
{
    protected $guarded = [];
    protected $table = 'rekam_kegiatan';
    protected $primaryKey = 'id_rekamkegiatan';
    public $timestamps = false;

    public function anggota()
    {
        return $this->belongsTo(User::class,'id_anggota');
    }
    public function datakegiatan()
    {
        return $this->belongsToMany(DataKegiatanModels::class,'rekam_kegiatan', 'id_kegiatan' , 'id_rekamkegiatan');
    }
}

