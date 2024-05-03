<?php

include('./assets/function.php');
$func = new MyFunction('./assets/config.php', "オープンソースソフトウェア");

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
                <a href="https://www.spigotmc.org/resources/simplegamemode.116561/" target="_blank" class="card-a-tag">
                    <div class="card-box">
                        <div class="card-article">
                            <img src="<?php echo $func->getUrl(); ?>/assets/img/spigot.png" alt="SimpleGameMode(Bukkit Plugin)" class="card-img">
                        </div>
                        <div class="card-info-area">
                            <h1>SimpleGameMode(Bukkit Plugin)</h1>
                            <p>Minecraftのサーバー用プラグインです。ゲームモード変更コマンドを短縮します。</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <?php include('./assets/include/footer.php'); ?>
    </body>
</html>