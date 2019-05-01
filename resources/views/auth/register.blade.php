<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
  <title>ユーザー登録 | 八重山クイズ</title>
</head>

<body>
  <main class="l-form">
    <form method="POST" action="{{ route('register') }}" class="form">
      @csrf

      <div class="form-heading">
        <h1>ユーザー登録</h1>
        <p>ユーザー登録し八重山に関するクイズを作成してみよう。</p>
      </div>

      <div class="form-group">
        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="E-mail" required>
        @if($errors->has('email'))
        <span class="error_msg">{{ $errors->first('email') }}</span>
        @endif
      </div>
      <div class="form-group">
        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password(6文字)" required>
        @if($errors->has('password'))
        <span class="error_msg">{{ $errors->first('password') }}</span>
        @endif
      </div>
      <div class="form-group">
        <input type="password" class="form-control" name="password_confirmation" placeholder="Password再入力(6文字)" required>
      </div>
      <button type="submit" class="btn btn-default btn-large">Sign up</button>
      <div>
        <a href="/quiz" class="form-back_message">TOPへ　→</a>
      </div>
    </form>

  </main>
  <!-- footer -->
  <footer id="footer">
    Copyright <a href="https://yonaguni-media.com" target="_blank">どなんメディア</a>.
  </footer>
</body>

</html>