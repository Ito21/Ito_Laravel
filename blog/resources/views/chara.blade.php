
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
        <h1 class="logo_chara">FIRE EMBLEM<br>Heroes<br>キャラ</h1>
        </select>
        <table border="1" align="center">
            <tr>
                <th class='c_name'>名前</th>
                <th class='c_table'>ＨＰ</th>
                <th class='c_table'>攻撃</th>
                <th class='c_table'>速さ</th>
                <th class='c_table'>守備</th>
                <th class='c_table'>魔防</th>
                <th class='c_table'>合計</th>
                <th class='c_table'>武器種</th>
                <th class='c_table'>兵種</th>
            </tr>
            @foreach ($charas as $chara)
                <tr>
                    <td><h3><a href="/data/chara/{{ $chara->id }}">{{ $chara->name }}</a></td>
                    <td><p class='c_hp'>{{ $chara->hp }}</p></td>
                    <td><p class='c_atk'>{{ $chara->atk }}</p></td>
                    <td><p class='c_spd'>{{ $chara->spd }}</p></td>
                    <td><p class='c_def'>{{ $chara->def }}</p></td>
                    <td><p class='c_res'>{{ $chara->res }}</p></td>
                    <td><p class='c_status'>{{ $chara->status }}</p></td>
                    <td>
                        <p class='c_type_1'>
                            <?php
                                if ( $chara->type_1 == 1) {
                                    ?> 剣 <?php ;
                                }
                            ?>
                            <?php
                                if ( $chara->type_1 == 2) {
                                    ?> 槍 <?php ;
                                }
                            ?>
                            <?php
                                if ( $chara->type_1 == 3) {
                                    ?> 斧 <?php ;
                                }
                            ?>
                            <?php
                                if ( $chara->type_1 == 4) {
                                    ?> 杖 <?php ;
                                }
                            ?>
                            <?php
                                if ( $chara->type_1 == 5) {
                                    ?> 赤竜 <?php ;
                                }
                            ?>
                            <?php
                                if ( $chara->type_1 == 6) {
                                    ?> 青竜 <?php ;
                                }
                            ?>
                            <?php
                                if ( $chara->type_1 == 7) {
                                    ?> 緑竜 <?php ;
                                }
                            ?>
                            <?php
                                if ( $chara->type_1 == 8) {
                                    ?> 白竜 <?php ;
                                }
                            ?>
                            <?php
                                if ( $chara->type_1 == 9) {
                                    ?> 赤魔法 <?php ;
                                }
                            ?>
                            <?php
                                if ( $chara->type_1 == 10) {
                                    ?> 青魔法 <?php ;
                                }
                            ?>
                            <?php
                                if ( $chara->type_1 == 11) {
                                    ?> 緑魔法 <?php ;
                                }
                            ?>
                            <?php
                                if ( $chara->type_1 == 12) {
                                    ?> 白魔法 <?php ;
                                }
                            ?>
                            <?php
                                if ( $chara->type_1 == 13) {
                                    ?> 赤弓 <?php ;
                                }
                            ?>
                            <?php
                                if ( $chara->type_1 == 14) {
                                    ?> 青弓 <?php ;
                                }
                            ?>
                            <?php
                                if ( $chara->type_1 == 15) {
                                    ?> 緑弓 <?php ;
                                }
                            ?>
                            <?php
                                if ( $chara->type_1 == 16) {
                                    ?> 白弓 <?php ;
                                }
                            ?>
                            <?php
                                if ( $chara->type_1 == 17) {
                                    ?> 赤暗器 <?php ;
                                }
                            ?>
                            <?php
                                if ( $chara->type_1 == 18) {
                                    ?> 青暗器 <?php ;
                                }
                            ?>
                            <?php
                                if ( $chara->type_1 == 19) {
                                    ?> 緑暗器 <?php ;
                                }
                            ?>
                            <?php
                                if ( $chara->type_1 == 20) {
                                    ?> 白暗器 <?php ;
                                }
                            ?>
                            <?php
                                if ( $chara->type_1 == 21) {
                                    ?> 赤獣 <?php ;
                                }
                            ?>
                            <?php
                                if ( $chara->type_1 == 22) {
                                    ?> 青獣 <?php ;
                                }
                            ?>
                            <?php
                                if ( $chara->type_1 == 23) {
                                    ?> 緑獣 <?php ;
                                }
                            ?>
                            <?php
                                if ( $chara->type_1 == 24) {
                                    ?> 白獣 <?php ;
                                }
                            ?>
                        </p>
                    </td>
                    <td>
                        <p class='c_type_2'>
                            <?php
                                if ( $chara->type_2 == 1) {
                                    ?> 歩行 <?php ;
                                }
                            ?>
                            <?php
                                if ( $chara->type_2 == 2) {
                                    ?> 騎馬 <?php ;
                                }
                            ?>
                            <?php
                                if ( $chara->type_2 == 3) {
                                    ?> 飛行 <?php ;
                                }
                            ?>
                            <?php
                                if ( $chara->type_2 == 4) {
                                    ?> 重装 <?php ;
                                }
                            ?>
                        </p>
                    </td>
                </tr>
            @endforeach
        </table>
        <h1 links>
            {{ $charas->links() }}
        </h1>
        <style>
            h1.logo_chara {
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
            table {
                font-weight:normal;
                text-align: center;
                background-color: #ffffff;
            }
            th.c_table {
                width: 50px;
            }
            th.c_name {
                width: 250px;
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
        </style>
    </body>
</html>