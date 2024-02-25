<?php
header("Content-Type: text/plain");
if (isset($_GET["file"])) {
    $file = $_GET["file"];
    if (file_exists("../sample/" . $file)) {
        echo file_get_contents("../sample/" . $file);
    } else {
        echo "ファイルが見つかりませんでした。";
    }
} else {
    echo "ファイルが指定されていません。";
}