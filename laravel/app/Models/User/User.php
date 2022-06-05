<?php

namespace App\Models\User;

use App\Models\Quiz\Question;
use App\Models\Quiz\QuizHeader;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    // one to one
    public function detail_user()
    {
//        return $this->hasOne('App\Models\DetailUser', 'user_id');
        return $this->hasOne('App\Models\User\DetailUser', 'user_id');
    }

    // one to many
    public function belajar()
    {
        return $this->hasMany('App\Models\Belajar', 'id');
    }

    // article
    public function artikel()
    {
        return $this->hasMany('App\Models\Post', 'user_id');
    }

    // bank soal
    public function bank_soal()
    {
        return $this->hasMany('App\Models\BankSoal', 'user_id');
    }

    //question
    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    //header quiz
    public function quizHeaders()
    {
        return $this->hasMany(QuizHeader::class);
    }
}
