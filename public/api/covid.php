<?php
include_once("../function.php");
$conf_path = "../assets/config.php";
$func = new MyFunction($conf_path, "Covid");

$func->printCommonHead("covid.min.css");
$func->addFooterContent('<span><a href="https://github.com/ryo-ma/covid19-japan-web-api">powered by covid19-japan-web-api</a></span>');
?>
<body class="mc">
    <div class="wrapper">
        <div class="all_center">
            <div class="black_box">
                <?php $func->printHeader(); ?>
                <table class="covid">
                    <tr class="thead">
                        <th></th>
                        <th>発生件数</th>
                        <th>死者数</th>
                        <th>PCR件数</th>
                    </tr>
                    <?php
                        $url="https://covid19-japan-web-api.now.sh/api/v1/prefectures";
                        $json=file_get_contents($url);
                        $arr=json_decode($json,true);
                        foreach($arr as $data){
                            $tag = "";
                            if (strpos($data['name_ja'], "沖縄") !== false) {
                                $tag = " class='last'";
                            }
                            echo "<tr".$tag.">";
                            echo "<td>".$data['name_ja']."</td>";
                            echo "<td class='occurrence' data-label='発生件数'>".$data['cases']."件</td>";
                            echo "<td class='deceased' data-label='死者数'>".$data['deaths']."人</td>";
                            echo "<td class='pcr' data-label='PCR件数'>".$data['pcr']."件</td>";
                            echo "</tr>";
                        }
                    ?>
                </table>
            </div>
            <?php $func->printFooter(0); ?>
        </div>
        <?php $func->printCommonFoot(); ?>
    </div>
</body>