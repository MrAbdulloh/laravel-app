<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'img', 'slug'];
//    protected $guarded = []
    public function comments()
    {
        // one to many
        return $this->hasMany(Comment::class);
    }

    public function stats()
    {
        //one to one
        return $this->hasOne(State::class);
    }

    public function tags()
    {
        // many to many
        return $this->belongsToMany(Tag::class);
    }

}
