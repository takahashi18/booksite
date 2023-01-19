<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

use App\Models\Author;
//紐付けるモデルのauthorモデルをuseで読み込む
class Book extends Model
{
    use HasFactory;
    use Sortable;
    public $sortable = ['price'];

    protected $primarykey = 'id';

    protected $fillable = [
        'book_name',
        'image',
        'author_id',
        'price',
        'introduction',
    ];


    //本（books）は著者（author）に属するというリレーション定義
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}