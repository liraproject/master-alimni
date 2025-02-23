<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LessonAccessLog extends Model
{
    use HasFactory;

    protected $table = 'lesson_access_logs';
    protected $fillable = [
        'student_id',
        'program_id',
        'lesson_id',
        'is_read',
        'is_learned',
        'created_at',
        'updated_at'
    ];

    public function student() : BelongsTo
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function program() : BelongsTo
    {
        return $this->belongsTo(Program::class);
    }

    public function lesson() : BelongsTo
    {
        return $this->belongsTo(Lesson::class);
    }

    public static function query($programId = null, $lessonId = null, $isRead = null, $isLearned = null)
    {
        return self::join('students', 'lesson_access_logs.student_id', '=', 'students.user_id')
        ->when($programId, function($query, $programId) {
            return $query->where('program_id', $programId);
        })
        ->when($lessonId, function($query, $lessonId) {
            return $query->where('lesson_id', $lessonId);
        })
        ->when($isRead, function($query, $isRead) {
            return $query->where('is_read', $isRead);
        })
        ->when($isLearned, function($query, $isLearned) {
            return $query->where('is_learned', $isLearned);
        });

    }
}
