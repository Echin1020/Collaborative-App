<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tech extends Model
{
    protected $table = 'techs';

    protected $fillable = ['name', 'thumbnail'];
}
