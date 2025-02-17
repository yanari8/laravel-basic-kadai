<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index() {
        // postsテーブルから全てのデータを取得→変数　$posts に代入
        $posts = DB::table('posts')->get();

        //　変数　$postsをposts/index/blade/php ファイルに渡す
        return view("posts.index", compact('posts'));
    }

}
