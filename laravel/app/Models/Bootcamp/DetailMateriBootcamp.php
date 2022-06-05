<?php

namespace App\Models\Bootcamp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailMateriBootcamp extends Model
{
    use HasFactory;

    public $table = 'detail_materi_bootcamps';

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
    public function mainMateriBootcamp()
    {
        return $this->belongsTo('App\Models\Bootcamp\MainMateriBootcamp', 'main_materi_bootcamp_id', 'id');
    }

}
