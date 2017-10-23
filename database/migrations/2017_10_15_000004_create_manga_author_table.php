<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMangaAuthorTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'manga_author';

    /**
     * Run the migrations.
     * @table manga_author
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
            $table->string('name', 100)->nullable();
            $table->string('occupation', 100)->nullable();
            $table->string('coverImage', 100)->nullable();
            $table->longText('biography')->nullable();
            $table->dateTime('bornDate');
            $table->dateTime('debut');
            $table->string('bornPlace', 100);
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
