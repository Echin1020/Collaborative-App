<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Tech_Tag extends Model
{
    protected $table = 'users_techs_tags';

    protected $fillable = ['user_id', 'tech_id'];
}
