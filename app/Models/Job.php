<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Job extends Model
{
    use HasFactory;

    protected $table = 'jobs';
    protected $fillable = [
        'job_name',
        'created_at',
        'updated_at'
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
    
}
