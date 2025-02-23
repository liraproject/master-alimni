<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamPackage extends Model
{
    use HasFactory;
    protected $table = 'exam_packages';
    protected $fillable = [
        'program_id',
        'exam_name',
        'exam_description',
        'pass_score',
        'created_at',
        'updated_at'
    ];

    public function programs()
    {
        return $this->belongsTo(Program::class);
    }

    public function examQuestions()
    {
        return $this->hasMany(ExamQuestion::class);
    }

    public function examResults()
    {
        return $this->hasMany(ExamResult::class);
    }

    public function examReports()
    {
        return $this->hasMany(ExamReport::class);
    }
}
