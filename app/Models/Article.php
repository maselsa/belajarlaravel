<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table ='articles';

    protected $fillable = [
        'no',
        'title', 
        'slug',
        'slug',
        'content',
        'author',
        'category_id',
    ];   

    public function category ()
    {
        return $this->belongsTo(Category::class, 'category_id','id');
    }
}
