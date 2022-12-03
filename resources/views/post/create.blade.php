<x-app-layout>

<h1>新規投稿</h1>
<form method="POST" action="{{route('post.store')}}" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="title">タイトル</label>
        <input type="text" name="title" value="{{old("title")}}">
    </div>
        @error('title')
        {{$message}}
        @enderror
    
    <div>
        <input type="file" name="image">
    </div>
        @error('image')
        {{$message}}
        @enderror
    
    <div>
        <label for="description">詳細</label>
        <textarea name="description" rows="5">{{old('description')}}</textarea>
    </div>
        @error('description')
        {{$message}}
        @enderror
    
        <button type="submit">投稿を保存</button>
</form>

</x-app-layout>