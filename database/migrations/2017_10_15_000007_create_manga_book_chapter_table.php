<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMangaBookChapterTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'manga_book_chapter';

    /**
     * Run the migrations.
     * @table manga_book_chapter
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            // $table->engine = 'InnoDB';
            $table->primary("id");
            $table->uuid('id');
            $table->uuid('bookId')->nullable();
            $table->integer('volume')->unsigned()->nullable();
            $table->integer('chapter')->unsigned()->nullable();
            $table->string('name', 100)->nullable();
            $table->dateTime('created_at')->nullable();

            $table->index(["bookId"], 'manga_book_volume_book_idx');
            $table->foreign('bookId', 'manga_book_volume_book_idx')
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
