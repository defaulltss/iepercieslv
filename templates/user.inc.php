<?php
    require 'dbh.inc.php';

    $sql = 'SELECT * FROM users WHERE users_firstname=? OR users_lastname=?';
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)){
            session_start();
            $_SESSION['firstname'] = $sql['users_firstname'];
            $_SESSION['lastname'] = $sql['users_lastname'];
        }
?>