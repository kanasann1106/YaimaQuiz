@include('layouts.head')

<title>@yield('title') | やいまクイズ</title>
</head>

<body>
  <div class="wrapper">
    <!-- header -->
    <header>
      <h1><a href="/">やいまクイズ</a></h1>
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
  </div>
  <script src=" {{ mix('js/app.js') }} "></script>
</body>

</html>