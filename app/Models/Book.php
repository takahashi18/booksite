<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Book extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    //Sort
    public  function order($select)
    {
        if ($select == 'asc'){
            return $this ->orderBy('price','asc')->get();
        } elseif ($select =='desc'){
            return $this ->orderBy('price','desc')->get();
        }else {
            return $this -> all();
        }
    }

    //本（books）は著者（author）に属するというリレーション関係を定義する
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}