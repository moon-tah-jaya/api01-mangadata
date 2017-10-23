<?php

namespace App\Models\Security;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todo';
    protected $fillable = ['todo', 'category', 'user_id', 'description'];


}