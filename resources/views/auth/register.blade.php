@include('layouts.head')
<title>ユーザー登録 | やいまクイズ</title>
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
        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="E-mail">
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
      <div class="form-group">
        <input type="password" class="form-control" name="password_confirmation" placeholder="Password再入力(6文字)">
      </div>
      <button type="submit" class="btn btn-default btn-large">Sign up</button>
      <div>
        <a href="/" class="form-back_message">TOPへ　→</a>
      </div>
    </form>

  </main>
</body>

</html>