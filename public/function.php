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


?>