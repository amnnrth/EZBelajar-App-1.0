<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankSoal extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'filePath',
    ];

    //user
    public function user(){
        return $this->belongsTo(User::class);
    }

    //question
    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    //header
    public function quizHeaders()
    {
        return $this->hasMany(QuizHeader::class);
    }
}
