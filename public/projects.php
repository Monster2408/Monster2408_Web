<?php

include('./assets/function.php');
$func = new MyFunction('./assets/config.php', "プロジェクト");

$func->addStyle('/assets/css/style.min.css');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
    <head>
        <?php $func->printMetaData(); ?>
    </head>
    <body>
        <?php include('./assets/include/header.php'); ?>
        <div class="contents">
            <h1>プロジェクト</h1>
            <p>現在進行中のプロジェクトです。</p>
            <div class="d-flex card-list justify-content-around flex-wrap flex-row">
                <a href="https://www.mlserver.xyz/" target="_blank" class="card-a-tag">
                    <div class="card-box">
                        <div class="card-article">
                            <img src="<?php echo $func->getUrl(); ?>/assets/img/mls_icon.png" alt="MonsterLifeServer" class="card-img">
                        </div>
                        <div class="card-info-area">
                            <h1>MonsterLifeServer</h1>
                            <p>MonsterLifeServerはMinecraftでミニゲーム企画を開催しているサーバーです。</p>
                        </div>
                    </div>
                </a>
                <a href="https://youtube.mlserver.xyz/" target="_blank" class="card-a-tag">
                    <div class="card-box">
                        <div class="card-article">
                            <img src="<?php echo $func->getUrl(); ?>/assets/img/youtube.png" alt="MonsterLifeServerのYouTube" class="card-img">
                        </div>
                        <div class="card-info-area">
                            <h1>MonsterLifeServerのYouTube</h1>
                            <p>MonsterLifeServerのYouTubeチャンネルです。</p>
                        </div>
                    </div>
                </a>
                <a href="https://twitch.mlserver.xyz/" target="_blank" class="card-a-tag">
                    <div class="card-box">
                        <div class="card-article">
                            <img src="<?php echo $func->getUrl(); ?>/assets/img/twitch.jpg" alt="MonsterLifeServerのTwitch" class="card-img">
                        </div>
                        <div class="card-info-area">
                            <h1>MonsterLifeServerのTwitch</h1>
                            <p>MonsterLifeServerのTwitchチャンネルです。</p>
                        </div>
                    </div>
                </a>
                <a href="<?php echo $func->getUrl(); ?>/box/5hanayome" target="_blank" class="card-a-tag">
                    <div class="card-box">
                        <div class="card-article">
                            <img src="<?php echo $func->getUrl(); ?>/assets/img/5hanayome.png" alt="五等分の花嫁ゲーム" class="card-img">
                        </div>
                        <div class="card-info-area">
                            <h1>五等分の花嫁ゲーム</h1>
                            <p>「五等分の花嫁」の中野五月を見比べるゲームです。</p>
                        </div>
                    </div>
                </a>
                <a href="<?php echo $func->getUrl(); ?>/box/google_img_search" target="_blank" class="card-a-tag">
                    <div class="card-box">
                        <div class="card-article">
                            <img src="<?php echo $func->getUrl(); ?>/assets/img/icon-image-not-found-free-vector.jpg" alt="サイズ指定式Google画像検索" class="card-img">
                        </div>
                        <div class="card-info-area">
                            <h1>サイズ指定式Google画像検索</h1>
                            <p>Googleでサイズを指定して画像検索します。</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <?php include('./assets/include/footer.php'); ?>
    </body>
</html>