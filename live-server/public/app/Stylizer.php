<?php 
foreach (glob("./app/styles/*.html") as $resource)
{
    include $resource;
}

?>
