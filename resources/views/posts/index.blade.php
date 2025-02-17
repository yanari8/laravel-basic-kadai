<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel基礎課題</title>
    <style>
        /* 投稿を囲む */
        .post{
            border: 1px solid #dddddd;
            padding: 10px;
            margin-bottom: 15px;
        }

        /* タイトル 太字*/
        .post-title{
            font-weight: bold;
            font-size: 18px;
            padding-bottom: 2px;
            margin-bottom: 2px;
            border-bottom: 1px dotted #cec4f6;
        }

        /* 本文 */
        .post-content{
            font-size: 16px;
        }

    </style>
</head>
<body>
    <h1>投稿一覧</h1>


        @foreach ($posts as $post)
            <div class="post">
                <div class="post-title">{{ $post->title}}</div>
                <div class="post-content">{{ $post->content}}</div>
            </div>
        @endforeach

</body>
</html>
