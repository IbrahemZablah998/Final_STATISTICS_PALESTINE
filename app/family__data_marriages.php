<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class family__data_marriages extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
