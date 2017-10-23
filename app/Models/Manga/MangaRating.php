<?php
# app/Models/Manga/MangaRating.php

namespace App\Models\Manga;

use Illuminate\Database\Eloquent\Model;

class MangaRating extends Model
{
    protected $table = 'manga_rating';
    public $timestamps = false;
}
