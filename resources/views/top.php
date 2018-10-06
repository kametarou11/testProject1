<?php
use App\Models\Common;
//Common::h('a');
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>タイトル</title>
        <meta name="description" content="ページの紹介文"><!--Webページの紹介文。Google等の検索結果ページに表示される-->
        <meta name="viewport" content="width=device-width, initial-scale=1"><!--レスポンシブに対応させるためのもの-->

        <!-- CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css"><!--ブラウザー独自のデフォルトCSSを無しにする-->
        <link rel="stylesheet" href="css/layout.css">
    </head>
    <body>
        <!-- ここにコンテンツが入ります -->
        <div class="wrapper">
            <div class="header">
                <ul class="header_btn">
                    <li><a href="/top">TOP</a></li>
                    <li><a href="#">紹介</a></li>
                    <li><a href="#">仕事の依頼</a></li>
                    <li><a href="#">お問い合わせ</a></li>
                    <li><a href="/login">ログイン</a></li>
                </ul>
                <div class="header_img">
                    <img src="images/testheader.jpg">
                    <p>タイトル</p>
                </div>
            </div>
            <div class="container">
                <div class="main">
                    <h1>メイン見出し1</h1>
                    <p>
                        説明文
                    </p>
                    <h1>メイン見出し2</h1>
                    <p>
                        説明文
                    </p>
                </div>
                <div class="side">
                    <p>サブメニュー見出し1</p>
                    <ul>
                        <li><a href="#">項目1</a></li>
                        <li><a href="#">項目2</a></li>
                    </ul>
                    <p>サブメニュー見出し2</p>
                    <ul>
                        <li><a href="#">項目1</a></li>
                        <li><a href="#">項目2</a></li>
                        <li><a href="#">項目3</a></li>
                    </ul>
                    <p>サブメニュー見出し3</p>
                    <ul>
                        <li><a href="#">項目1</a></li>
                        <li><a href="#">項目2</a></li>
                        <li><a href="#">項目3</a></li>
                        <li><a href="#">項目4</a></li>
                    </ul>
                    <p>会員限定</p>
                    <ul>
                        <li><a href="#">会員限定項目</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer">
                <p class="">Company</p>
                アンダーライン
                <ul class="横並び">
                    <li>
                        <ul>
                            <li><a href="#">会員限定項目</a></li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li><a href="#">会員限定項目</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- JS -->
        <script src="js/layout.js"></script>
    </body>
</html>
