<?php

include('./assets/function.php');
$func = new MyFunction('./assets/config.php', "トップページ");

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
        <?php include('./assets/include/header.php'); ?>
        <div class="contents">
            <div class="about-area">
                <?php include('./assets/include/profile.php'); ?>
            </div>
            <div class="p-1">
                <div class="title"><h2>アクセス解析中</h2></div>
                <div class="body">
                    <div class="inner">
                        <div class="system-area count-area">
                            <p>総アクセス数：<?php echo $viewCountAll; ?></p>
                            <p>今日のアクセス数：<?php echo $viewCountToday; ?></p>
                            <p>昨日のアクセス数：<?php echo $viewCountYesterday; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('./assets/include/footer.php'); ?>
    </body>
</html>