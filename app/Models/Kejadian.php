<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kejadian extends Model
{
    use HasFactory;

    protected $fillable=[
        'siswa_id',
        'alasan',
        'pelanggaran_id',
        'category_id'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }

    public function pelanggaran(){
        return $this->belongsTo(Pelanggaran::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
