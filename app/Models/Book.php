<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function authors()
    {
        return $this->hasManyThrough(
            'App\Modles\Author',
            'App\Modles\Book',
            'book_id',
            'id',
            'id',
            'author_id'
        );
    }
}
