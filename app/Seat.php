<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $table = 'seats';
    protected $fillable = [
        'position',
    ];

    public function candidate(){
        return $this->hasOne('App\Candidate');
    }

    public function priviledge(){
        return $this->hasOne('App\Priviledge');
    }
}
