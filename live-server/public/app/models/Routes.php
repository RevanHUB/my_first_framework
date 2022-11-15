<?php 
class Routes {
    public $routes;
    public function setRoute() {
        if(isset($_GET['route'])) {
            $this->routes = $_GET['route'];
        } else {
            $this->routes = "Home";
        }
    }

}
?>
