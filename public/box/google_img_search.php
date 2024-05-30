<?php

include("../assets/function.php");
$func = new MyFunction("../assets/config.php", "Google画像検索【サイズ指定】");

$func->addFooterContent('<span><a target="_blank" href="https://www.google.com/">powered by Google</a></span>');

$func->addStyle('/assets/css/style.min.css');
$func->addStyle('/assets/css/google_img_search.min.css');

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
        <?php include('../assets/include/header.php'); ?>
        <div class="contents">
            <div id="container">
                <div id="logo">
                    <div>
                        <h1>Google Image Search</h1>
                    </div>
                    <div id="logo-subtext">画像検索</div>
                </div>

                <div id="input_1">
                    <input type="text" id="keywords">
                    <button id="search">&#x1f50d;</button>
                </div>

                <div class="tbl">
                    <div class="label">Width 幅 (px):</div><input type="number" min="1" step="1" id="width">
                </div>

                <div class="tbl">
                    <div class="label">Height 高さ (px):</div><input type="number" min="1" step="1" id="height">
                </div>
            </div>
        </div>
        <?php include('../assets/include/footer.php'); ?>
        <script>
            (()=>{
                const e=document.getElementById("container"),
                t=document.getElementById("logo"),
                l=document.getElementById("keywords"),
                n=document.getElementById("width"),
                d=document.getElementById("height"),
                i=document.getElementById("search");
                e.clientWidth<330&&(e.style.width=" 300px",t.style.width=" 300px"),
                e.clientWidth>444&&(e.style.width=" 444px"),
                l.style.width=e.clientWidth-80+"px";
                i.addEventListener("click",()=>{
                    const e=l.value.replace(/[　 ]+/g," ").trim();
                    if(e.length>0&&n.value&&d.value&&Number.isInteger(n.value-0)&&Number.isInteger(d.value-0)){
                        const t="https://www.google.com/search?tbm=isch&q="+e+"+imagesize:"+n.value+"x"+d.value;
                        window.open(t, '_blank')
                    }
                })
            })();
        </script>
    </body>
</html>