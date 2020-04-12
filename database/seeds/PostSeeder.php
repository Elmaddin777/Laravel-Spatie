<?php

use Illuminate\Database\Seeder;
//use DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<10; $i++){
          DB::table('posts')->insert([
            'title' => 'Lorem ipsum dolor',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A veritatis explicabo dicta, quam, quidem asperiores!'
          ]);
        }
    }
}
