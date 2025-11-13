<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['name', 'description', 'image', 'background_image', 'slogan', 'price', 'stock'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'favorites');
    }
}
