<?php

namespace App\Models\Quiz;

use App\Models\BankSoal;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizHeader extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }

    public function banksoal()
    {
        return $this->belongsTo(BankSoal::class);
    }
}
