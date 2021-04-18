<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class family__data_learnings extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
