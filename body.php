<?php
    $pathSegments = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
    
    if (isset($pathSegments[1])) {
        switch ($pathSegments[1]) {
            case "about-us":
                // echo "test - About";
                include("about.php");
                break;
        
            default:
                echo "test - Default";
                // include("home.php");
                break;
        }
    } else {
        // echo "test - Default (No second segment)";
        include("home.php");
    }
?>