<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMangaChapterContentTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'manga_chapter_content';

    /**
     * Run the migrations.
     * @table manga_chapter_content
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
            $table->integer('idx')->unsigned()->nullable();
            $table->uuid('chapterId')->nullable();
            $table->string('content', 100)->nullable();

            $table->index(["chapterId"], 'ma_ch_cont_ch_idx');
            $table->foreign('chapterId', 'ma_ch_cont_ch_idx')
                ->references('id')->on('manga_book_chapter')
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
