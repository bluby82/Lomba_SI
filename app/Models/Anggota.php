<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nisn',
        'regus_id',
    ];

    public function regus()
    {
        return $this->belongsTo(Regu::class);
    }
}
