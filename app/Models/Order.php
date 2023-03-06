<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
use App\Models\User;


class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'book_id',
        'quantity',
        'delivery_at',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);

    }

    public function user()
    {
        return $this->belongsTo(User::class);

    }
}