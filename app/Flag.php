<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flag extends Model
{
    protected $table = 'flags';

    protected $fillable = ['recruitment_id', 'recruit_flag'];
}
