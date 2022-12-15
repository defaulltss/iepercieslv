<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){

    require 'dbh.inc.php';
    session_start();

    $name = $_POST['editname'];
    $lastname = $_POST['editlastname'];
    $uid = $_POST['edituid'];
    $userid = $_SESSION['userId'];

    #$sql = "UPDATE users SET users_firstname = $name, users_lastname = $lastname, users_uid = $uid WHERE users_id = $userid";

    if (empty($name) || empty($lastname) || empty($uid)) {
        header("Location: ../userpage.php?error=emtpyfields");
        exit();
    }
    else {
        $sql = "UPDATE users SET users_firstname = $name, users_lastname = $lastname, users_uid = $uid WHERE users_id = $userid";
        header("Location: ../userpage.php?signup=updated-successfull");
        exit();
    }
}
else {
    header("Location: ../userpage.php");
    exit();
}
?>