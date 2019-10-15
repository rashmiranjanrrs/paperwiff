<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    
    protected $fillable = [
        'tag' 
    ];

    public function story()
    {
        return $this->belongsTo(Story::class);
    }

}
