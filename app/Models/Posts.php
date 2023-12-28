<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = [
        'cate_id',
        'title',
        'author',
        'status',
        'popular',
        'description',
        'image'
    ];

    public function category(){
        return $this->belongsTo(BlogCategory::class, 'cate_id', 'id');
    }

    public function tags(){
        return $this->belongsToMany(Tags::class);
    }
}
