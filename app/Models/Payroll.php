<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payroll extends Model
{
    use HasFactory;

    protected $table = 'payrolls';
    protected $fillable = [
        'teacher_id',
        'batch_id',
        'session_absent',
        'sallary',
        'deduction',
        'takehome_pay',
        'is_paid',
        'is_published',
        'created_at',
        'updated_at'
    ];

    public function teacher() : BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }

    public function batch() : BelongsTo
    {
        return $this->belongsTo(Batch::class);
    }

    public static function query($nameTeacher = null, $batchId = null)
    {
        return self::join('teachers', 'payrolls.teacher_id', '=', 'teachers.id')
        ->when($nameTeacher, function($query, $nameTeacher) {
            return $query->where('teachers.teacher_name', $nameTeacher);
        })
        ->when($batchId, function($query, $batchId) {
            return $query->where('payrolls.batch_id', $batchId);
        });
    }
}
