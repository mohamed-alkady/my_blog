<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(TagsTableSeeder::class);  //by mohamed that code to make run for my seeders in my table has name TagsTableSesder
    }
}
