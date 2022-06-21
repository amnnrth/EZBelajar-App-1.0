<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

    public $table = 'orders';

    // one to one with bootcmap
    public function bootcamp()
    {
        return $this->belongsTo('App\Models\Bootcamp', 'bootcamp_id', 'id');
    }

}
