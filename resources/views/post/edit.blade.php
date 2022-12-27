<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>編集</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<div class="container">
    <form method="POST" action="{{route('post.update',['id' => $post->id])}}" enctype="multipart/form-data">
    @csrf
    <h1>投稿編集</h1>
        <div class="mb-2">
            <label class="form-label" for="title">タイトル</label>
            <input class="form-control" type="text" name="title" value="{{$post->title}}">
                @error('title')
                {{$message}}
                @enderror
        </div>
        <div class="mb-2">
            <label class="form-label" for="image" accept="image/png,image/jpeg,image/jpg">ファイルを選択</label>
            <input class="form-control" type="file" name="image" value="{{$post->image}}">
                @error('image')
                {{$message}}
                @enderror
        </div>
        <div class="mb-2">
            <label class="form-label" for="description">詳細</label>
            <input class="form-control" type="text" name="description" value="{{$post->description}}">
                @error('description')
                {{$message}}
                @enderror
        </div>
        <button type="submit" class="btn btn-primary">更新</button>
    </form>
</div>
