<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PayrollAllowance extends Model
{
    use HasFactory;

    protected $table = 'payroll_allowances';
    protected $fillable = [
        'batch_id',
        'teacher_id',
        'allowance_name',
        'amount',
        'created_at',
        'updated_at'
    ];

    public function batch() : BelongsTo
    {
        return $this->belongsTo(Batch::class);
    }

    public function teacher() : BelongsTo
    {
        return $this->belongsTo(Teacher::class);
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
