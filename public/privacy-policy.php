<?php

include('./assets/function.php');
$func = new MyFunction('./assets/config.php', "プライバシーポリシー");

$func->addStyle('/assets/css/style.min.css');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="ja">
    <head>
        <?php $func->printMetaData(); ?>
    </head>
    <body>
        <?php include('./assets/include/header.php'); ?>
        <div class="contents d-flex align-items-center">
            <div class="about-access-analysis-tools p-2">
                <h2><i class="fab fa-google"></i> アクセス解析ツールについて</h2>
                <p>当サイトでは、Googleによるアクセス解析ツール「Googleアナリティクス」を利用しています。Googleアナリティクスはトラフィックデータの収集のためにCookieを使用しています。このトラフィックデータは匿名で収集されており、個人を特定するものではありません。この機能はCookieを無効にすることで収集を拒否することが出来ますので、お使いのブラウザの設定をご確認ください。Googleアナリティクスのサービスについて、詳しくは<a href="https://www.google.com/analytics/terms/jp.html">こちら</a>をご覧ください。</p>
            </div>
            <div class="disclaimer p-2">
                <h2><i class="far fa-envelope"></i> 免責事項</h2>
                <p>当サイトからリンクやバナーなどによって他のサイトに移動された場合、移動先サイトで提供される情報、サービス等について一切の責任を負いません。当サイトに掲載された内容によって生じた損害等の一切の責任を負いかねますのでご了承ください。</p>
            </div>
        </div>
        <?php include('./assets/include/footer.php'); ?>
    </body>
</html>