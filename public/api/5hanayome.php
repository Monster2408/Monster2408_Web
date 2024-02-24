<?php
include_once("../function.php");
$conf_path = "../assets/config.php";
$func = new MyFunction($conf_path, "【五等分の花嫁】中野五月を見極めろ！そこに愛はあるんか？");

$func->addFooterContent('<span><a target="_blank" href="https://twitter.com/black_yameee2/status/1547433293032726529?s=21&t=v8ZD1qfZ_N2eaztNZXsK6w">元ネタ</a></span>');

?>
<body class="mc">
    <div class="wrapper">
        <div class="all_center">
            <div class="black_box">
                <?php $func->printHeader(); ?>
                <h1>ページが移行されました。</h1>
                <p>5s後に自動移動します。移動しない場合は<a href="../box/5hanayome"></a>から移動してください。</p>
            </div>
            <?php $func->printFooter(); ?>
        </div>
        <?php $func->printCommonFoot(); ?>
    </div>
</body>