<?php

namespace App\Models\Security;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Users extends Model implements Authenticatable
{
    //
    use AuthenticableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['username', 'email', 'password', 'userimage', 'api_token'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'api_token'
    ];

    public $incrementing = false;

    /*
    * Get Todo of User
    *
    */

    public function todo()
    {
        return $this->hasMany('App\Models\Security\Todo', 'user_id');
    }
}