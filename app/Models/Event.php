<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function users() {
        return $this->belongsTo(User::class);
    }
    public function quests()
    {
        return $this->hasMany(Quest::class);
    }
}
