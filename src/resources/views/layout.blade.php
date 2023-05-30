<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('/style.css')  }}" >
        <title>@yield('title', 'TODO')</title>

    </head>
    <body>
        <header>
            <h1>TODOアプリ</h1>
            <nav>
                <ul>
                    <li><a href="/">トップ</a></li>
                    <li><a href="/create">新規TODO作成</a></li>
                </ul>
            </nav>
        </header>
        @yield('content')
    </body>
</html>
