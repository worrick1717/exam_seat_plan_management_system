<?php

    require '../config.php';

    session_start();
    $_SESSION['total_std'] = $_POST['total_std'];
    $_SESSION['selected_class'] = $_POST['classes'];
?>