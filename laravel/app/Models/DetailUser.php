<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class DetailUser extends Model
{
    use HasFactory, HasRoles;

    public $table = 'detail_user';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'users_id',
        'photo',
        'occupation',
        'sex',
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    // one to one
    public function user()
    {
        return $this->belongsTo('App/Models/User', 'user_id', 'id');
    }

    public function role(){
        return $this->belongsTo('App/Models/Role', 'role', 'id');
    }
}
