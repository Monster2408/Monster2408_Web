<?php
$function = include_once("./function.php");

printCommonHead("./assets/config.php", "プライバシーポリシー | Monster2408");
?>

<div class="all_center">
    <div class="black_box">
        <div class="col-md-4">
            <h2><i class="fab fa-google"></i> アクセス解析ツールについて</h2>
            <p>当サイトでは、Googleによるアクセス解析ツール「Googleアナリティクス」を利用しています。Googleアナリティクスはトラフィックデータの収集のためにCookieを使用しています。このトラフィックデータは匿名で収集されており、個人を特定するものではありません。この機能はCookieを無効にすることで収集を拒否することが出来ますので、お使いのブラウザの設定をご確認ください。Googleアナリティクスのサービスについて、詳しくは<a href="https://www.google.com/analytics/terms/jp.html">こちら</a>をご覧ください。</p>
        </div>
        <div class="col-md-4">
            <h2><i class="far fa-envelope"></i> 免責事項</h2>
            <p>当サイトからリンクやバナーなどによって他のサイトに移動された場合、移動先サイトで提供される情報、サービス等について一切の責任を負いません。当サイトに掲載された内容によって生じた損害等の一切の責任を負いかねますのでご了承ください。</p>
        </div>
        <div class="footer-center" style="border-top: 1px solid #000; margin-top: 10px; margin-bottom: 10px; padding-top: 20px; padding-bottom: 20px;">
            <span><a href="./index">トップページ</a></span><br>    
            <span><a href="./privacy-policy">プライバシーポリシー</a></span><br>
            <span class="name"> Monster2408 &copy; 2021-<?php echo date("Y"); ?></span>
        </div>
    </div>
</div>
<?php printCommonFoot("./assets/config.php"); ?>