<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function category()
    {
        return $this->hasOne('App\Category');
    }

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
