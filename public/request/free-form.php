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
                    <label for="detail">仕様</label>
                    <textarea name="detail" id="detail" cols="30" rows="10" required></textarea>
                </form>
            </div>
            <?php $func->printFooter(); ?>
        </div>
        <?php $func->printCommonFoot(); ?>
        <script>
            setDetailExample("plugin.txt");
            document.getElementById("type").addEventListener("change", function() {
                var type = document.getElementById("type").value;
                var detail_file = null;
                if (type == "mc-sk") {
                    detail_file = "skript.txt";
                } else if (type == "mc-pl") {
                    detail_file = "plugin.txt";
                } else if (type == "discord") {
                    detail_file = "discord.txt";
                }

                setDetailExample(detail_file);
            });
            function setDetailExample(detail_file) {
                if (detail_file != null) {
                    var xhr = new XMLHttpRequest();
                    xhr.open("GET", "./action/get-detail.php?file=" + detail_file, true);
                    xhr.send();
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState == 4 && xhr.status == 200) {
                            document.getElementById("detail").value = xhr.responseText;
                        }
                    }
                }
            }
        </script>
    </div>
</body>
