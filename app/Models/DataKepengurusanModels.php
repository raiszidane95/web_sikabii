<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKepengurusanModels extends Model
{
    protected $guarded = [];
    protected $table = 'kepengurusan';
    protected $primaryKey = 'id_kepengurusan';
    public $timestamps = false;

    public function departemen()
    {
        return $this->hasMany(Departemen::class, 'id_kepengurusan','id_kepengurusan');
    }
}


