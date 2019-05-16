<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $fillable = [
        'name',
        'discription',
        'user_id'
    ];
    public function staff(){
        return $this->hasMany(Staff::class);
    }
}
