<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public $timestamps = true; 

    protected $fillable = ['book_name', 'book_author', 'book_description', 'category_id', 'book_image', 'created_at', 'updated_at']; 

    public function category()
    {
        return $this->belongsTo(Category::class); 
    }
}
