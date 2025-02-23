<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lesson extends Model
{
    use HasFactory;

    protected $table = 'lessons';
    protected $fillable = [
        'program_id',
        'level',
        'order',
        'content',
        'upload_file',
        'file_type',
        'link',
        'created_at',
        'updated_at'
    ];

    public function program() : BelongsTo
    {
        return $this->belongsTo(Program::class);
    }

    public function levelCompetencies() : HasMany
    {
        return $this->hasMany(LevelCompetency::class);
    }

    public function lessionAccessLogs() : HasMany
    {
        return $this->hasMany(LessonAccessLog::class);
    }

    public function tahsinSessions() : HasMany
    {
        return $this->hasMany(TahsinSession::class);
    }
}
