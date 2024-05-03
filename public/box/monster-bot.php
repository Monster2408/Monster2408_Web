<?php

include("../assets/function.php");
$func = new MyFunction("../assets/config.php", "MonsterBot");

$func->addStyle('/assets/css/style.min.css');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="ja">
    <head>
        <?php $func->printMetaData(); ?>
    </head>
    <body>
        <?php include('../assets/include/header.php'); ?>
        <div class="contents">
            <h1>MonsterBot</h1>
            <p>
                Monster2408が開発した多機能Discord Botです。discord.pyで作成されており日々新機能が追加されています。
            </p>
            <p><a href="https://discord.com/api/oauth2/authorize?client_id=602129473084588044&permissions=8&scope=bot" target="_blank">招待リンク</a></p>
        </div>
        <?php include('../assets/include/footer.php'); ?>
    </body>
</html>