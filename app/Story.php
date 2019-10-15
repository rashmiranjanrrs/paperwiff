<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    
    protected $fillable = [
        'story'
     ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tag()
    {
        return $this->hasMany(Tag::class);
    }
}

