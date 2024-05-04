<?php

class MyFunction {
    private $conf_path;
    private $assets_path;
    private $css_list = array();
    private $footer_content = array();
    private $title;

    public function __construct($conf_path, $title) {
        $this->conf_path = $conf_path;
        $this->assets_path = str_replace("/assets/config.php", "", $conf_path);

        include($conf_path);
        $this->title = $title;
    }

    public function getNoCacheUrl($file_path) {
        return $this->getUrl().$file_path."?time=".filemtime($this->assets_path.$file_path);
    }

    public function getUrl() {
        include($this->conf_path);
        return $conf["url"];
    }

    public function printMetaData() {
        include($this->conf_path);
        echo $html["common_head"];
        echo '<link rel="stylesheet" href="'.$this->getNoCacheUrl('/assets/css/header.min.css').'">';
        echo '<link rel="stylesheet" href="'.$this->getNoCacheUrl('/assets/css/footer.min.css').'">';
        foreach($this->css_list as $css) {
            echo '<link rel="stylesheet" href="'.$this->getNoCacheUrl($css).'">';
        }
        echo "<!--  -->";
        echo "<title>".$this->title."</title>";
        echo "<style id='language_style'></style>";
    }

    public function printBottomCommon() {
        include($this->conf_path);
        echo '<script src="'.$this->getNoCacheUrl('/assets/js/bottom.js').'"></script>';
    }

    public function getAssetsPath() {
        return $this->assets_path;
    }

    public function addStyle($style_path) {
        $this->css_list = array_merge($this->css_list, array($style_path));
    }

    public function addFooterContent($footer_content) {
        $this->footer_content = array_merge($this->footer_content, array($footer_content));
    }

}