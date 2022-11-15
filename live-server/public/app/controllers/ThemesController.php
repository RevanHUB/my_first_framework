<?php 

class ThemesController {
    private $controller;
    public function __construct() {
        require_once './app/models/Theme.php';
        $this->controller = new Theme();
        require_once './app/views/Themes.php';
    }
    public function __call($n, $args) {
        echo "Invalid code of color";
    }
    public function dark() {
        $this->controller->setDark();
    }
    public function light() {
        $this->controller->setLight();
    }
    public function default() {
        $this->controller->setLight();
    }
    public function buttonsController() {
        $this->controller->button();
    }

}



?>