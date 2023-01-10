<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PharIo\Manifest\AuthorElement;

class Author extends Model
{
    use HasFactory;

    //primaryKeyの変更
    protected $primaryKey = "author_id";

    //hasManyの設定
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}