<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;


    protected $fillable=[
        'name',
        'jumlah_siswa',
    ];

    protected $timestamp = false;
    
    public function kelas(){
       return  $this->hasMany(Kelas::class);
    }

    public function siswa(){
       return  $this->hasMany(Kelas::class);
    }
}
