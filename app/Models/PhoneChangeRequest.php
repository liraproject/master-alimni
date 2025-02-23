<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PhoneChangeRequest extends Model
{
    use HasFactory;

    protected $table = 'phone_change_requests';
    protected $fillable = [
        'student_id',
        'new_phone',
        'verification_code',
        'is_verified',
        'created_at',
        'updated_at',
    ];

    public function student() : BelongsTo
    {
        return $this->belongsTo(User::class, 'student_id');
    }


}
