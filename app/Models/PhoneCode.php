<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PhoneCode extends Model
{
    use HasFactory;

    protected $table = 'phone_codes';

    protected $fillable = [
        'country_name',
        'code',
    ];
}
