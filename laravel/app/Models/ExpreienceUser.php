<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpreienceUser extends Model
{
    use HasFactory;
    protected $guarded = [];

    // one to one
    public function detail_user()
    {
        return $this->belongsTo('App\Models\DetailUser', 'detail_user_id', 'id');
    }

}
