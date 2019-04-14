<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#>
		<meta charset=" utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta property="og:site_name" content="" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="">
	<meta property="og:description" content="">
	<meta property="og:url" content="">
	<meta property="og:image" content="">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

	<title>クイズ</title>
</head>

<body>
	<div class="l-wrapper">
		<!-- header -->
		<div id="header-contents">
			<quiz-header />
		</div>
		<!-- main -->
		<div id="quiz-contents">
			<quiz />
		</div>
		<!-- footer -->
		<footer id="footer">
			Copyright <a href="https://yonaguni-media.com" target="_blank">どなんメディア</a>.
		</footer>
	</div>
	<script src=" {{ mix('js/app.js') }} "></script>
</body>

</html>