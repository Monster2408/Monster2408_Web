<?php

include('./assets/function.php');
$func = new MyFunction('./assets/config.php', "プロジェクト");

$func->addStyle('/assets/css/style.min.css');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="ja">
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
                        <h1>MonsterLifeServer</h1>
                        <p>MonsterLifeServerはMinecraftでミニゲーム企画を開催しているサーバーです。</p>
                    </div>
                </a>
                <a href="https://youtube.mlserver.xyz/" target="_blank" class="card-a-tag">
                    <div class="card-box">
                        <h1>MonsterLifeServerのYouTube</h1>
                        <p>MonsterLifeServerのYouTubeチャンネルです。</p>
                    </div>
                </a>
                <a href="<?php echo $func->getUrl(); ?>/box/5hanayome" target="_blank" class="card-a-tag">
                    <div class="card-box">
                        <h1>五等分の花嫁ゲーム</h1>
                        <p>「五等分の花嫁」の中野五月を見比べるゲームです。</p>
                    </div>
                </a>
                <a href="<?php echo $func->getUrl(); ?>/box/google_img_search" target="_blank" class="card-a-tag">
                    <div class="card-box">
                        <h1>サイズ指定式Google画像検索</h1>
                        <p>Googleでサイズを指定して画像検索します。</p>
                    </div>
                </a>
            </div>
        </div>
        <?php include('./assets/include/footer.php'); ?>
    </body>
</html>