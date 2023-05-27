<?php
include_once("../function.php");
$conf_path = "../assets/config.php";
$func = new MyFunction($conf_path, "Monster Box");

$func->printCommonHead();
?>
<div class="all_center">
    <div class="black_box">
        <h1>Monster Box</h1>
        <ul>
            <li><a href="./monster-bot">MonsterBot</a></li>
        </ul>
    </div>
    <?php $func->printFooter(); ?>
</div>
<?php $func->printCommonFoot(); ?>
