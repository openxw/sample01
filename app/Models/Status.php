<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //
    public function user()
    {
        # code...
        return $this->belongsTo(User::class);
    }
}
