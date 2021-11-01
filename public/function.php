<?php

function printCommonHead() {
    include("./assets/config.php");
    echo $html["common_head"];
}

function printCommonFoot() {
    include("./assets/config.php");
    echo $html["common_foot"];
}


?>