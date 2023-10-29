<?php
include_once("./function.php");
$conf_path = "./assets/config.php";
$func = new MyFunction($conf_path);

$func->printCommonHead();
?>
<body class="mc">
    <div class="wrapper">
        <div class="all_left">
            <div class="black_box">
                <h1>もんすたぁへの依頼</h1>
            </div>
            <?php $func->printFooter(); ?>
        </div>
        <?php $func->printCommonFoot(); ?>
    </div>
</body>
