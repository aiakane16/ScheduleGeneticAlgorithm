<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Disability;

class Teacher extends Model
{
    protected $fillable = [
        'name',
    ];

    public function disabilities(){
        return $this->belongsToMany(Disability::class);
    }
}
