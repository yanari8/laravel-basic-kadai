<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        // postsテーブルから全てのデータを取得→変数　$posts に代入
        $posts = DB::table('posts')->get();

        //　変数　$postsをposts/index/blade/php ファイルに渡す
        return view("posts.index", compact('posts'));
    }

    public function show($id)
    {
        // URLの'/posts/{id}'と主キー（idカラム）の値が一致するデータをproductsテーブルから取得し、変数$postに代入
        $post = Post::find($id);

        // $postがNULLの場合、indexメソッドを呼び出す
        if (!$post) {
            return $this->index();
        }

        // 変数$postをposts/show.blade.phpファイルに渡す
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view("posts.create");
    }

    public function store(Request $request)
    {
        // バリデーション設定
        $request->validate([
            'title' => 'required|max:20',
            'content' => 'required|max:200'
        ]);

        // フォームの入力内容を元に、テーブルにデータ追加
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        // リダイレクト
        return redirect("/posts");
    }
}
