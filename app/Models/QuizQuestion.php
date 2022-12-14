<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'detail', 'quiz_id', 'user_id'
    ];

    public function quiz() {
        return $this->belongsTo(Quiz::class);
    }

    public function options() {
        return $this->hasMany(QuizQuestionOption::class);
    }
}
