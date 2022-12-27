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
    <form method="POST" action="{{route('user.update',['id' => $user->id])}}">
    @csrf
        <h1>投稿編集</h1>
            <div class="mb-2">
                <label class="form-label" for="name">ユーザネーム</label>
                <input class="form-control" type="text" name="name" value="{{$user->name}}">
                @error('name')
                {{$message}}
                @enderror
            </div>
        <button type="submit" class="btn btn-primary">更新</button>
    </form>
</div>