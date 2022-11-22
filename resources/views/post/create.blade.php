<h1>新規投稿</h1>
<form method="POST" action="{{route('post.store')}}" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="title">タイトル</label>
        <input type="text" name="title" value="{{old("title")}}">
    </div>
    
    <div>
        <input type="file" name="image">
        <button>画像をアップロード</button>
    </div>
    
    <div>
        <label for="description">詳細</label>
        <textarea name="description" rows="5">{{old('description')}}</textarea>
    </div>
    
        <button type="submit">投稿を保存</button>
</form>
