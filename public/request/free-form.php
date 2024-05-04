<?php

include("../assets/function.php");
$func = new MyFunction("../assets/config.php", "無料依頼フォーム");

$func->addStyle('/assets/css/style.min.css');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
    <head>
        <?php $func->printMetaData(); ?>
    </head>
    <body>
        <?php include('../assets/include/header.php'); ?>
        <div class="contents">
            <h1>もんすたぁへの無料依頼(現在送信不可)</h1>
            <form action="./action/discord-webhook.php" method="post" class="m-1">
                <div class="mb-3">
                    <label for="type" class="form-label">種別</label>
                    <select name="type" id="type" class="form-control">
                        <option value="mc-pl">プラグイン(マインクラフト)</option>
                        <option value="mc-sk">Skript(マインクラフト)</option>
                        <option value="discord">Discord BOT</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="detail" class="form-label">仕様</label>
                    <textarea name="detail" id="detail" cols="30" rows="10" class="form-control" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="contact" class="form-label">連絡先</label>
                    <input type="text" name="contact" id="contact" class="form-control" required>
                </div>
                <div class="mb-3">
                    <input type="submit" value="送信" class="btn btn-primary">
                </div>
            </form>
        </div>
        <?php include('../assets/include/footer.php'); ?>
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
    </body>
</html>