<?php
    require_once __DIR__ . '/../config/config.php';
    require_once __DIR__ . '/auth.php';

    if(is_logged_in()){
        session_unset();
        session_destroy();

        header("Location: ../public/loginpage.php");
        exit;
    }
?>