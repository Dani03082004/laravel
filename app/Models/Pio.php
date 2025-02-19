<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pio extends Model{
    protected $fillable=[
        'title','contents','image_url'
    ];
    private User $user_id;

    function user(){
        return $this->belongsTo(User::class);
    }

    function comments(){
        return $this->hasMany(Comment::class);
    }
}

