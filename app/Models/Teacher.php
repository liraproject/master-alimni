<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teachers';
    protected $guarded = [

    ];

    public function teacherCertificates() : HasMany
    {
        return $this->hasMany(TeacherCertificate::class);
    }

    public function teacherSkills() : HasMany
    {
        return $this->hasMany(TeacherSkill::class);
    }
}
