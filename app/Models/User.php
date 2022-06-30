<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function departemen()
    {
        return $this->belongsTo(Departemen::class, 'id_departemen')->withDefault(['nama_departemen' => 'Data Kosong', 'tahun_kepengurusan' => 'Data Kosong',]);
    }

    public function datakegiatan()
    {
        return $this->belongsToMany(DataKegiatanModels::class, 'rekam_kegiatan', 'id_anggota','id_kegiatan')->withPivot('waktu_rekamkegiatan ');
    }

    public function rekamkegiatan()
    {
        return $this->belongsTo(RekamKegiatan::class,'id_anggota', 'id_anggota');
    }

    protected $guarded = ['id_anggota'];
    protected $table = 'anggota';
    protected $primaryKey = 'id_anggota';
    public $timestamps = false;

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
