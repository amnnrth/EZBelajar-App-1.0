<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpreienceUser extends Model
{
    use HasFactory;

    public $table = 'expreience_users';

    protected $fillable = [
        'detail_user_id',
        'experience',
        'updated_at',
        'created_at',
    ];


    // one to many
    public function detail_user()
    {
        return $this->belongsTo('App\Models\DetailUser', 'detail_user_id', 'id');
    }
}
