<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = [
        'user_id', 'title', 'correct', 'uncorrect1', 'uncorrect2',
        'explain_sentence', 'image_name', 'category_id'
    ];
}
