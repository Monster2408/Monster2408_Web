<?php

class MyFunction {

    public $conf_path;
    public $title;
    public $footerContents;
    public $headContents;

    public $custom_css_list;
    public $style_css;

    public function __construct($conf_path = "", $title = "Monster2408") {
        $this->conf_path = $conf_path;
        $this->title = $title;

        include($this->conf_path);
        $this->footerContents = [
            '<a href="'.$conf["url"].'/">トップページ</a>',
            '<a href="'.$conf["url"].'/privacy-policy">プライバシーポリシー</a>',
            'Monster2408 &copy; 2021-'.date("Y")
        ];
        $this->headContents = [];
        $this->custom_css_list = [];
        $this->style_css = "style.min.css";
    }

    public function addFooterContent($content) {
        $this->footerContents = array_merge(array($content), $this->footerContents);
    }

    public function addHeadContent($content) {
        $this->headContents = array_merge(array($content), $this->headContents);
    }

    /**
     * add css file to custom css list
     * @param string $file_name css file name
     * @return void
     */
    public function addCustomCss($file_name) {
        $this->custom_css_list = array_merge(array($file_name), $this->custom_css_list);
    }

    public function setMainCss($file_name) {
        $this->style_css = $file_name;
    }

    public function printCommonHead() {
        include($this->conf_path);
        echo $html["common_head"];
        echo '<link rel="stylesheet" href="'.$conf["url"].'/assets/css/'.$this->style_css.'">';
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
        if (sizeof($this->custom_css_list) > 0) {
            foreach ($this->custom_css_list as $item) {
                echo '<link rel="stylesheet" href="'.$conf["url"].'/assets/css/'.$item.'">';
            }
        }
        echo "</head>";
    }
    
    public function printCommonFoot() {
        include($this->conf_path);
        echo $html["common_foot"];
    }
    
    public function printFooter($num = -1) {
        include($this->conf_path);
        if ($num == -1) {
            echo '<ul class="footer-center">';
        } elseif ($num == 0) {
            echo '<ul class="footer-center" style="position: static;">';
        } else {
            echo '<ul class="footer-center">';
        }
        foreach ($this->footerContents as $item) {
            echo '<li>'.$item.'</li>';
        }
        echo '</ul>';
    }

    public function printHeader() {
        echo '<header><span>'.$this->title.'</span></header>';
    }

    public function getUrl() {
        include($this->conf_path);
        return $conf["url"];
    }

    public function send_to_discord($message, $ip, $type = "other") {
        include($this->conf_path);
        $contentsBlocker = [
            "5.188.211.10",
            "5.188.211.9",
            "49.250.233.40",
            "153.226.133.219"
        ];
        if (in_array($ip, (array)$contentsBlocker, true)) {
            return FALSE;
        }
        if (in_array($type, (array)$conf["discord-webhook"]["thread_id"], true) === FALSE) {
            return FALSE;
        }
        $webhook_url = $conf["discord-webhook"]["url"]
        $thread_id = $conf["discord-webhook"]["thread_id"][$type];
        $hookObject = json_encode($message);
        $ch = curl_init();
        curl_setopt_array( $ch, [
            CURLOPT_URL => $webhook_url,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $hookObject,
            CURLOPT_HTTPHEADER => [
                "Length" => strlen($hookObject),
                "Content-Type" => "application/json"
            ]
        ]);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
            'Content-Type: application/json'
        ));
        $response = curl_exec( $ch );
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $header = substr($response, 0, $header_size);
        $body = substr($response, $header_size);
        curl_close($ch);
        return TRUE; //$responseの値がokならtrueを返す
    }
}


?>