<?php

class MyFunction {
    private $conf_path;
    private $assets_path;

    public function __construct($conf_path, $title) {
        $this->conf_path = $conf_path;
        $this->assets_path = str_replace("/assets/config.php", "", $conf_path);

        include($conf_path);
    
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
    }

    public function getAssetsPath() {
        return $this->assets_path;
    }

}