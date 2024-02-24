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
                <iframe src="https://www.youtube.com/embed/LzxX3uJOtyY"></iframe>
                <div class="control">
                    <button id="big">拡大</button> <button id="small">縮小</button>
                </div>
            </div>
            <?php $func->printFooter(); ?>
        </div>
        <script>
            $('#big').on('click', function() {
                alert("big クリックされました");
            });
            $('#small').on('click', function() {
                alert("small クリックされました");
            });
        </script>
        <?php $func->printCommonFoot(); ?>
    </div>
</body>