<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LevelTahfidz extends Model
{
    use HasFactory;

    protected $table = 'level_tahfidz';
    protected $fillable = [
        'level',
        'limit_juz',
        'detail_juz',
        'created_at',
        'updated_at'
    ];

    
}
