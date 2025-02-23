<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BonusRequest extends Model
{
    use HasFactory;
    protected $table = 'bonus_requests';
    protected $fillable = [
        'bonus_id',
        'batch_id',
        'teacher_id',
        'description',
        'status',
        'created_at',
        'updated_at',
    ];

    public function bonuses()
    {
        return $this->belongsTo(Bonus::class);
    }

    public function batches()
    {
        return $this->belongsTo(Batch::class);
    }

    public function teachers()
    {
        return $this->belongsTo(Teacher::class);
    }

    public static function query($teacherId = null, $batchId = null)
    {
        return self::when($teacherId, function($query, $teacherId) {
            return $query->where('teacher_id', $teacherId);
        })
        ->when($batchId, function($query, $batchId) {
            return $query->where('batch_id', $batchId);
        });
    }
}
