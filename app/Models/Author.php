<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use PharIo\Manifest\AuthorElement;
use App\Models\Book; //追記

class Author extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    use Notifiable;
    protected $fillable= [
        'author',
    ];

    //リレーション定義：hasManyの設定
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}