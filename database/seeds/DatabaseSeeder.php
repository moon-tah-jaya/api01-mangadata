<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateAllTable();
        $this->call('UsersTableSeeder');
        $this->call('QuoteTableSeeder');
        $this->call('MangaTableSeeder');
    }

    public function truncateAllTable() {
        // set tables don't want to trucate here
        $excepts = ['migrations'];

        // Iterate over the results of SHOW TABLES
        // strip off all the objects and keys.
        $tables = array_map('reset', \DB::select('SHOW FULL TABLES'));
        // \DB::select('SET FOREIGN_KEY_CHECKS=0');
        Schema::disableForeignKeyConstraints();
        foreach ($tables as $table) {
            //if you don't want to truncate migrations
            if (in_array($table, $excepts)) continue;
            echo 'truncate table '.$table."\r\n";
            \DB::table($table)->truncate();
        }
        // \DB::select('SET FOREIGN_KEY_CHECKS=1');
        Schema::enableForeignKeyConstraints();
    }
}
