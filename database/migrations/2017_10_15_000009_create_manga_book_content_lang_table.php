<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMangaBookContentLangTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'manga_book_content_lang';

    /**
     * Run the migrations.
     * @table manga_book_content_lang
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            // $table->engine = 'InnoDB';
            // $table->increments('id');
            $table->primary("id");
            $table->uuid('id');
            $table->uuid('contentId')->nullable();
            $table->string('language', 2)->nullable();
            $table->longText('text')->nullable();

            $table->index(["contentId"], 'manga_book_content_language_content_idx');
            $table->foreign('contentId', 'manga_book_content_language_content_idx')
                ->references('id')->on('manga_chapter_content')
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
