<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'jumlah',
        'jurusan_id'
    ];

    public function jurusan(){
      return  $this->belongsTo(Jurusan::class);
    }

    public function siswa(){
        return $this->hasMany(Siswa::class);
    }
}
