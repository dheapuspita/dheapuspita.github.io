<?php
    session_start();
    session_destroy();
    header("location:../posttest7/login.php");
?>