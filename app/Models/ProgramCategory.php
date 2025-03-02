<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProgramCategory extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'crated_at', 'updated_at'];

    public function programs(): HasMany
    {
        return $this->hasMany(Program::class);
    }
}
