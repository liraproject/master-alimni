<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LimitTeacher extends Model
{
    use HasFactory;

    protected $table = 'limit_teachers';
    protected $fillable = [
        'program_id',
        'teacher_id',
        'max_student',
        'created_at',
        'updated_at'
    ];

    public function program() : BelongsTo
    {
        return $this->belongsTo(Program::class);
    }

    public function teacher() : BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }

}
