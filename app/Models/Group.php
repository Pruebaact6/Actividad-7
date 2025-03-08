<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function users() {
        return $this->hasMany(User::class);
    }

    public function courses() {
        return $this->belongsToMany(Course::class, 'course_group');
    }
}
