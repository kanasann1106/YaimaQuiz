@include('layouts.head')

<title>@yield('title') | やいまクイズ</title>
</head>

<body>
  <!-- header -->
  <header class="l-header">
    <div class="p-logo"><a href="/">やいまクイズ</a></div>
    <div class="c-menu-button js-toggle-nav">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <nav class="c-top-nav">
      <ul class="c-top-nav__list">
        <li><a href="/quiz">クイズに挑戦</a></li>
        <li><a href="/mypage/create">クイズ作成</a></li>
        <li><a href="/mypage"><i class="fas fa-home mr-2"></i>HOME</a></li>
        <li><a href="/mypage/setting"><i class="fas fa-user-cog mr-2"></i>設定</a></li>
        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">ログアウト</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </ul>
    </nav>
  </header>

  <main>
    @yield('content')
  </main>

  <!-- footer -->
  <footer class="l-footer">
    Copyright© <a href="https://yonaguni-media.com" target="_blank">どなんメディア</a>.
  </footer>
  <script src=" {{ mix('js/app.js') }} "></script>
</body>

</html>