<?php

namespace App\Models\Bootcamp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BenefitBootcamp extends Model
{
    use HasFactory;

    public $table = 'benefit_bootcamps';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'bootcamp_id',
        'description',
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    // one to many
    public function bootcamp()
    {
        return $this->belongsTo('App\Models\Bootcamp\Bootcamp', 'bootcamp_id', 'id');
    }
}
