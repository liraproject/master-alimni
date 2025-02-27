<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Batch extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];


    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }


    public function studentSchedules()
    {
        return $this->hasMany(StudentSchedule::class);
    }


    public function tahsinSessions()
    {
        return $this->hasMany(TahsinSession::class);
    }


    public function tahfidzSessions()
    {
        return $this->hasMany(TahfidzSession::class);
    }


    public function juzExams()
    {
        return $this->hasMany(JuzExam::class);
    }


    public function tahfidzLevelExams()
    {
        return $this->hasMany(TahfidzLevelExam::class);
    }


    public function tahsinLevelExams()
    {
        return $this->hasMany(TahsinLevelExam::class);
    }


    public function teacherAbsents()
    {
        return $this->hasMany(TeacherAbsent::class);
    }

    public function payrolls()
    {
        return $this->hasMany(Payroll::class);
    }


    public function payrollBaseSalaries()
    {
        return $this->hasMany(PayrollBaseSalary::class);
    }


    public function payrollBonuses()
    {
        return $this->hasMany(PayrollBonus::class);
    }


    public function payrollAllowances()
    {
        return $this->hasMany(PayrollAllowance::class);
    }


    public function bonusRequests()
    {
        return $this->hasMany(BonusRequest::class);
    }
}
