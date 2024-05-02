<?php

include('./assets/function.php');
$func = new MyFunction('./assets/config.php', "トップページ");

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="ja">
    <head>
        <?php $func->printMetaData(); ?>
    </head>
    <body>
        <?php include('./assets/include/header.php'); ?>
        
    </body>
</html>