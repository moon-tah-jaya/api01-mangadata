<?php
# app/Models/Security/SecurityUser.php

namespace App\Models\Security;

use Illuminate\Database\Eloquent\Model;

class SecurityUser extends Model
{
    protected $table = 'security_user';
    public $timestamps = false;
}
