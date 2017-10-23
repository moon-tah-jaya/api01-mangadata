<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMangaViewTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'manga_view';

    /**
     * Run the migrations.
     * @table manga_view
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
            // $table->string('bookId', 40)->nullable();
            $table->uuid('contentId')->nullable();
            $table->uuid('userId')->nullable();
            $table->dateTime('created_at')->nullable();

            $table->index(["userId"], 'manga_view_user_idx');
            $table->foreign('userId', 'manga_view_user_idx')
                ->references('id')->on('security_user')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->index(["contentId"], 'ma_view_cont_idx');
            $table->foreign('contentId', 'ma_view_cont_idx')
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
