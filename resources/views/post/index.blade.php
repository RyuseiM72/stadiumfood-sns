<!doctype html>
<html lang="ja" >
<head>
<title>投稿一覧</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">
</head>
<body>
<a id="skippy" class="sr-only sr-only-focusable" href="#content">
<div class="container">
<span class="skiplink-text">Skip to main content</span>
</div>
</a>
<div class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2 d-none d-md-inline-block" href="{{ route('post.index') }}">投稿一覧</a>
    <a class="py-2 d-none d-md-inline-block" href="{{ route('post.create') }}">新規投稿</a>
    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>
</div>


<main role="main">
 
<div class="album py-5 bg-light">
<div class="container">
<div class="row">
@foreach($post as $p)
<div class="col-md-4">
<div class="card mb-4 shadow-sm">
<a href="{{route('post.show',['id' => $p->id])}}">
<p><img src="../../uploads/{{$p->image}}"class="card-img-top" alt="Card image cap" width="300" height="200"></p>
</a>
<div class="card-body">
<p class="card-text"><a href="{{route('user.show',["id" => $p->user_id])}}">{{$p->name}}</a></p>
<p class="card-text">{{$p->title}}</p>
<p class="card-text">{{$p->description}}</p>
<div class="d-flex justify-content-between align-items-center">
<div class="btn-group">
@if (Auth::id() != $p->user_id)
 
   @if (Auth::user()->is_favorite($p->id))
 
       {!! Form::open(['route' => ['favorites.unfavorite', $p->id], 'method' => 'delete']) !!}
           {!! Form::submit('いいね！を外す', ['class' => "button btn btn-warning"]) !!}
       {!! Form::close() !!}
 
   @else
 
       {!! Form::open(['route' => ['favorites.favorite', $p->id]]) !!}
           {!! Form::submit('いいね！を付ける', ['class' => "button btn btn-success"]) !!}
       {!! Form::close() !!}
 
   @endif
 
@endif

@if($p->user_id == Auth::id())

<a href="{{route('post.edit',['id' => $p->id])}}" class="btn btn-sm btn-outline-info">編集</a>
<form method="POST" action="{{route('post.destroy',['id'=>$p->id])}}">
@csrf
<button type="submit" class="btn btn-sm btn-outline-danger">削除</button>
@endif
</div>

</div>
</div>
</div>
</div>
@endforeach
 

</div>
</div>
</div>
</main>
 
<script src="../../assets/js/vendor/holder.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>
window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery-slim.min.js"><\/script>')
</script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script><script src="/docs/4.5/assets/js/vendor/anchor.min.js"></script>
<script src="/docs/4.5/assets/js/vendor/clipboard.min.js"></script>
<script src="/docs/4.5/assets/js/vendor/bs-custom-file-input.min.js"></script>
<script src="/docs/4.5/assets/js/src/application.js"></script>
<script src="/docs/4.5/assets/js/src/search.js"></script>
<script src="/docs/4.5/assets/js/src/ie-emulation-modes-warning.js"></script>
</body>
</html>