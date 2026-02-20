<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'image',
        'category',
        'created_by'
    ];

    public function cattegoryData()
    {
        return $this->belongsTo(Category::class, 'category');
    }
}
