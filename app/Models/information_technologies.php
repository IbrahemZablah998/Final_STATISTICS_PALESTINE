<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class information_technologies extends Model
{
    protected $guarded = [];

    public function user () {
        return $this->belongsTo(User::class);
    }
}
