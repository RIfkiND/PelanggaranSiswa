<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;


    protected $fillable=[
        'name'
    ];
    public function kelas(){
        $this->hasMany(Kelas::class);
    }

    public function siswa(){
        $this->hasMany(Kelas::class);
    }
}
