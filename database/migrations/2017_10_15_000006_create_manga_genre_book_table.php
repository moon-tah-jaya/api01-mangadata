<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMangaGenreBookTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'manga_genre_book';

    /**
     * Run the migrations.
     * @table manga_genre_book
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            // $table->engine = 'InnoDB';
            $table->integer('manga_genre_id')->unsigned()->nullable();
            $table->index(["manga_genre_id"], 'manga_genre_book_genre_idx');
            $table->foreign('manga_genre_id', 'manga_genre_book_genre_idx')
                ->references('id')->on('manga_genre')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->uuid('manga_book_id')->nullable();
            $table->index(["manga_book_id"], 'manga_genre_book_book_idx');
            $table->foreign('manga_book_id', 'manga_genre_book_book_idx')
                ->references('id')->on('manga_book')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
