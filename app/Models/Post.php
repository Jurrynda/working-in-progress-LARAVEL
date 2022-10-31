<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'text', 'user_id', 'title', 'slug'
    ];


    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

     public function comments() {
        return $this->hasMany('App\Models\Comment')->latest();
     }

}
