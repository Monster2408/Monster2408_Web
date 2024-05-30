<?php

include('./assets/function.php');
$func = new MyFunction('./assets/config.php', "About Monster2408");

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
        <div class="contents about-area">
            <?php include('./assets/include/profile.php'); ?>
        </div>
        <?php include('./assets/include/footer.php'); ?>
    </body>
</html>