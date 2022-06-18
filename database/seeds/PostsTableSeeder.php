<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //DB::table('posts')->insert([
        //'title' => '命名の心得',
        //'body' => '命名はデータを基準に考える',
        //'created_at' => new datetime(),
     // ]);
    
      //DB::table('posts')->insert([
        //'title' => 'エラー文',
        //'body' => '読めるようになれば怖くない',
        //'category' =>  9-1
      //]);
    factory(App\Post::class, 3)->create();
    }
}
