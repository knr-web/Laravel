<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostsController extends Controller
{

    public function hello()
    {
        echo 'Hello World!!<br>';
        echo 'コントローラから';
    }


    //---------------TOP PAGE---------------
    public function index()
    {
        $list = DB::table('posts')->get();
        // 「DB::table('posts')」でpostsテーブルを指定し
        // 「->get()」でデータを取得

        return view('posts.index', ['lists' => $list]);
        //ビューファイルの呼び出し
        // posts.index = postsディレクトリの中にあるindex.blade.phpを呼び出す
        //listsという名前で、$listを渡す
        //ビュー側で渡された名前の変数「$lists」が使用可能になる
    }
}
