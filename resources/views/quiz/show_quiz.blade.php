@include('layouts.head')

<title>やいまクイズ</title>
</head>

<body>
	<quiz-header id="quiz-header"></quiz-header>
	<quiz-contents id="quiz-contents"></quiz-contents>

	<footer class="l-footer">
		Copyright© <a href="https://yonaguni-media.com" target="_blank">どなんメディア</a>.
	</footer>
	<script src=" {{ mix('js/app.js') }} "></script>
</body>

</html>