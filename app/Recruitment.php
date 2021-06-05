<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recruitment extends Model
{
    use SoftDeletes;
    
    protected $table = 'recruitments';

    protected $fillable = ['title', 'user_id', 'tech_thumbnail_id', 'summary'];

    public function techs()
    {
        return $this->belongsToMany('App/Tech', 'recruitments_techs_tags', 'recruitment_id', 'tech_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tech()
    {
        return $this->belongsTo(Tech::class);
    }

    public function flags()
    {
        return $this->hasMany(Flag::class);
    }

    public function comments()
    {
        return $this->belongsToMany('App\User', 'comments', 'recruitment_id', 'user_id')->withPivot(['id','comment', 'created_at']);
    }
}
