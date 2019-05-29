@include('layouts.head')
<title>パスワードリセット | やいまクイズ</title>
</head>

<body>
	<main class="l-form">
		<form method="POST" action="{{ route('password.email') }}" class="form">
			@csrf

			<div class="form-heading">
				<h1>パスワードをお忘れですか？</h1>
				<p>登録したメールアドレスを入力しパスワードをリセットします。</p>
			</div>

			<div class="form-group">
				<input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email">
				@if($errors->has('email'))
				<span class="error_msg">{{ $errors->first('email') }}</span>
				@endif
			</div>
			<button type="submit" class="btn btn-default btn-large">パスワードをリセット</button>
			<a href="/" class="form-back_message">TOPへ　→</a>
		</form>

	</main>
</body>

</html>