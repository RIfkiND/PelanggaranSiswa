<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Siswa extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles;

    protected $guard= 'siswa';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'nis',
        'password',
        'no_telp',
        'tanggal_lahir',
        'image',
        'score_pelanggaran',
        'jurusan',
        'kelas'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'nis',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getTotalKejadianAttribute()
    {
        return $this->kejadians()->count();
    }
    public function getTotalPelanggaranScoreAttribute()
    {
        return $this->kejadians()
            ->join('pelanggarans', 'kejadians.pelanggaran_id', '=', 'pelanggarans.id')
            ->sum('pelanggarans.pelanggaran_score');
    }

    public function kejadians()
    {
        return $this->hasMany(Kejadian::class);
    }

    public function kelas(){
        return $this->belongsToMany(Kelas::class);
    }

    public function jurusan(){
        return $this->belongsTo(Jurusan::class);
    }

    public function pelanggaran()
    {
        return $this->hasMany(Pelanggaran::class);
    }
}
