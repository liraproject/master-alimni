<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Classes extends Model
{
    use HasFactory;

    protected $table = 'classes';
    protected $fillable = [
        'program_id',
        'teacher_id',
        'class_name',
        'link_wa',
        'is_open',
        'created_at',
        'updated_at',
    ];

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }

    public function tahsinSessions()
    {
        return $this->hasMany(TahsinSession::class);
    }

    public function tahfidzSessions()
    {
        return $this->hasMany(TahfidzSession::class);
    }

    public static function query($programId = null, $teacherId = null, $className = null)
    {
        return self::when($teacherId, function($query, $teacherId) {
            return $query->where('teacher_id', $teacherId);
        })
        ->when($programId, function($query, $programId) {
            return $query->where('program_id', $programId);
        })
        ->when($className, function($query, $className) {
            return $query->where('program_id', $className);
        });

    }


}
