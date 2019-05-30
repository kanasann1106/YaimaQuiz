@include('layouts.head')
<title>パスワードリセット | やいまクイズ</title>
</head>

<body>
	<main class="l-form">
		<form method="POST" action="{{ route('password.update') }}" class="form">
			@csrf

			<input type="hidden" name="token" value="{{ $token }}">

			<div class="form-heading">
				<h1>パスワード再設定</h1>
				<p>速かにパスワードの再設定をしてください。一定時間を過ぎると無効となります。</p>
			</div>

			<div class="form-group">
				<input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" placeholder="Email">
				@if($errors->has('email'))
				<span class="error_msg">{{ $errors->first('email') }}</span>
				@endif
			</div>
			<div class="form-group">
				<input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password(6文字)">
				@if($errors->has('email'))
				<span class="error_msg">{{ $errors->first('email') }}</span>
				@endif
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="password_confirmation" placeholder="Password再入力(6文字)">
			</div>

			<button type="submit" class="btn btn-default btn-large">パスワード再設定</button>
			<a href="/" class="form-back_message">TOPへ　→</a>
		</form>
	</main>
</body>

</html>