<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamQuestion extends Model
{
    use HasFactory;

    protected $table = 'exam_questions';

    protected $fillable = [
        'exam_package_id',
        'question_id',
        'real_poin',
        'created_at',
        'updated_at',
    ];

    public function examPackages()
    {
        return $this->belongsTo(ExamPackage::class);
    }
}
