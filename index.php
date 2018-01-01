<?php
    
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
        
        if(file_exists("app/views/$page.php")) {
            include "app/views/$page.php";
        } else {
            include "app/views/page404.php";
        }
?>