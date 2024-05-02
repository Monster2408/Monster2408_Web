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
        <div class="contents"></div>
        <?php include('./assets/include/footer.php'); ?>
    </body>
</html>