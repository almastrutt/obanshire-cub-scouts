<?php

    if (isset($_POST['yes']))
    {
        session_start();
        $_SESSION = array ();
        session_destroy();
    }
    
    header("location:../index.php");
    exit;
    
?>    