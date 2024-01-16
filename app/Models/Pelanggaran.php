<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    use HasFactory;


    protected $table= 'pelanggarans';

    protected $fillable=[
        'name',
        'alasan',
        'pelanggaran_score',
        'category_id'
    ];

    public function category(){
         return $this->belongsTo(Category::class);
    }
}
