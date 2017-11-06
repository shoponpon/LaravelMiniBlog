<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => '１つ目の記事',
                'body' => '１つ目の記事の内容',
                'created_at' => '2017-05-02 14:28:19',
                'updated_at' => '2017-05-02 14:28:19'
            ],
            [
                'title' => '２つ目の記事',
                'body' => '２つ目の記事の内容',
                'created_at' => '2017-05-02 14:28:19',
                'updated_at' => '2017-05-02 14:28:19'
            ],
            [
                'title' => '３つ目の記事',
                'body' => '３つ目の記事の内容',
                'created_at' => '2017-05-02 14:28:19',
                'updated_at' => '2017-05-02 14:28:19'
            ]
        ]);
    }
}
