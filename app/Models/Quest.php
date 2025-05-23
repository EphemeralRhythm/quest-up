<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
    public function plans()
    {
        return $this->belongsTo(Plan::class);
    }

    public function questProgress()
    {
        return $this->hasMany(QuestProgress::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function events()
    {
        return $this->belongsTo(Event::class);
    }
}
