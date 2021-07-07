@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ログイン') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Eメールアドレス') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('ログイン状態を維持する') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ログイン') }}
                                </button>

                            </div>
                        </div>
                    </form>
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
                    <li><a href="#">ログアウト</a></li>
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
        <h3>初めての方は<a href="{{ route('register') }}">こちら</a></h3>
        <style>
            body {
                color: #000000;
                background-color: #6495ed;
            }
        </style>
    </body>
</html>