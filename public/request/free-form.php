<?php
include_once("../function.php");
$conf_path = "../assets/config.php";
$func = new MyFunction($conf_path, "もんすたぁへの依頼");

$func->printCommonHead();
?>
<body class="mc">
    <div class="wrapper">
        <div class="all_left">
            <div class="black_box">
                <h1>もんすたぁへの無料依頼</h1>
                <form action="./action/discord-webhook.php" method="post">
                    <label for="type">種別</label>
                    <select name="type" id="type">
                        <option value="mc-pl">プラグイン(マインクラフト)</option>
                        <option value="mc-sk">Skript(マインクラフト)</option>
                        <option value="discord">Discord BOT</option>
                    </select>
                    <label for="sk-version" id="sk-version-label">Skript Version</label>
                    <input name=
                </form>
            </div>
            <?php $func->printFooter(); ?>
        </div>
        <?php $func->printCommonFoot(); ?>
    </div>
</body>
