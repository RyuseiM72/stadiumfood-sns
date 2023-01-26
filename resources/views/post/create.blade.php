<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>新規投稿</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<div class="container">
    <form method="POST" action="{{route('post.store')}}" enctype="multipart/form-data">
    @csrf
    <h1>新規投稿</h1>
        <div class="mb-2">
            <label class="form-label" for="title">タイトル</label>
            <input class="form-control" type="text" name="title" value="{{old("image")}}">
                @error('title')
                {{$message}}
                @enderror
        </div>
        <div class="mb-2">
            <label class="form-label" for="image" accept="image/png,image/jpeg,image/jpg">ファイルを選択</label>
            <input class="form-control" type="file" name="image" value="{{old("image")}}">
                @error('image')
                {{$message}}
                @enderror
        </div>
        <div class="mb-2">
            <label class="form-label" for="description">詳細</label>
            <input class="form-control" type="text" name="description" value="{{old("description")}}">
                @error('description')
                {{$message}}
                @enderror
        </div>
            <button type="submit" class="btn btn-primary">投稿する</button>
    </form>
</div>
