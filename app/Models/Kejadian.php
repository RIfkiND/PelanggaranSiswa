<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kejadian extends Model
{
    use HasFactory;

    protected $fillable=[
        'siswa_id',
        'pelanggaran_id',
        'category_id'
    ];

    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }

    public function pelanggaran(){
        return $this->belongsTo(Pelanggaran::class);
    }


}
