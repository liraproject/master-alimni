<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LevelRecapitulation extends Model
{
    use HasFactory;

    protected $table = 'level_recapitulations';
    protected $fillable = [
        'student_id',
        'program_id',
        'level',
        'is_certified',
        'created_at',
        'updated_at'
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public static function query($programId = null, $name = null)
    {
        return self::join('students', 'lesson_access_logs.student_id', '=', 'students.user_id')
        ->when($programId, function($query, $programId) {
            return $query->where('program_id', $programId);
        })
        ->when($name, function($query, $name) {
            return $query->where('students.fullname', 'like', '%'.$name.'%');
        });

    }
}
