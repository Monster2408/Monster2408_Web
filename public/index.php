<?php
include_once("./function.php");
$conf_path = "./assets/config.php";
$func = new MyFunction($conf_path);

$func->printCommonHead();
?>

<div class="all_center">
    <div class="black_box">
        <h1>MonsterLifeServer</h1>
        <ul>
            <li><a href="https://www.mlserver.xyz/" target="_blank">ホームページ</a></li>
            <li><a href="https://youtube.mlserver.xyz/" target="_blank">YouTube</a></li>
            <li><a href="https://twitter.mlserver.xyz/" target="_blank">Twitter</a></li>
            <li><a href="https://twitch.mlserver.xyz/" target="_blank">Twitch</a></li>
        </ul>

        <h1>Monster2408</h1>
        <ul>
            <li><a href="https://github.com/Monster2408" target="_blank">GitHub</a></li>
            <li><a href="https://twitter.com/monster_2408" target="_blank">Twitter</a></li>
            <!--<li><a href="./repo">GitHub Source</a></li>-->
            <li><a href="https://www.mlserver.xyz/blog/category/skript-couse/" target="_blank">Skript講座</a></li>
            <li><a href="#" id="js-show-popup">プロフィール</a></li>
        </ul>

        <h1>Service</h1>
        <ul>
            <li><a href="./box/">Monster Box</a></li>
            <li><a href="./api/covid">Covid</a></li>
            <li><a href="./api/google_img_search">Google画像検索【サイズ指定】</a></li>
            <li><a href="./api/5hanayome">【五等分の花嫁】中野五月を見極めろ！そこに愛はあるんか？</a></li>
        </ul>
        
        <?php $func->printFooter(); ?>
    </div>
</div>
<?php include("./assets/include/profile.php"); ?>

<?php $func->printCommonFoot(); ?>
