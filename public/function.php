<?php

class MyFunction {

    public $conf_path;
    public $title;
    public $footerContents;
    public $headContents;

    public function __construct($conf_path = "", $title = "Monster2408") {
        $this->conf_path = $conf_path;
        $this->title = $title;

        include($this->conf_path);
        $this->footerContents = [
            '<span><a href="'.$conf["url"].'/">トップページ</a></span>',
            '<span><a href="'.$conf["url"].'/privacy-policy">プライバシーポリシー</a></span>',
            '<span class="name"> Monster2408 &copy; 2021-'.date("Y").'</span>'
        ];
        $this->headContents = [];
    }

    public function addFooterContent($content) {
        $this->footerContents = array_merge(array($content), $this->footerContents);
    }

    public function addHeadContent($content) {
        $this->headContents = array_merge(array($content), $this->headContents);
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
        if (sizeof($this->headContents) > 0) {
            foreach ($this->headContents as $item) {
                echo $item;
            }
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
        $temp = sizeof($this->footerContents);
        foreach ($this->footerContents as $item) {
            $temp = $temp - 1;
            echo $item;
            if ($temp > 0) {
                echo '<br>';
            }
        }
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