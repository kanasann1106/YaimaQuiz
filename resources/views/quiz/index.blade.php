<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>八重山クイズ</title>
</head>

<body>
  <!-- header -->
  <header>
    <h1><a href="/">八重山クイズ</a></h1>
    <div class="sp-menu js-toggle-nav">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <nav class="top-nav">
      <ul>
        <li><a href="#">登録</a></li>
        <li><a href="#">ログイン</a></li>
      </ul>
    </nav>
  </header>
  <main class="container l-default">
    <section class="l-section section-top">
      <div class="top-message">
        クイズを解いて、作って八重山について知ろう。
      </div>
      <div class="top-link">
        <a href="/quiz">クイズに挑戦</a>
      </div>
    </section>
    <section class="l-section">
      <div class="row">
        <div class="col-6 border-right">
          <h2 class="section-title title-center">八重山ってなぁに？</h2>
          <article class="section-message">
            「八重山（やえやま）」は沖縄の南西に位置する離島をひとまとめに八重山諸島のことを指します。<br>
            沖縄本島とはまた違った独特な文化を持っており12個の島からなる八重山諸島の一つ一つの島も独自のです。
          </article>
        </div>
        <div class="col-6">
          <img class="img-map" src="" alt="八重山諸島の地図">
        </div>
      </div>
    </section>
    <section class="l-section">
      <h2 class="section-title title-center">お知らせ</h2>
      <ul class="news-list">
        <li class="news-item"><time>2019.05.07</time>八重山クイズver1リリースしました。</li>
        <li class="news-item"><time>2019.05.07</time>八重山クイズver1リリース</li>
        <li class="news-item"><time>2019.05.07</time>八重山クイズver1リリース</li>
      </ul>
    </section>
  </main>
  <!-- footer -->
  <footer id="footer">
    Copyright <a href="https://yonaguni-media.com" target="_blank">どなんメディア</a>.
  </footer>
  <script src=" {{ mix('js/app.js') }} "></script>
</body>

</html>