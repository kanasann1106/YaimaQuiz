@include('layouts.head')

<title>八重山クイズ</title>
</head>

<body>
	<div class="wrapper">
		<!-- header -->
		<div id="header-contents">
			<quiz-header />
		</div>
		<!-- main -->
		<div id="quiz-contents">
			<quiz />
		</div>
		<!-- footer -->
		<footer id="footer" style="position: fixed;">
			Copyright <a href="https://yonaguni-media.com" target="_blank">どなんメディア</a>.
		</footer>
	</div>
	<script src=" {{ mix('js/app.js') }} "></script>
</body>

</html>