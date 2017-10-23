<?php
# app/Models/Manga/MangaGenre.php

namespace App\Models\Manga;

use Illuminate\Database\Eloquent\Model;

class MangaGenre extends Model
{
    protected $table = 'manga_genre';
    public $timestamps = false;
    protected $hidden = ['pivot', 'deleteFlag', 'id', 'parentId'];

    public function books()
    {
        return $this->belongsToMany('App\Models\Manga\MangaBook', 'manga_genre_book');
    }
}
