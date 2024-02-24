<?php
include_once("../function.php");
$conf_path = "../assets/config.php";
$func = new MyFunction($conf_path, "Google画像検索【サイズ指定】");
$func->addFooterContent('<span><a target="_blank" href="https://www.google.com/">powered by Google</a></span>');

$func->printCommonHead();
?>
<body class="mc">
    <div class="wrapper">
        <div class="all_center">
            <div class="black_box">
                <?php $func->printHeader(); ?>
                <h1>ページが移行されました。</h1>
                <p>5s後に自動移動します。移動しない場合は<a href="../box/google_img_search"></a>から移動してください。</p>
            </div>
            <?php $func->printFooter(); ?>
        </div>
        <?php $func->printCommonFoot(); ?>
    </div>
</body>