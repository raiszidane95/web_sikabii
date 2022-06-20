<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKegiatanModels extends Model
{
    protected $guarded = [];
    public $table = 'kegiatan';
    protected $primaryKey = 'id_kegiatan';
    public $timestamps = false;

    public function user()
    {
        return $this->belongsToMany(User::class, 'rekam_kegiatan', 'id_kegiatan','id_anggota');
    }
}
