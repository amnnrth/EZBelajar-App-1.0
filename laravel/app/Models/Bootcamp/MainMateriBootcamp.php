<?php

namespace App\Models\Bootcamp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainMateriBootcamp extends Model
{
    use HasFactory;

    public $table = 'main_materi_bootcamps';

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

    // has to many
    public function detail_materi_bootcamp()
    {
        return $this->hasMany('App\Models\Bootcamp\DetailMateriBootcamp', 'main_materi_bootcamp_id');
    }

}
