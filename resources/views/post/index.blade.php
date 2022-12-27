<x-app-layout>

<h1>投稿一覧</h1>
@foreach($post as $p)

<a href="{{route('user.show',["id" => $p->user_id])}}">{{$p->name}}</a>
<h1>タイトル</h1>
<p>{{$p->title}}</p>
<h1>画像</h1>
<a href="{{route('post.show',['id' => $p->id])}}">
<p><img src="../../uploads/{{$p->image}}"alt=""></p>
</a>
<h1>詳細</h1>
<p>{{$p->description}}</p>

@if($p->user_id == Auth::id())
    <a href="{{route('post.edit',['id' => $p->id])}}" class="btn btn-sm btn-outline-secondary">編集</a>
    <form method="POST" action="{{route('post.destroy',['id'=>$p->id])}}">
    @csrf
    <button type="submit" class="btn btn-danger">削除</button>
@endif

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

@endforeach


</x-app-layout>
