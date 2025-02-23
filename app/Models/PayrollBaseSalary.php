<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PayrollBaseSalary extends Model
{
    use HasFactory;

    protected $table = 'payroll_base_salaries';
    protected $fillable = [
        'batch_id',
        'teacher_id',
        'program_id',
        'total_student',
        'base_sallary',
        'created_at',
        'updated_at',
    ];

    public function batch() : BelongsTo
    {
        return $this->belongsTo(Batch::class);
    }

    public function teacher() : BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }

    public function program() : BelongsTo
    {
        return $this->belongsTo(Program::class);
    }

    public static function query($nameTeacher = null, $batchId = null, $programId = null)
    {
        return self::join('teachers', 'payrolls.teacher_id', '=', 'teachers.id')
        ->when($nameTeacher, function($query, $nameTeacher) {
            return $query->where('teachers.teacher_name', $nameTeacher);
        })
        ->when($batchId, function($query, $batchId) {
            return $query->where('payrolls.batch_id', $batchId);
        })
        ->when($programId, function($query, $programId) {
            return $query->where('payrolls.program_id', $programId);
        });
    }
}
