<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'soal',
        'skor',
        'users_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function anggotas()
    {
        return $this->hasMany(Anggota::class);
    }
}
