<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMangaBookTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'manga_book';

    /**
     * Run the migrations.
     * @table manga_book
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            // $table->engine = 'InnoDB';
            $table->primary('id');
            $table->uuid('id');
            $table->uuid('authorId')->nullable();
            $table->uuid('publisherId')->nullable();
            $table->integer('statusId')->unsigned()->nullable();
            $table->integer('totalView')->unsigned()->nullable();
            $table->string('coverImage', 100)->nullable();
            $table->longText('summary')->nullable();

            $table->index(["statusId"], 'manga_book_status_idx');
            $table->index(["authorId"], 'manga_book_author_idx');
            $table->index(["publisherId"], 'manga_book_publisher_idx');
            $table->nullableTimestamps();

            $table->foreign('statusId', 'manga_book_status_idx')
                ->references('id')->on('manga_book_status')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('authorId', 'manga_book_author_idx')
                ->references('id')->on('manga_author')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('publisherId', 'manga_book_publisher_idx')
                ->references('id')->on('manga_publisher')
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
