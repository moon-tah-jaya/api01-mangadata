<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMangaPublisherTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'manga_publisher';

    /**
     * Run the migrations.
     * @table manga_publisher
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
            $table->string('name', 45)->nullable();
            $table->longText('biography')->nullable();
            $table->dateTime('founded')->nullable();
            $table->string('country', 100)->nullable();
            $table->string('logo', 100)->nullable();
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
