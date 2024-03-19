<?php

    require '../config.php';

    session_start();

    $_SESSION['total_seat'] = $_POST['total_seat'];
    $_SESSION['selected_room'] = $_POST['rooms'];
?>