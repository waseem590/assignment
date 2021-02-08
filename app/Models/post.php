<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    public function userpost(){
        return $this->belongsto(User::class);
    }
    public function commentpost(){
        return $this->hasMany(comment::class, 'post_id');
    }        
}
