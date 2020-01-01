<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  // by mohamed to information the seeder in our website
use Carbon\Carbon;                   // by mohamed to use format for data  in our website

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()          // this is the tags whtich i want input this in my website
    {
        DB::table('tags')->insert([
            'tag' => 'Java',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    

    DB::table('tags')->insert([
        'tag' => 'python',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ]);



DB::table('tags')->insert([
    'tag' => 'c++',
    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
]);



DB::table('tags')->insert([
    'tag' => 'php',
    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
]);



DB::table('tags')->insert([
    'tag' => 'laravel',
    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
]);

}





}
