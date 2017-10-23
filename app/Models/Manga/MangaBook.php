<?php
# app/Models/Manga/MangaBook.php

namespace App\Models\Manga;

use Illuminate\Database\Eloquent\Model;

class MangaBook extends Model
{
    protected $table = 'manga_book';
    public $timestamps = false;
    public $incrementing = false;
    // protected $fillable = ['genres'];

    public function genres()
    {
        return $this->belongsToMany('App\Models\Manga\MangaGenre', 'manga_genre_book');
    }

    public function author()
    {
        return $this->hasOne('App\Models\Manga\MangaAuthor', 'id', 'authorId');
    }

    public function publisher()
    {
        return $this->hasOne('App\Models\Manga\MangaPublisher', 'id', 'publisherId');
    }

    public function status()
    {
        return $this->hasOne('App\Models\Manga\MangaBookStatus', 'id', 'statusId');
    }

    public static function showAll() {
        $result = array();
        $books  = MangaBook::all();
        foreach($books as $book) {
            $bookGenres = [];
            foreach($book->genres as $genre) {
                $bookGenres[] = $genre->name ;
            }

            $result[] = (object) [
                'totalView' => $book->totalView,
                'genres' => $bookGenres,
                'coverImage' => $book->coverImage,
                'author' => $book->author->name,
                'publisher' => $book->publisher->name,
                'status' => $book->status->name,
                'lastChapter' => 'vol.1 chapter 25',
                'lastUpdate' => '02 October 2017'
            ];
        }

        return $result;
    }
}
