<?php
    include './app/models/config.php'; 
    include './app/controllers/RoutesController.php';
    include './app/controllers/ThemesController.php';
    if (isset($_GET['routes'])) {
        $route = $_GET['routes'];
        $route_controller = new RoutesController();
        $route_controller->$route();
    } else {
        $_GET['routes'] = "hom";
        // header('Location: index.php?routes=home&theme=light');
    }
    if (isset($_GET['theme'])) {
        $theme = $_GET['theme'];
        $theme_controller = new ThemesController();
        $theme_controller->buttonsController();
        $theme_controller->$theme();
    } 
    
   //import styles
    require_once './app/Stylizer.php';
?>