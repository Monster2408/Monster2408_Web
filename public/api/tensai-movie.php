<?php
include_once("../function.php");
$conf_path = "../assets/config.php";
$func = new MyFunction($conf_path, "転載動画視聴");

$func->printCommonHead();
?>
<body class="mc">
    <div class="wrapper">
        <div class="all_center">
            <div class="black_box">
                <?php $func->printHeader(); ?>
                <h1>ページが移行されました。</h1>
                <p>5s後に自動移動します。移動しない場合は<a href="../box/tensai-movie"></a>から移動してください。</p>
            </div>
            <?php $func->printFooter(); ?>
        </div>
        <?php $func->printCommonFoot(); ?>
    </div>
</body>