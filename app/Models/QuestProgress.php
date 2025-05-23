<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestProgress extends Model
{
    public function users() {
        return $this->belongsTo(User::class);
    }
    public function quests() {
        return $this->belongsTo(Quest::class);
    }
}
