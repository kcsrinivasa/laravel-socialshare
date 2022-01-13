<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Blog extends Model
{
    use HasFactory,Sluggable;
    protected $fillable=['slug','title','description','metaKeyword','metaDescription','image','user_name','active',];

    public function sluggable()
    {
        return [ 'slug' => [ 'source' => 'title' ] ];
    }
}
