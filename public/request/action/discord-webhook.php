<?php
header('Content-Type: application/json; charset=utf-8');
if (isset($_POST["type"]) && isset($_POST["detail"])) {
    $type = $_POST["type"];
    $detail = $_POST["detail"];

} else {

}