<?php
include_once("../function.php");
$conf_path = "../assets/config.php";
$func = new MyFunction($conf_path, "Google画像検索【サイズ指定】");
$func->addFooterContent('<span><a href="https://www.google.com/">powered by Google</a></span>');

$func->printCommonHead();
?>
<link rel="stylesheet" href="<?php echo $func->getUrl(); ?>/assets/css/google_img_search.min.css">
<div class="all_center">
    <div class="black_box">
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
        <?php $func->printFooter(); ?>
    </div>
</div>
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
<?php $func->printCommonFoot(); ?>