<?php

include('./assets/function.php');
$func = new MyFunction('./assets/config.php', "トップページ");

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
            <div class="p-1">
                <h3>Monster2408</h3>
                <p>Minecraftでミニゲーム企画を開催しているMonsterLifeServerの運営で開発やYouTubeに投稿する動画の編集などをしています。</p>
                <p>元々はコマンドでミニゲーム企画を開催していましたが限界を感じてSkriptを使い始めました。そこから5つほど企画を作り，バグなどの原因でプラグインの勉強を始めました。</p>
                <p>本格的な開発者歴自体は5年ぐらいです。Skript以外ではHTML,CSS,JavaScript,PHP,Python,MySQL,Cなどを使てシステム設計をしています。</p>
                <p>仕事でも似たようなことをしています。</p>
            </div>
        </div>
        <?php include('./assets/include/footer.php'); ?>
    </body>
</html>