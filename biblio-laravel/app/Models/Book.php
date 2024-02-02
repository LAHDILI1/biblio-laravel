<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public function Book(){
        return $this->belongsTo(Book::class, "book_id");
    }

    protected $fillable = [
        'title',
        'author',
        'genre',
        'description',
        'price',
        'publication_year',
        'total_copies',
        'available_copies'
    ];
}
