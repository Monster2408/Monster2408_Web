<?php

include("../assets/function.php");
$func = new MyFunction("../assets/config.php", "Google画像検索【サイズ指定】");
$func->addFooterContent('<span><a target="_blank" href="https://www.google.com/">powered by Google</a></span>');

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
            <h1>ページが移行されました。</h1>
            <p>5s後に自動移動します。移動しない場合は<a href="../box/google_img_search">コチラ</a>から移動してください。</p>
        </div>
        <?php include('../assets/include/footer.php'); ?>
    </body>
</html>