<?php

if (isset($_POST['login-submit'])) {

    require 'dbh.inc.php';

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if (empty($mailuid) || empty($password)) {
        header("Location: ../login.php?error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE users_uid=? OR users_pwd=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../login.php?error=sqlerror");
            exit();
        }
        else {       
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);                                // tagad tiks parbaudits vai mainigais $result ir tukss vai ne
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['users_pwd']);          // parole tiks unhashota un tiks parbaudita vai ta parole ar ko lietotajs sledzas klat ir ta pati kas ir datubaze
                if ($pwdCheck == false) {
                    header("Location: ../login.php?error=wrongpassword");
                    exit();
                }
                else if ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['users_id'];
                    $_SESSION['userUid'] = $row['users_uid'];

                    header("Location: ../index.php?login=success");
                    exit();
                }
                else {
                    header("Location: ../login.php?error=wrongpassword");
                    exit();
                }
            }
            else {
                header("Location: ../login.php?error=nouser");
                exit();
            }
        }
    }

}
else {
    header("Location: ../index.php");
    exit();
}