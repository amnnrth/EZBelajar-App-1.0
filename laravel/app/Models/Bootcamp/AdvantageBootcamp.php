<?php

namespace App\Models\Bootcamp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvantageBootcamp extends Model
{
    use HasFactory;

    public $table = 'advantage_bootcamps';

    protected $fillable = [
        'bootcamp_id',
        'description',
        'updated_at',
        'created_at',
    ];

    // one to many
    public function bootcamp()
    {
        return $this->belongsTo('App\Models\Bootcamp\Bootcamp', 'bootcamp_id', 'id');
    }
}
