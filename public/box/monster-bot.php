<?php

include("../assets/function.php");
$func = new MyFunction("../assets/config.php", "MonsterBot");

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
        <?php include('../assets/include/header.php'); ?>
        <div class="contents">
            <div class="m-1">
                <h1>MonsterBOT</h1>
                <p lang="ja">Monster2408が開発した多機能Discord Botです。discord.pyで作成されており日々新機能が追加されています。</p>
                <p lang="en">This is a multi-functional Discord Bot developed by Monster2408, created with discord.py and new features are added daily.</p>
                <ul>
                    <li lang="ja">地震速報機能(日本国内限定)</li>
                    <li lang="en">Earthquake early warning function (Japan only)</li>
                    <li lang="ja">マインスイーパー</li>
                    <li lang="en">Minesweeper</li>
                    <li lang="ja">翻訳システム</li>
                    <li lang="en">translation system</li>
                </ul>
                <?php $bot_link = "https://discord.com/api/oauth2/authorize?client_id=602129473084588044&permissions=8&scope=bot"; ?>
                <p lang="ja"><a href="<?php echo $bot_link; ?>" target="_blank">招待リンク</a></p>
                <p lang="en"><a href="<?php echo $bot_link; ?>" target="_blank">Invitation Link</a></p>
            </div>
        </div>
        <?php include('../assets/include/footer.php'); ?>
    </body>
</html>