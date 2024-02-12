<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//以下一行追加!
//DBを使うよーという宣言
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // ↓↓　postsテーブルのcontentsカラムにレコード追加
    public function run()
    {
        DB::table('posts')->insert([

            ['contents' => 'こんにちは'],
            ['contents' => 'HELLO'],

            ['username' => 'たろう'],
            ['username' => 'キャサリン']

        ]);
    }
}
