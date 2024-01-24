<?php
    session_start();

    $userPsw = $_SESSION['user_password'];
    echo "<h3>Ecco la tua password: $userPsw</h3>";
?>