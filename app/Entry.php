<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    // $entry->user_error
    // Entry N - 1 User

    public function user()
    {
        //Relacion de las tabalas entries con la de user
        return $this->belongsTo(User::class);
    }
}
