<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title') | 八重山クイズ</title>
</head>

<body>
  <!-- header -->
  <header>
    <h1><a href="/quiz">八重山クイズ</a></h1>
    <div class="sp-menu js-toggle-nav">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <nav class="top-nav">
      <ul>
        <li><a href="/quiz">クイズに挑戦</a></li>
        <li><a href="/quiz_posts/">クイズ一覧</a></li>
        <li><a href="/quiz_posts/create">クイズ作成</a></li>
        <li><a href="/home">マイページ</a></li>
        <li><a href="#">ログアウト</a></li>
      </ul>
    </nav>
  </header>
  <main class="l-form">
    @yield('content')
  </main>
  <!-- footer -->
  <footer id="footer">
    Copyright <a href="https://yonaguni-media.com" target="_blank">どなんメディア</a>.
  </footer>
  <script src=" {{ mix('js/app.js') }} "></script>
</body>

</html>