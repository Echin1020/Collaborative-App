<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruitment_Tech_Tag extends Model
{
    protected $table = 'recruitments_techs_tags';

    protected $fillable = ['recruitment_id', 'tech_id'];
}
