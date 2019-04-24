<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
  <title>Login | 八重山クイズ</title>
</head>

<body>
  <main class="l-form">
    <form method="POST" action="{{ route('login') }}" class="form">
      @csrf

      <div class="form-heading">
        <h1>Login</h1>
        <p>ログインして八重山に関するクイズを作成してみよう。</p>
      </div>

      <div class="form-group">
        <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
        @if($errors->has('email'))
        <span>{{ $errors->first('email') }}</span>
        @endif
      </div>
      <div class="form-group">
        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password(6文字)" required>
        @if($errors->has('password'))
        <span>{{ $errors->first('password') }}</span>
        @endif
      </div>
      <button type="submit" class="btn btn-default btn-large">Login</button>
      <div class="form-message_list">
        <div class="form-check">
          <input type="checkbox" class="form-check-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
          <label class="form-check-label">次回から自動ログインする</label>
        </div>
        <a href="{{ route('password.request') }}" class="form-message">パスワードをお忘れですか？</a>
      </div>
      <p class="title-border">or</p>
      <div class="l-sns_list">
        <img src="{{asset('/images/twitter-icon.png')}}" alt="twitter-icon">
        <img src="{{asset('/images/facebook-icon.png')}}" alt="facebook-icon">
        <img src="{{asset('/images/google-icon.png')}}" alt="google-icon">
      </div>
      <a href="/quiz" class="form-back_message">TOPへ　→</a>
    </form>

  </main>
  <!-- footer -->
  <footer id="footer">
    Copyright <a href="https://yonaguni-media.com" target="_blank">どなんメディア</a>.
  </footer>

</body>

</html>