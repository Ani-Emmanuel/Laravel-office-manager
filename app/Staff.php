<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'select'

    ];
    public function department(){
        return $this->hasMany(Department::class);
    }
}
