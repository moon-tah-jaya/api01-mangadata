<?php

namespace App\Http\Controllers;

use App\Models\Manga\MangaAuthor;
use App\Models\Manga\MangaBook;
use App\Models\Manga\MangaBookChapter;
use App\Models\Manga\MangaBookContentLanguage;
use App\Models\Manga\MangaBookStatus;
use App\Models\Manga\MangaChapterContent;
use App\Models\Manga\MangaGenre;
use App\Models\Manga\MangaGenreBook;
use App\Models\Manga\MangaPublisher;
use App\Models\Manga\MangaRating;
use App\Models\Manga\MangaView;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class MangaController extends Controller
{
    public function index(){
        return MangaBook::showAll();
    }


}