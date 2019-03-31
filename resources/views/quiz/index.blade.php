<!DOCTYPE html>
<html lang="ja">
	<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#>
		<meta charset="utf-8">
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

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

		<title>クイズ</title>
	</head>
	<body>
		<!-- header -->
		<header>
			<h1><a href="">八重山クイズ</a></h1>
			<div class="sp-menu js-toggle-nav">
				<span></span>
				<span></span>
				<span></span>
			</div>

			<nav class="top-nav">
				<ul>
					<li><a href="#" id="food">食べ物</a></li>
					<li><a href="#" id="creature">生物</a></li>
					<li><a href="#" id="history">文化・歴史</a></li>
					<li><a href="#" id="knowledge">雑学</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" href="#" id="region" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							地域
						</a>
						<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="region">
							<li><a class="dropdown-item" href="#" id="island1">石垣島</a></li>
							<li><a class="dropdown-item" href="#" id="island2">与那国島</a>	</li>
							<li><a class="dropdown-item" href="#" id="island3">小浜島</a></li>
							<li><a class="dropdown-item" href="#" id="island4">西表島</a></li>
							<li><a class="dropdown-item" href="#" id="island3">小浜島</a></li>
							<li><a class="dropdown-item" href="#" id="island4">西表島</a></li>
							<li><a class="dropdown-item" href="#" id="island5">西表島</a></li>
							<li><a class="dropdown-item" href="#" id="island6">西表島</a></li>
							<li><a class="dropdown-item" href="#" id="island7">西表島</a></li>
							<li><a class="dropdown-item" href="#" id="island8">西表島</a></li>
							<li><a class="dropdown-item" href="#" id="island9">西表島</a></li>
							<li><a class="dropdown-item" href="#" id="island12">ラスト</a></li>
						</ul>
					</li>
					<li id="accordion-menu">
						<a data-toggle="collapse" href="#sp-region" aria-controls="sp-region" aria-expanded="false">
							地域
						</a>
						<ul id="sp-region" class="collapse" data-parent="#accordion-menu">
							<li><a href="#" id="island1">石垣島</a></li>
							<li><a href="#" id="island2">与那国島</a>	</li>
							<li><a href="#" id="island3">小浜島</a></li>
							<li><a href="#" id="island4">西表島</a></li>
							<li><a href="#" id="island5">西表島</a></li>
							<li><a href="#" id="island6">西表島</a></li>
							<li><a href="#" id="island7">西表島</a></li>
							<li><a href="#" id="island8">西表島</a></li>
							<li><a href="#" id="island9">西表島</a></li>
							<li><a href="#" id="island10">西表島</a></li>
							<li><a href="#" id="island11">西表島</a></li>
							<li><a href="#" id="island12">ラスト</a></li>
						</ul>
					</li>
					<li><a href="#" id="all">すべて</a></li>
				</ul>
			</nav>
		</header>

		<!-- main -->
		<div id="app">
			<quiz/>
		</div>
		{{--<main id="quiz" class="cantainer">--}}
			{{--<article id="question">--}}
				{{--<section>--}}
					{{--<div id="app">--}}
						{{--<quiz test = "kanakana"></quiz>--}}
					{{--</div>--}}
					{{--@foreach($quizzes as $one_quiz)--}}
					{{--<h1>問題 {{ $one_quiz -> title }}</h1>--}}
					{{--@endforeach--}}
					{{--<div v-if="showQuestion">--}}
						{{--<div class="img-wrap">--}}
							{{--<img src="{{ asset('image/uma.jpg')}}">--}}
						{{--</div>--}}
						{{--<div id="answer-choices">--}}
							{{--<ul>--}}
								{{--<li v-for="choice in choices" @click="showAnswer()">--}}
									{{--@{{ choice.message }}--}}
								{{--</li>--}}
							{{--</ul>--}}
						{{--</div>--}}
					{{--</div>--}}

					{{--<div id="explain" v-if="showExplain">--}}
						{{--<h2><i class="far fa-circle mr-4"></i>正解！</h2>--}}
						{{--<!-- <h2><i class="fas fa-times mr-4"></i></i>不正解</h2> -->--}}
						{{--<p><strong>解説：</strong>カジキ祭りの醍醐味の一つはなんといってもカジキの丸焼き！体長2m超、重さ100kgものカジキマグロを実質食べ放題で召し上がることができます。中までじっくり蒸し焼きにするため6時間以上もかかるんだとか！！（すごい）</p>--}}
						{{--<button @click="next()" type="button" class="btn btn-primary rounded-pill btn-block">@{{btnname}}</button>--}}
					{{--</div>--}}
				{{--</section>--}}
			{{--</article>--}}
			{{--<article id="result" v-if="showResult">--}}
				{{--<section>--}}
					{{--<h1>クイズ結果</h1>--}}
					{{--<p>3問正解！</p>--}}
					{{--<div class="container">--}}
						{{--<div class="row">--}}
							{{--<div class="col-md-5 offset-md-1">--}}
								{{--<button @click="start()" type="button" class="btn btn-primary rounded-pill btn-block">リトライ</button>--}}
							{{--</div>--}}
							{{--<div class="col-md-5">--}}
								{{--<button type="button" class="btn btn-primary rounded-pill btn-block"><i class="fab fa-twitter fa-lg mr-3"></i>ツイート</button>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</section>--}}
			{{--</article>--}}

		{{--</main>--}}

		<!-- footer -->
		<footer id="footer">
			Copyright <a href="https://yonaguni-media.com" target="_blank">どなんメディア</a>.
		</footer>

		<!-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0/dist/vue.min.js"></script> -->
		<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0/dist/vue.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<script src=" {{ mix('js/app.js') }} "></script>
		<script type="text/javascript" src="{{ asset('js/footerFixed.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/quizView.js') }}"></script>
	</body>
</html>
