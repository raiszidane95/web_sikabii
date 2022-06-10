<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    protected $guarded = [];
    protected $table = 'departemen';
    protected $primaryKey = 'id_departemen';
    public $timestamps = false;

    public function kepengurusan()
    {
        return $this->belongsTo(DataKepengurusanModels::class, 'id_kepengurusan');
    }
}
