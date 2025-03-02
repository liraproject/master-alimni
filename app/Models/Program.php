<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Program extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function lessons() : HasMany
    {
        return $this->hasMany(Lesson::class);
    }

    public function levelCompetencies() : HasMany
    {
        return $this->hasMany(LevelCompetency::class);
    }

    public function limitTeachers() : HasMany
    {
        return $this->hasMany(LimitTeacher::class);
    }

    public function payrollBaseSalaries() : HasMany
    {
        return $this->hasMany(PayrollBaseSalary::class);
    }

    public function classes() : HasMany
    {
        return $this->hasMany(Classes::class);
    }

    public function schedules() : HasMany
    {
        return $this->hasMany(Schedule::class);
    }

    public function registrations() : HasMany
    {
        return $this->hasMany(Registration::class);
    }

    public function lesson_access_logs() : HasMany
    {
        return $this->hasMany(LessonAccessLog::class);
    }

    public function levelRecapitulations() : HasMany
    {
        return $this->hasMany(LevelRecapitulation::class);
    }

    public function questions() : HasMany
    {
        return $this->hasMany(Question::class);
    }

    public function examPackages() : HasMany
    {
        return $this->hasMany(ExamPackage::class);
    }

    public function examResults() : HasMany
    {
        return $this->hasMany(ExamResult::class);
    }

    public function examReports() : HasMany
    {
        return $this->hasMany(ExamReport::class);
    }

    public function programCategory(): BelongsTo
    {
        return $this->belongsTo(ProgramCategory::class);
    }



}
