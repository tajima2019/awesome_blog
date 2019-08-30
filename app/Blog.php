<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // protected $fillable = ["content","title","user_id"];
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}