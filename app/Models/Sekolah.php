<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    use HasFactory;

    protected $table = 'sekolah';

    protected $fillable = [
        'nama',
        'alamat',
        'limit'
    ];

    //relasi ke nilai
    public function nilai()
    {
        return $this->hasOne(Sekolah::class);
    }

    //relasi ke hasil
    public function hasil()
    {
        return $this->hasOne(Hasil::class);
    }
}
