<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function articles()
    {
        return $this->hasMany('App\Article', 'client_id');
    }
}
