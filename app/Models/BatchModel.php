<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class BatchModel extends Model
{

    protected $table = 'batch';
    protected $fillable = [
        'program_id',
        'nama',
        'start_date',
        'end_date',
    ];

    public function user(): HasOne
    {
        return $this->hasOne(ProgramModel::class, 'foreign_key', 'local_key');
    }
}
