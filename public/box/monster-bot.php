<?php
include_once("../function.php");
$conf_path = "../assets/config.php";
$func = new MyFunction($conf_path, "MonsterBot");

$func->printCommonHead();
?>
<div class="all_center">
    <div class="black_box">
        <h1>MonsterBot</h1>
        <p>
            Monster2408が開発した多機能Discord Botです。discord.pyで作成されており日々新機能が追加されています。
        </p>
        <p><a href="https://discord.com/api/oauth2/authorize?client_id=602129473084588044&permissions=8&scope=bot" target="_blank">招待リンク</a></p>
    </div>
    <?php $func->printFooter(); ?>
</div>
<?php $func->printCommonFoot(); ?>
