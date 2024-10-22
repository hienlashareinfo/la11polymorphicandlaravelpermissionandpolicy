<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];
    public function slugs()
    {
        return $this->morphOne(Slug::class, 'slugable');
    }
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
