@include('layouts.head')

<title>やいまクイズ</title>
</head>

<body>
	<!-- header -->
	<div id="header-contents">
		<quiz-header />
	</div>
	<!-- main -->
	<div id="quiz-contents">
		<quiz />
	</div>
	<!-- footer -->
	<footer class="l-footer">
		Copyright© <a href="https://yonaguni-media.com" target="_blank">どなんメディア</a>.
	</footer>
	<script src=" {{ mix('js/app.js') }} "></script>
</body>

</html>