<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LevelCompetency extends Model
{
    use HasFactory;

    protected $table = 'level_competencies';
    protected $fillable = [
        'level',
        'program_id',
        'lesson_id',
        'created_at',
        'updated_at'
    ];

    public function program() : BelongsTo
    {
        return $this->belongsTo(Program::class);
    }

    public function lesson() : BelongsTo
    {
        return $this->belongsTo(Lesson::class);
    }
}
