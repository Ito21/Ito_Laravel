
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
                    <li><a href="/post">Blog</a></li>
                    <li><a href="/welcome">welcome</a></li>
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
        <h1 class="logo">FIRE EMBLEM<br>Heroes<br>情報共有サイト</h1>
        <style>
            h1.logo {
                padding:0px;
                text-align:center;
                font-weight:normal;
                color:#ffd700;
                display:block;
                font-size:100px;
                line-height:1;
                letter-spacing:1px;
                text-shadow:1px 1px 3px #808080, -1px 1px 3px #ccc, 1px -1px 3px #ccc, -1px -1px 3px #ccc;
            }
            body {
                color: #000000;
                background-color: #6495ed;
            }
        </style>
    </body>
</html>