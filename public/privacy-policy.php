<?php
include_once("./function.php");
$conf_path = "./assets/config.php";
$func = new MyFunction($conf_path, "プライバシーポリシー");

$func->printCommonHead();
?>

<div class="all_center">
    <div class="black_box">
        <?php $func->printHeader(); ?>
        <div style="width: 100%; max-width: 850px; margin-right: auto; margin-left: auto;">
            <div class="row text-left">
                <div class="col-md-6">
                    <h2><i class="fab fa-google"></i> アクセス解析ツールについて</h2>
                    <p>当サイトでは、Googleによるアクセス解析ツール「Googleアナリティクス」を利用しています。Googleアナリティクスはトラフィックデータの収集のためにCookieを使用しています。このトラフィックデータは匿名で収集されており、個人を特定するものではありません。この機能はCookieを無効にすることで収集を拒否することが出来ますので、お使いのブラウザの設定をご確認ください。Googleアナリティクスのサービスについて、詳しくは<a href="https://www.google.com/analytics/terms/jp.html">こちら</a>をご覧ください。</p>
                </div>
                <div class="col-md-6">
                    <h2><i class="far fa-envelope"></i> 免責事項</h2>
                    <p>当サイトからリンクやバナーなどによって他のサイトに移動された場合、移動先サイトで提供される情報、サービス等について一切の責任を負いません。当サイトに掲載された内容によって生じた損害等の一切の責任を負いかねますのでご了承ください。</p>
                </div>
            </div>
        </div>
    </div>
    <?php $func->printFooter(); ?>
</div>
<?php $func->printCommonFoot(); ?>