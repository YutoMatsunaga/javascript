<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- タイトル（タブに表示される） -->
    <title>JavaScript</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- 独自のCSSを反映する -->
    <link rel="stylesheet" type="text/css" href="css/page.css">
    <link rel="stylesheet" type="text/css" href="css/accordion.css">

    <!-- slickのCSSを反映する -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">

</head>


<body>

<div id="spread"></div>

<div>
    <div id="square"></div>
    <div>
        <h1 class="main-title">JavaScript 勉強会</h1>
    </div>
</div>

<div>
    <div>
        <h1 class="sub-title">Slickを使用したスライド</h1>
    </div>
    <div>
        <div class="rotation"></div>
    </div>
</div>


<div>
    <div>
        <h1 class="sub-title">アニメーション付きのアコーディオン</h1>
    </div>
    <div>
        <ul class="list" style="list-style: none;">
            <li class="list-item">
                <h3 class="list-title">質問対応時間は何時から何時までですか。</h3>
                <div class="list-content">
                    <p class="list-txt">
                        平日は10:00開始22:00終了、土日祝日は10:00開始19:00終了となります。
                        当日中に確実に質問を解決されたい方は、終了時間の15分前までに質問を投稿いただけると助かります。</br>

                        年末年始など、別個スクールが定める休校日がございます。
                        当該日は質問対応を受付致しかねますこと、ご承知おき願います。
                    </p>
                </div>
            </li>
            <li class="list-item">
                <h3 class="list-title">カリキュラム内容以外の質問はできますか。</h3>
                <div class="list-content">
                    <p class="list-txt">
                        原則承っておりません。</br>
                        あくまでもカリキュラムに記載の内容に関するご質問への対応となりますことをご承知おき願います。
                    </p>
                </div>
            </li>
        </ul>
    </div>
</div>




<div>
    <div>
        <h1 class="sub-title">Slickを使用したスライド</h1>
    </div>
    <div>
        <ul class="slider">
            <li class="slick-slide"><img src="img/reference_01.jpg"></li>
            <li class="slick-slide"><img src="img/reference_02.jpg"></li>
            <li class="slick-slide"><img src="img/reference_03.jpg"></li>
            <li class="slick-slide"><img src="img/reference_04.jpg"></li>
            <li class="slick-slide"><img src="img/reference_05.jpg"></li>
        </ul>
    </div>
</div>

<div>

</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="js/page.js"></script>
<script src="js/slick.js"></script>
<script src="js/accordion.js"></script>
</body>
</html>