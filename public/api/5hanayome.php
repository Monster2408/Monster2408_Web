<?php

include("../assets/function.php");
$func = new MyFunction("../assets/config.php", "【五等分の花嫁】中野五月を見極めろ！そこに愛はあるんか？");
$func->addFooterContent('<span><a target="_blank" href="https://twitter.com/black_yameee2/status/1547433293032726529?s=21&t=v8ZD1qfZ_N2eaztNZXsK6w">元ネタ</a></span>');

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
            <h1>ページが移行されました。</h1>
            <p>5s後に自動移動します。移動しない場合は<a href="../box/5hanayome">コチラ</a>から移動してください。</p>
        </div>
        <?php include('../assets/include/footer.php'); ?>
    </body>
</html>