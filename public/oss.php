<?php

include('./assets/function.php');
$func = new MyFunction('./assets/config.php', "オープンソースソフトウェア");

$func->addStyle('/assets/css/style.min.css');

$language_code = "en";
if (isset($_GET["lang"])) {
    $language_code = $_GET["lang"];
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="<?php echo $language_code; ?>">
    <head>
        <?php $func->printMetaData(); ?>
    </head>
    <body>
        <?php include('./assets/include/header.php'); ?>
        <div class="contents">
            <h1 lang="ja">オープンソースソフトウェア</h1>
            <h1 lang="en">Open-source Software</h1>
            <div class="d-flex card-list justify-content-around flex-wrap flex-row">
                <a href="https://www.spigotmc.org/resources/simplegamemode.116561/" target="_blank" class="card-a-tag">
                    <div class="card-box">
                        <div class="card-article">
                            <img src="<?php echo $func->getUrl(); ?>/assets/img/spigot.png" alt="SimpleGameMode(Bukkit Plugin)" class="card-img">
                        </div>
                        <div class="card-info-area">
                            <h1>SimpleGameMode(Bukkit Plugin)</h1>
                            <p lang="ja">
                                Minecraftのサーバー用プラグインです。
                                ゲームモード変更コマンドを短縮します。
                            </p>
                            <p lang="en">
                                Plugin for Minecraft server. 
                                Shorten the game mode change command.
                            </p>
                        </div>
                    </div>
                </a>
                <a href="https://github.com/Monster2408/MCVersion" target="_blank" class="card-a-tag">
                    <div class="card-box">
                        <div class="card-article">
                            <img src="<?php echo $func->getUrl(); ?>/assets/img/spigot.png" alt="MCVersion(Bukkit API)" class="card-img">
                        </div>
                        <div class="card-info-area">
                            <h1>MCVersion(Bukkit API)</h1>
                            <p lang="ja">
                                Minecraftのサーバープラグイン用のAPIです。
                                minecraftのバージョン情報を格納しているAPIでViaVersionなどと併用するとプレイヤーがどのバージョンでサーバーにアクセスしているかを調査可能です。
                            </p>
                            <p lang="en">
                                API for the Minecraft server plugin, which stores minecraft version information and can be used in conjunction with ViaVersion and other APIs to determine which version of the server a player is accessing.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <?php include('./assets/include/footer.php'); ?>
    </body>
</html>