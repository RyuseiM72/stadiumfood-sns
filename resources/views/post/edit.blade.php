<h1>編集ページ</h1>
<form method="POST" action="{{route('post.update',['id' => $post->id])}}" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="title">タイトル</label>
        <input type="text" name="title" value="{{$post->title}}">
    </div>
        @error('title')
        {{$message}}
        @enderror
    
    <div>
        <input type="file" name="image" value="{{$post->image}}">
        <button>画像をアップロード</button>
    </div>
        @error('image')
        {{$message}}
        @enderror
    
    <div>
        <label for="description">詳細</label>
        <textarea name="description" rows="5">{{$post->description}}</textarea>
    </div>
        @error('description')
        {{$message}}
        @enderror
    
        <button type="submit">投稿を保存</button>
</form>
