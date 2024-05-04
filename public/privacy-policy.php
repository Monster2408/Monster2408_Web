<?php

include('./assets/function.php');
$func = new MyFunction('./assets/config.php', "プライバシーポリシー");

$func->addStyle('/assets/css/style.min.css');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
    <head>
        <?php $func->printMetaData(); ?>
    </head>
    <body>
        <?php include('./assets/include/header.php'); ?>
        <div class="contents d-table">
            <div class="d-table-cell align-middle">
                <div class="about-access-analysis-tools m-2">
                    <h2 lang="ja"><i class="fab fa-google"></i> アクセス解析ツールについて</h2>
                    <h2 lang="en"><i class="fab fa-google"></i> About Access Analysis Tools</h2>
                    <p lang="ja">
                        当サイトでは、Googleによるアクセス解析ツール「Googleアナリティクス」を利用しています。
                        Googleアナリティクスはトラフィックデータの収集のためにCookieを使用しています。
                        このトラフィックデータは匿名で収集されており、個人を特定するものではありません。
                        この機能はCookieを無効にすることで収集を拒否することが出来ますので、お使いのブラウザの設定をご確認ください。
                        Googleアナリティクスのサービスについて、詳しくは<a href="https://marketingplatform.google.com/about/analytics/terms/jp/">こちら</a>をご覧ください。
                    </p>
                    <p lang="en">
                        This website uses Google Analytics, an access analysis tool provided by Google.
                        Google Analytics uses cookies to collect traffic data.
                        This traffic data is collected anonymously and does not personally identify you.
                        This feature can be disabled by disabling cookies, so please check your browser settings.
                        For more information about Google Analytics services, please visit <a href="https://marketingplatform.google.com/about/analytics/terms/us/">here</a>.
                    </p>
                </div>
                <div class="disclaimer m-2">
                    <h2 lang="ja"><i class="far fa-envelope"></i> 免責事項</h2>
                    <h2 lang="en"><i class="far fa-envelope"></i> Disclaimer</h2>
                    <p lang="ja">
                        当サイトからリンクやバナーなどによって他のサイトに移動された場合、移動先サイトで提供される情報、サービス等について一切の責任を負いません。
                        当サイトに掲載された内容によって生じた損害等の一切の責任を負いかねますのでご了承ください。
                    </p>
                    <p lang="en">
                        In the event that you are transferred from this site to another site via a link, banner, or other means, we assume no responsibility for the information, services, or other content provided on the new site.
                        Please note that we are not responsible for any damage or loss caused by the contents of this website.
                    </p>
                </div>
            </div>
        </div>
        <?php include('./assets/include/footer.php'); ?>
    </body>
</html>