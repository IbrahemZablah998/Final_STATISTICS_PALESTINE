<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class housing_data_dead extends Model
{
    protected $guarded = [];

    public function user () {
        return $this->belongsTo(User::class);
    }
}
