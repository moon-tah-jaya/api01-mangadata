<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMangaRatingTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'manga_rating';

    /**
     * Run the migrations.
     * @table manga_rating
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
            $table->string('terminal', 24)->nullable();
            $table->uuid('bookId')->nullable();
            $table->uuid('userId')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->integer('value')->unsigned()->nullable();

            $table->index(["userId"], 'manga_rating_user_idx');
            $table->foreign('userId', 'manga_rating_user_idx')
                ->references('id')->on('security_user')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->index(["bookId"], 'manga_rating_book_idx');
            $table->foreign('bookId', 'manga_rating_book_idx')
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
