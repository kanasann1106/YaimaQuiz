@include('layouts.head')
<title>Login | やいまクイズ</title>
</head>

<body>
  <main class="l-section l-section--vh">
    <form method="POST" action="{{ route('login') }}" class="form">
      @csrf

      <div class="form-heading">
        <h1>Login</h1>
        <p>ログインして八重山に関するクイズを作成してみよう。</p>
      </div>

      <div class="form-group">
        <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email">
        @if($errors->has('email'))
        <span class="error_msg">{{ $errors->first('email') }}</span>
        @endif
      </div>
      <div class="form-group">
        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password(6文字)">
        @if($errors->has('password'))
        <span class="error_msg">{{ $errors->first('password') }}</span>
        @endif
      </div>
      <button type="submit" class="btn btn-default btn-large">Login</button>
      <div class="form-message_list">
        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
            次回から自動ログインする
          </label>
        </div>
        <a href="{{ route('password.request') }}" class="form-message">パスワードをお忘れですか？</a>
      </div>
      <!-- <p class="p-contents__title p-contents__title--border">or</p>
      <div class="l-section p-sns__list">
        <img src="{{asset('/images/twitter-icon.png')}}" alt="twitter-icon">
        <img src="{{asset('/images/facebook-icon.png')}}" alt="facebook-icon">
        <img src="{{asset('/images/google-icon.png')}}" alt="google-icon">
      </div> -->
      <a href="/" class="form-back_message">TOPへ　→</a>
    </form>

  </main>
</body>

</html>