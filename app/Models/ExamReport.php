<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamReport extends Model
{
    use HasFactory;
    protected $table = 'exam_reports';
    protected $fillable = [
        'exam_package_id',
        'student_id',
        'program_id',
        'level',
        'score',
        'predicate',
        'is_passed',
        'created_at',
        'updated_at',
    ];

    public function examPackages()
    {
        return $this->belongsTo(ExamPackage::class);
    }

    public function programs()
    {
        return $this->belongsTo(Program::class);
    }

    public function students()
    {
        return $this->belongsTo(Student::class);
    }


}
