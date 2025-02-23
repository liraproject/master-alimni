<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JuzRecapitulation extends Model
{
    use HasFactory;

    protected $table = 'juz_recapitulations';
    protected $fillable = [
        'student_id',
        'juz',
        'total_row',
        'is_certified',
        'created_at',
        'updated_at',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
