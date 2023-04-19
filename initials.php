<?php
    require('database.php');
    session_start();

    if (isset($_POST['initials'])) {
        $initials = $_POST['initials'];

        $sql = "INSERT INTO account(initials) VALUES ('$initials')
        WHERE id = $id";
    }
    
?>