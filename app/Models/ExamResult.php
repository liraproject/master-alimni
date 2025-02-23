<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamResult extends Model
{
    use HasFactory;

    protected $table = 'exam_results';
    protected $fillable = [
        'exam_package_id',
        'student_id',
        'program_id',
        'question',
        'answer',
        'poin',
        'is_true',
        'created_at',
        'updated_at'
    ];

    public function programs()
    {
        return $this->belongsTo(Program::class);
    }

    public function students()
    {
        return $this->belongsTo(Student::class);
    }

    public function examPackages()
    {
        return $this->belongsTo(ExamPackage::class);
    }
}
