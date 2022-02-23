<?php

class MyFunction {

    public $conf_path;
    public $title;

    public function __construct($conf_path = "", $title = "Monster2408") {
        $this->conf_path = $conf_path;
        $this->title = $title;
    }

    public function printCommonHead($css = "style.min.css") {
        include($this->conf_path);
        echo $html["common_head"];
        echo '<link rel="stylesheet" href="'.$conf["url"].'/assets/css/'.$css.'">';
        if (strpos($this->title, "Monster2408") === false) {
            echo "<title>".$this->title." | Monster2408</title>";
        } else {
            echo "<title>".$this->title."</title>";
        }
        echo "</head>";
        echo "<body>";
        echo "<div class='wrapper'>";
    }
    
    public function printCommonFoot() {
        include($this->conf_path);
        echo $html["common_foot"];
    }
    
    public function printFooter() {
        include($this->conf_path);
        echo '<div class="footer-center">';
        echo '<span><a href="'.$conf["url"].'/">トップページ</a></span><br>';
        echo '<span><a href="'.$conf["url"].'/privacy-policy">プライバシーポリシー</a></span><br>';
        echo '<span class="name"> Monster2408 &copy; 2021-'.date("Y").'</span>';
        echo '</div>';
    }

    public function printHeader() {
        echo '<header><span>'.$this->title.'</span></header>';
    }

    public function getUrl() {
        include($this->conf_path);
        return $conf["url"];
    }
}


?>