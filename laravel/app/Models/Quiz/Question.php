<?php

namespace App\Models\Quiz;

use App\Models\BankSoal;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'question',
        'explanation',
        'is_active',
        'user_id',
        'bank_soal_id',
    ];


    public function banksoal()
    {
        return $this->belongsTo(BankSoal::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
