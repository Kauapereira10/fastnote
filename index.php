<?php
header('Location: ...'); 
    session_start();

    if (isset($_SESSION['user_id'])) {
        header('Location: dashboard.php');
    } else {
        header("Location: views/login.php");
    }
    exit();
    

   
?>