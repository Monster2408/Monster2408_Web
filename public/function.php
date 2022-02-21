<?php

function printCommonHead($conf_path, $title = "Monster2408") {
    include($conf_path);
    echo $html["common_head"];
    echo "<title>".$title."</title>";
    echo "</head><body><div class='wrapper'>";
}

function printCommonFoot($conf_path) {
    include($conf_path);
    echo $html["common_foot"];
}

function printFooter($basePath = "./") {
    echo '<div class="footer-center">';
    echo '<span><a href="'.$basePath.'index">トップページ</a></span><br>';
    echo '<span><a href="'.$basePath.'privacy-policy">プライバシーポリシー</a></span><br>';
    echo '<span class="name"> Monster2408 &copy; 2021-'.date("Y").'</span>';
    echo '</div>';
}


?>