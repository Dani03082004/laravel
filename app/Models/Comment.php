<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model{
    protected $fillable=[
        'title','contents'
    ];
    
    function user(){
        return $this->belongsTo(User::class);
    }

    function pio(){
        return $this->belongsTo(Pio::class);
    }
}
