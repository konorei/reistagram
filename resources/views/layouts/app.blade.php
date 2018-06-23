<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reistagram</title>
    <link rel="stylesheet" href="/css/index.css">
  </head>

  <body>
    <header class="header">
      <div class="header__bar row">
        <h1 class="grid-6"><a href="/index">Reistagram</a></h1>
        @if (Auth::check())
          <div class="user_nav grid-6">
            <span>
              {{ Auth::user()->name }}
              <ul class="user__info">
                <li>
                  <a href="/users/{{ Auth::user()->id }}">マイページ</a>
                  <a href="{{ route('logout') }}">ログアウト</a>
                </li>
              </ul>
            </span>
            <a class="post" href="/tweets/create">投稿する</a>
          </div>
        @else
          <div class="grid-6">
            <a href="/login" class="post">ログイン</a>
            <a href="/register" class="post">新規登録</a>
          </div>
        @endif
      </div>
    </header>

    @yield('content')
  </body>
</html>