<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User2 extends Model
{
    public function role() {
        return $this->belongsTo(Role::class);
    }

    public function group() {
        return $this->belongsTo(Group::class);
    }
}
