<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JuzExam extends Model
{
    use HasFactory;

    protected $table = 'juz_exams';
    protected $fillable = [
        'batch_id',
        'student_id',
        'teacher_id',
        'juz',
        'tap',
        'guide',
        'score',
        'predicate',
        'note',
        'created_at',
        'updated_at',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
    
}
