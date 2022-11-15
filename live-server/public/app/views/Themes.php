<br>

<?php 
    $theme = $_GET['theme'];
    echo "Theme is: ". $theme; 
    if ($theme === 'dark') {
        echo '<button id="theme" value="dark">☀️</button>';
    } else {
        echo '<button id="theme" value="light">🌙</button>';
    }
    echo "<script src=''></script>"
?>

<style>
    button {
        background:transparent;
        border:0px;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        padding:10px;
        border-radius:50%;
        cursor:pointer;
        margin:20px 0px 0px 0px;
    }
    button:hover, button:active, button:focus {
        box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
    }
</style>