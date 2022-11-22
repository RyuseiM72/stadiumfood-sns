<h1>投稿一覧</h1>
@foreach($post as $p)
<h1>タイトル</h1>
<p>{{$p->title}}</p>
<h1>画像</h1>
<p><img src="../../uploads/{{$p->image}}"alt=""></p>
<h1>詳細</h1>
<p>{{$p->description}}</p>
@endforeach
