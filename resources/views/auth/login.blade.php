<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
  <title>Login | 八重山クイズ</title>
</head>

<body>
  <!-- header -->
  <!-- <header>
    <h1><a href="/quiz">八重山クイズ</a></h1>
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
            <li><a class="dropdown-item" href="#" id="island2">与那国島</a> </li>
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
            <li><a href="#" id="island2">与那国島</a> </li>
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
  </header> -->
  <main class="l-form">
    <form action="" class="form">
      <div class="form-heading">
        <h1>Login</h1>
        <p>ログインして八重山に関するクイズを作成してみよう。</p>
      </div>

      <div class="form-group">
        <input type="text" class="form-control" placeholder="Email" />
        <small></small>
      </div>
      <div class="form-group">
        <input type="password" class="form-control" placeholder="Password(6文字)">
        <small class="error_msg">半角英数字6文字で入力してください</small>
      </div>
      <button type="submit" class="btn btn-default btn-large">Login</button>
      <div class="form-message_list">
        <div class="form-check">
          <input type="checkbox" class="form-check-input">
          <label class="form-check-label">次回から自動ログインする</label>
        </div>
        <a href="" class="form-message">パスワードをお忘れですか？</a>
      </div>
      <div class="l-sns_list">
        <img src="{{asset('/images/twitter-icon.png')}}" alt="twitter-icon">
        <img src="{{asset('/images/facebook-icon.png')}}" alt="facebook-icon">
        <img src="{{asset('/images/google-icon.png')}}" alt="google-icon">
      </div>
      <a href="/quiz" class="form-back_message">TOPへ　→</a>
    </form>

  </main>
  <!-- footer -->
  <!-- <footer id="footer">
    Copyright <a href="https://yonaguni-media.com" target="_blank">どなんメディア</a>.
  </footer> -->

  <script src=" {{ mix('js/app.js') }} "></script>
  <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</body>

</html>