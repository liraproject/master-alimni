<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Answer extends Model
{
    use HasFactory;

    protected $table = 'answers';
    protected $fillable = ['question_id', 'answer_choice', 'is_true', 'created_at', 'updated_at'];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
