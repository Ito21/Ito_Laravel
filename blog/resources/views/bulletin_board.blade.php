
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <ul class="ddmenu">
            <li><a href="/">ホーム</a></li>
            <li><a href="{{ route('register') }}">アカウント</a>
                <ul>
                    <li><a href="{{ route('login') }}">ログイン</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a></li>
                    <li><a href="#">プロフィール</a></li>
                </ul>
            </li>
            <li><a href="/bulletin_board">掲示板</a>
                <ul>
                    <li><a href="#">雑談掲示板</a></li>
                    <li><a href="#">質問掲示板</a></li>
                    <li><a href="#">その他掲示板</a></li>
                </ul>
            </li>
            <li><a href="#">データ</a>
                <ul>
                    <li><a href="/data/chara">キャラ</a></li>
                    <li><a href="#">武器(準備中)</a></li>
                    <li><a href="#">スキル(準備中)</a></li>
                </ul>
            </li>
            <li><a href="#">構成(準備中)</a>
                <ul>
                    <li><a href="#">構成一覧(準備中)</a></li>
                    <li><a href="#">構成投稿(準備中)</a></li>
                </ul>
            </li>
            <li><a href="#">その他</a>
                <ul>
                    <li><a href="#">検索機能(準備中)</a></li>
                    <li><a href="#">各機能説明(準備中)</a></li>
                </ul>
            </li>
        </ul>
        <style>
            ul.ddmenu {
                margin: 0px;
                padding: 0px 0px 0px 15px;
                background-color: #191970;
            }
            ul.ddmenu li {
                width: 16%;
                display: inline-block;
                list-style-type: none;
                position: relative;
            }
            ul.ddmenu a {
                background-color: #191970;
                color: white;
                line-height: 40px;
                text-align: center;
                text-decoration: none;
                font-weight: bold;
                display: block;
            }
            ul.ddmenu a:hover {
                background-color: #4169e1;
                color: #191970;
            }
            ul.ddmenu ul {
                display: none;  
            }
            ul.ddmenu ul {
                display: none;
                margin: 0px;
                padding: 0px;
                position: absolute;
            }
            ul.ddmenu li:hover ul {
                display: block;
            }
            ul.ddmenu ul li {
                width: 100%;
                border-top: 1px solid blue;
            }
                ul.ddmenu ul li a {
                line-height: 35px;
                text-align: left;
                padding-left: 5px;
                font-weight: normal;
            }
            ul.ddmenu ul li a:hover {
                background-color: #ffff80;
                color: #005500;
            }
        </style>
        <meta charset="utf-8">
        <title>FEH情報共有サイト</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="logo_bulletin_board">FIRE EMBLEM<br>Heroes<br>掲示板</h1>
            <h2>掲示板作成は<a href='/bulletin_board/create'>こちら</a>(ログイン中のみ使用可能)</h2>
            @foreach ($bulletin_boards as $bulletin_board)
                <h3 class="bb">
                <p class='user_name'>{{ $bulletin_board->user->id }}</p>
                    <a href="/bulletin_board/{{ $bulletin_board->id }}">{{ $bulletin_board->title }}</a>
                    <p class='user_name'>作成者 {{ $bulletin_board->user->name }}</p>
                    <p class='reply_number'>コメント {{ $bulletin_board->reply_number }}件</p>
                        <p class='bb_type'>種類：
                        <?php
                            if ( $bulletin_board->type == 1) {
                                ?> 雑談 <?php ;
                            }
                        ?>
                        <?php
                            if ( $bulletin_board->type == 2) {
                                ?> 質問 <?php ;
                            }
                        ?>
                        <?php
                            if ( $bulletin_board->type == 3) {
                                ?> その他 <?php ;
                            }
                        ?>
                    </p>
                </h3>
                </br>
            @endforeach
        <h1 links>
            {{ $bulletin_boards->links() }}
        </h1>
        <style>
            h1.logo_bulletin_board {
                padding:0px;
                text-align:center;
                font-weight:normal;
                color:#ffd700;
                display:block;
                font-size:60px;
                line-height:1;
                letter-spacing:1px;
                text-shadow:1px 1px 3px #808080, -1px 1px 3px #ccc, 1px -1px 3px #ccc, -1px -1px 3px #ccc;
            }
            body {
                color: #000000;
                background-color: #6495ed;
            }
            .pagination {
                display: inline-block;
                list-style-type: none;
                text-decoration: none;
                letter-spacing: 10px;
                padding:2em;
                display:flex;
                justify-content:center;
            }
            h3.bb {
                text-align:center;
                font-weight:normal;
                background-color:#4682b4;
                display:block;
                line-height:1;
                letter-spacing:1px;
                width: 500px;
            }
        </style>
    </body>
</html>