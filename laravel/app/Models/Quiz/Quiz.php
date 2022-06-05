<?php

namespace App\Models\Quiz;

use App\Models\BankSoal;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function banksoal()
    {
        return $this->belongsTo(BankSoal::class);
    }

    public function quizHeader()
    {
        return $this->belongsTo(QuizHeader::class);
    }
}
