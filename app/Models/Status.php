<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //
<<<<<<< HEAD
    protected $fillable = ['content'];

    public function user()
    {
        # code...
        return $this->belongsTo(user::class);
=======
    public function user()
    {
        # code...
        return $this->belongsTo(User::class);
>>>>>>> user-statuses
    }
}
