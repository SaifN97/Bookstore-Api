<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $hidden  = ['laravel_through_key', 'created_at', 'updated_at'];

    public function books()
    {
        return $this->hasManyThrough(
            'App\Modles\Book',
            'App\Modles\Author',
            'author_id',
            'id',
            'id',
            'book_id'
        );
    }
}
