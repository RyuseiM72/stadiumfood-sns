<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REGISTER</title>
 
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!-- Animate.css CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Sawarabi Gothic -->
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Gothic" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="build/css/signin.css" rel="stylesheet">
</head>
<body class="text-center login">
    <main class="form-signin shadow bg-white rounded">
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1 class="mb-5">Delicious Stadium</h1>
            
            <!-- Name -->
            <div class="form-floating">
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" placeholder="ニックネーム" required autofocus />
                <x-input-label for="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            
            <!-- Email Address -->
            <div class="form-floating">
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="メールアドレス" required />
                <x-input-label for="email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            
            <!-- Password -->
            <div class="form-floating">
                <x-text-input id="password" class="block mt-1 w-full" placeholder="パスワード" 
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                <x-input-label for="password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            
            <!-- Confirm Password -->
            <div class="form-floating">
                <x-input-label for="password_confirmation" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full" placeholder="パスワード確認"
                                type="password"
                                name="password_confirmation" required />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
    
            <button class="btn btn-lg btn-primary" type="submit"><i class="fas fa-sign-in-alt"></i>登録</button>
            
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('登録済みですか?') }}
                </a>
            </div>
            
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
