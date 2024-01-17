<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'kelas',
        'jumlah',
        'jurusan_id'
    ];

    public function jurusan(){
      return  $this->belongsTo(Jurusan::class);
    }

    public function siswa(){
        return $this->hasMany(Siswa::class);
    }

    public function kejadian(){
        return $this->hasMany(Kejadian::class);
    }
}
