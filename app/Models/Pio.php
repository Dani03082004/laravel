<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pio extends Model{
    private $title;
    private $contents;
    private $image_url;
    private User $user_id;

    
}

