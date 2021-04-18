<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class utilities_and_goods extends Model
{
    protected $guarded = [];

    public function user () {
        return $this->belongsTo(User::class);
    }
}
