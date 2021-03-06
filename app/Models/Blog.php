<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'placement',
        'category',
        'title',
        'detailOne',
        'quote',
        'detailTwo',
        'image',
        'imageOne',
        'imageTwo',
        'detailA',
        'urlA',
        'detailB',
        'urlB',
        'detailC',
        'urlC',
        'detailD',
        'urlD',
        'urlE',
        'urlF',
        'whoSaid',
        'urlAName',
        'urlBName',
        'urlCName',
        'urlDName',
        'youtube',

    ];
}
