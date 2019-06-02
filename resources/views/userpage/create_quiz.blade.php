@include('layouts.head')

<title>クイズ作成| やいまクイズ</title>
</head>

<body>
  <div>
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

    <main class="l-form">
      <form method="post" action="{{ url('mypage') }}" enctype="multipart/form-data" class="form">
        @csrf
        @method('POST')
        <div class="form-heading">
          <h1>クイズの作成</h1>
          <p>八重山についてのクイズを作成してみよう。</p>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-6">
              <label>カテゴリ<span class="attention">必須</span></label>
              <select class="form-control" id="category" name="category_id">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $category->id == old('category_id') ? 'selected' : '' }}>
                  {{ $category->name }}
                </option>
                @endforeach
              </select>
            </div>
            <div class="col-6">
              <label>地域<span class="attention">必須</span></label>
              <select class="form-control" id="region" name="region_id">
                @foreach($region as $island)
                <option value="{{ $island->id }}" {{ $island->id == old('region_id') ? 'selected' : '' }}>
                  {{ $island->name }}
                </option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label>問題文を入力<span class="attention">必須</span></label>
          <textarea cols="40" rows="3" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" placeholder="例）日本最西端の島はどこでしょう？">
          {{ old('title') }}
          </textarea>
          @if($errors->has('title'))
          <span class="invalid-feedback" role="alert">
            {{ $errors->first('title') }}
          </span>
          @endif
        </div>
        <div class="form-group">
          <label>選択肢を入力<span class="attention">必須</span></label>
          <span>注意</span>
          <p>・同じ内容の選択肢は入力しないでください。<br>
            ・クイズの回答は一番上に入力してください。<br>
            ・カテゴリで選択したことに関するクイズを投稿すること。</p>
          <!-- correct -->
          <input type="text" class="form-control{{ $errors->has('correct') ? ' is-invalid' : '' }}" name="correct" value="{{ old('correct') }}" placeholder="答え）与那国島">
          @if($errors->has('correct'))
          <span class="invalid-feedback" role="alert">
            {{ $errors->first('correct') }}
          </span>
          @endif
          <!-- uncorrect1 -->
          <input type="text" class="form-control{{ $errors->has('uncorrect1') ? ' is-invalid' : '' }} mt-2" name="uncorrect1" value="{{ old('uncorrect1') }}" placeholder="選択肢1）択捉島">
          @if($errors->has('uncorrect1'))
          <span class="invalid-feedback" role="alert">
            {{ $errors->first('uncorrect1') }}
          </span>
          @endif
          <!-- uncorrect2 -->
          <input type="text" class="form-control{{ $errors->has('uncorrect2') ? ' is-invalid' : '' }} mt-2" name="uncorrect2" value="{{ old('uncorrect2') }}" placeholder="選択肢2）沖ノ鳥島">
          @if($errors->has('uncorrect2'))
          <span class="invalid-feedback" role="alert">
            {{ $errors->first('uncorrect2') }}
          </span>
          @endif
        </div>
        <!-- image -->
        <div class="form-group form-image-area">
          <label>画像挿入</label>
          <div class="form-image js-area-drop">
            <i class="far fa-image fa-5x"></i>
            <input type="file" class="form-control-file{{ $errors->has('image_name') ? ' is-invalid' : '' }} input-file" name="image_name">
            <img class="prev-img" src="" style="@if(!(old('image_name'))) {{ 'display:none' }} @endif" alt="投稿画像">
          </div>
          @if($errors->has('image_name'))
          <span class="invalid-feedback" role="alert">
            {{ $errors->first('image_name') }}
          </span>
          @endif
        </div>
        <!-- explain -->
        <div class="form-group">
          <label>解説を入力<span class="attention">必須</span></label>
          <textarea cols="40" rows="3" class="form-control{{ $errors->has('explain_sentence') ? ' is-invalid' : '' }}" name="explain_sentence" value="{{ old('explain_sentence') }}" placeholder="解説）解説を書きます">
          {{ old('explain_sentence') }}
          </textarea>
          @if($errors->has('explain_sentence'))
          <span class="invalid-feedback" role="alert">
            {{ $errors->first('explain_sentence') }}
          </span>
          @endif
        </div>
        <button type="submit" class="btn btn-default btn-large">投稿</button>
      </form>
    </main>

    <!-- footer -->
    <footer id="footer">
      Copyright© <a href="https://yonaguni-media.com" target="_blank">どなんメディア</a>.
    </footer>
  </div>
  <script src=" {{ mix('js/app.js') }} "></script>
</body>

</html>