<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>投稿詳細</title>
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        
    </head>
    <div class="container">
        <h1>詳細</h1>
        <div>
            <h2>タイトル</h2>
            <h2>{{$post->title}}</h2>
        </div>
        <div>
            <h2>画像</h2>
            <img src="../../uploads/{{$post->image}}" class="card-img-top" alt="Card image cap" width="300" height="200">
        </div>
        <div>
            <h2>詳細</h2>
            <h2>{{$post->description}}</h2>
        </div>
    </div>
</html>
    
    <h1>コメント</h1>
        <ul>
            <li>
                <form method="POST" action="{{route('comments.store',$post)}}">
                    @csrf
                    <input type="text" name"body">
                    <button>追加</button>
                </form>
            </li>
        </ul>
        <ul>
            @foreach($post->comments()->latest()->get() as $comment)
            <li>
                {{$comment->body}}
            </li>
            @endforeach
        </ul>
