<?php 

class Theme {
    private $theme;

    public function __construct() {
    }
    public function getTheme() {
        return $this->theme;
    }
    public function setDark() {
        $this->theme = '#161616';
        echo "<style> * { background: ".$this->theme."; color: white;</style>";
    }
    public function setLight() {
        $this->theme = '#fafafa';
        echo "<style> * { background: ".$this->theme."; color: black;</style>";
    }
    public function button() {
        echo "<script src='./src/components/buttons/button.js'></script>";
    }
}

?>