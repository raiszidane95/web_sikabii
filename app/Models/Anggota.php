<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{

    protected $guarded = ['id_anggota'];
    protected $table = 'anggota';
    protected $primaryKey = 'id_anggota';
    public $timestamps = false;

    public function departemen()
    {
        return $this->belongsTo(Departemen::class, 'id_departemen');
    }
}
