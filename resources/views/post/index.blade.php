<h1>投稿一覧</h1>
@foreach($post as $p)
@if($p->user_id == Auth::id())
<a href="{{route('post.edit',['id' => $p->id])}}">編集</a>
@endif
<h1>タイトル</h1>
<p>{{$p->title}}</p>
<h1>画像</h1>
<p><img src="../../uploads/{{$p->image}}"alt=""></p>
<h1>詳細</h1>
<p>{{$p->description}}</p>
<hr>

@endforeach
