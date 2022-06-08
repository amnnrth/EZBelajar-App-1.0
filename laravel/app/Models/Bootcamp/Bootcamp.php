<?php

namespace App\Models\Bootcamp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bootcamp extends Model
{
    use HasFactory;

    public $table = 'bootcamps';

    protected $fillable = [
        'users_id',
        'title',
        'description',
        'price',
        'study_case',
        'mentor_id',
        'updated_at',
        'created_at',
    ];

    //one to one
    public function user()
    {
        return $this->belongsTo('App\Models\User\User', 'user_id', 'id');
    }

    // has many
    public function benefit_bootcamp()
    {
        return $this->hasMany('App\Models\Bootcamp\BenefitBootcamp', 'bootcamp_id');
    }

    public function advantage_bootcamp()
    {
        return $this->hasMany('App\Models\Bootcamp\AdvantageBootcamp', 'bootcamp_id');
    }

    public function detail_bootcamp()
    {
        return $this->hasMany('App\Models\Bootcamp\DetailBootcamp', 'bootcamp_id');
    }

    public function main_bootcamp()
    {
        return $this->hasMany('App\Models\Bootcamp\MainMateriBootcamp', 'bootcamp_id');
    }
}
