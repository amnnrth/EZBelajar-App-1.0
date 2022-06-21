<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use App\Models\User\ExpreienceUser;

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
        'contact_number',
        'sex',
        'link_experience',
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

    // one to many
    public function experience_user()
    {
        return $this->hasMany('App\Models\User\ExpreienceUser', 'detail_user_id');
    }
}
