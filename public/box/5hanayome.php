<?php

include("../assets/function.php");
$func = new MyFunction("../assets/config.php", "【五等分の花嫁】中野五月を見極めろ！そこに愛はあるんか？");

$func->addFooterContent('<span><a target="_blank" href="https://twitter.com/black_yameee2/status/1547433293032726529?s=21&t=v8ZD1qfZ_N2eaztNZXsK6w">元ネタ</a></span>');

$ituki_true = [
    "https://i.gyazo.com/2043eea671944255449d51e8a7691a93.png",
    "https://i.gyazo.com/a12c46812dc41a79802df47a95acb226.png",
    "https://i.gyazo.com/e98e51afd54282c0216ee58ad87c0a7f.png",
    "https://i.gyazo.com/4c92557b5397c58e584e195f34febc38.png",
    "https://i.gyazo.com/a90b03b6b02198462cbdeee9e724a136.png"
];

$ituki_false = [
    "https://i.gyazo.com/a463bf6ef4c653ba0f1a444edd9ff375.png", # itika
    "https://i.gyazo.com/49ecaa15eaf86a0feb5ae3517d864335.png", # nino
    "https://i.gyazo.com/13f5bb3ff7c024b301259af82a5e6790.png", # miku
    "https://i.gyazo.com/37b5506950dbcf99ff14b05e45667227.png", # yotuba
    "https://i.gyazo.com/734c7c88a8629346a3cf22f06bca6983.png", # yotuba?
    "https://i.gyazo.com/96078d3497dff274bd651e864db09363.png", # itika?
    "https://i.gyazo.com/d7c07e7ea7484572a664287299d85f05.png", # nino?
    "https://i.gyazo.com/7ed9e7245e5e712a637f5b06edd9fc11.png", # miku?
];

$func->addStyle('/assets/css/style.min.css');
$func->addStyle('/assets/css/5hanayome.min.css');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="ja">
    <head>
        <?php $func->printMetaData(); ?>
    </head>
    <body>
        <?php include('../assets/include/header.php'); ?>
        <div class="contents">
            <div class="five-hanayome-recaptcha">
                <div class="blue-area">
                    <div class="content">
                        <div class="text-area">
                            <h1 class="check-name">中野五月</h1>
                            <p>の画像をすべて選択してください。全て選択し終わったら〔確認〕をクリックしてください。</p>
                        </div>
                        <div class="img-area">
                            <img src="https://i.gyazo.com/11e298705b6716ecce30c59b2fef5363.png">
                        </div>
                    </div>
                </div>
                <ul class="check-area">
                <?php

                    $ituki_size = random_int(3, 4);
                    $temp = 9 - $ituki_size;
                    $ituki_array = [];
                    foreach( array_rand( $ituki_true, $ituki_size ) as $key ) {
                        $ituki_array[] = $ituki_true[$key] ;
                    }
                    foreach( array_rand( $ituki_false, $temp ) as $key ) {
                        $ituki_array[] = $ituki_false[$key] ;
                    }
                    shuffle($ituki_array);

                    $temp = 0;
                    foreach ( array_rand( $ituki_array, 9 ) as $key) {
                        if (in_array($ituki_array[$key], $ituki_true, true)) { $tag = " true"; } else { $tag = ""; }
                        echo '<li class="check-item'.$tag.'"><img src="'.$ituki_array[$key].'"></img></li>'."\n";
                        $temp = $temp + 1;
                    }
                ?>
                </ul>
                <div class="footer-area">
                    <div class="icons">
                        <i class="fa-solid fa-arrow-rotate-right" id="reload"></i>
                        <!-- <i class="fa-solid fa-headphones-simple"></i>
                        <i class="fa-regular fa-circle-info"></i> -->
                    </div>
                    <div class="ok">確認</div>
                </div>
            </div>
            <script>
                $(".check-item").click(function() {
                    if ($(this).hasClass("clicked")) {
                        $(this).removeClass("clicked");
                    } else {
                        $(this).addClass("clicked");
                    }
                });
                $(".ok").click(function() {
                    var clear = true;
                    $(".check-item").each(function(i, elem) {
                        if ($(elem).hasClass("true")) {
                            if ($(elem).hasClass("clicked")) { // 正解
                                
                            } else { // 不正解
                                clear = false;
                            }
                        } else {
                            if ($(elem).hasClass("clicked")) { // 不正解
                                clear = false;
                            } else { // 正解

                            }
                        }
                    });
                    
                    if (clear == true) {
                        alert("正解！君は五つ子を愛しているんだな...");
                    } else {
                        alert("不正解！君に五つ子への愛はないのか！？");
                    }
                });
                $("#reload").click(function() {
                    location.reload();
                });
                
            </script>
        </div>
        <?php include('../assets/include/footer.php'); ?>
    </body>
</html>