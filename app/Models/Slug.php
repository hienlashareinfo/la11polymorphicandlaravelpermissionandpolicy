<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slug extends Model
{

    protected $guarded = ['id'];
    public function slugable()
    {
        return $this->morphTo('slugable');
    }
}
