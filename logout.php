<?php

    session_start();
    session_unset();
    session_destroy();

    header("Location: login.php");
    setcookie("users", "", time() - 3600, "/");
    exit();
?>