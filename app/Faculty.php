<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $table = 'faculties';
    protected $fillable = [
        'name',
    ];

    public function department(){
        return $this->hasMany('App\Department');
    }

    public function user(){
        return $this->hasMany('App\User');
    }
}
