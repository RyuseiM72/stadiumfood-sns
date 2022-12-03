<x-app-layout>

<h1>投稿一覧</h1>
@foreach($post as $p)
@if($p->user_id == Auth::id())
<a href="{{route('post.edit',['id' => $p->id])}}">編集</a>
@endif
<h1>タイトル</h1>
<p>{{$p->title}}</p>
<h1>画像</h1>
<a href="{{route('post.show',['id' => $p->id])}}">
<p><img src="../../uploads/{{$p->image}}"alt=""></p>
</a>
<h1>詳細</h1>
<p>{{$p->description}}</p>
<form action="{{route('post.delete',['id' => $p->id])}}" method="post">
    @csrf
    @method('DELETE')
    <button type="button" onclick="deletePost({{ $p->id }})">削除</button> 
</form>
@endforeach

<script>
    function deletePost(id) {
        'use strict'

        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
        }
    }
</script>

</x-app-layout>