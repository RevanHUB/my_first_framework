<?php 

class RoutesController {
    public function __construct() {
        require_once './app/models/Routes.php';
        $this->controller = new Routes();
    }
    public function __call($n, $args) {
        echo "invalid route";
    }
    public function Home() {
        require_once './app/views/Home.php';
    }

    // create a new view to your proyect in views and include the controller here
    
}



?>