<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Allowance extends Model
{
    use HasFactory;

    protected $table = 'allowances';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'allowance_name', 'amount', 'created_at', 'updated_at'
    ];

    public function teacherAllowances()
    {
        return $this->hasMany(TeacherAllowance::class, 'allowance_id');
    }
}
