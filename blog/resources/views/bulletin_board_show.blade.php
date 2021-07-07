
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
        <HR SIZE="2", color="000000">
        <h2 class="bb">
            <p class='bulletin_board_id'>掲示板番号：{{ $bulletin_board->id }}</p>
            <p class='bulletin_board_title'>{{ $bulletin_board->title }}</p>
            <p class='user_name'>作成者 {{ $bulletin_board->user->name }}</p>
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
        </h2>
        <HR SIZE="2", color="000000">
        </br>
        <h3 class="bb">
            <p class='bulletin_board_comment'>{{ $bulletin_board->comment }}</p>
        </h3>
        </br>
        <HR SIZE="2", color="000000">
        <h2 class="bb">
            <p class='bb_comments'>コメント {{ $bulletin_board->reply_number }}件</p>
        </h2>
            @foreach ($bb_replies as $bb_reply)
                <div class="bb_reply">
                    <h2>
                    <p class='user_number'>{{ $bb_reply->number }}</p>
                    <p class='user_name'>{{ $bb_reply->user->name }}</p>
                    </h2>
                    <p class='user_comment'>{{ $bb_reply->comment }}</p>
                </div>
                </br>
            @endforeach
        <h1 links>
            {{ $bb_replies->links() }}
        </h1>
        </br>
        <HR SIZE="2", color="000000">
        <h3>
        <?php
            if (is_null(Auth::user())) {
                ?> コメントの投稿にはログインが必要です。 <?php ;
            }else {
                ?> 
                    <form action="/bb_replies" method="POST">
                        @csrf
                        <input type="hidden" name="bb_reply[bulletin_board_id]" value='{{ $bulletin_board->id }}'>
                        <div class="body">
                            <h2>コメントの内容</h2>
                            <textarea name="bb_reply[comment]" placeholder="よろしくお願いします。">{{ old('bb_reply.comment') }}</textarea>
                            <p class="comment__error" style="color:red">{{ $errors->first('bb_reply.comment') }}</p>
                        </div>
                        <input type="hidden" name="bb_reply[user_id]" value='{{ Auth::user()->id }}'>
                        <input type="hidden" name="bb_reply[number]" value=' <?php echo $bulletin_board->reply_number + 1 ?> '>
                        <h2>入力完了後に投稿ボタンを押してください。</h2>
                        <input type="submit" value="投稿"/>
                    </form>
                <?php ;
            }
        ?>
        </h3>
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
            h2.bb {
                text-align:center;
                font-weight:normal;
                display:block;
                line-height:1;
                letter-spacing:1px;
            }
            h3.bb {
                text-align:center;
                font-weight:normal;
                display:block;
                line-height:1;
                letter-spacing:1px;
            }
            div.bb_reply {
                text-align:center;
                font-weight:normal;
                background-color:#4682b4;
                border-color:#000080;
                border-style:solid;
                border-width:5px;
                display:block;
                line-height:1;
                letter-spacing:1px;
                width: 500px;
            }
        </style>
    </body>
</html>