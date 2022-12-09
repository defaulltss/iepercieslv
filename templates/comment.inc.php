<?php

if (isset($_POST['comment'])) {

    require 'dbh.inc.php';
    
    $title = $_POST['title'];
    $rating = $_POST['rating'];
    $review = $_POST['review'];

    if (empty($title) || empty($rating) || empty($review)) {
        header("Location: ../forums.php?error=emtpyfields");
        exit();
    }
    else {
        $stmt = mysqli_stmt_init($conn);
        $sql = "INSERT INTO posts (title, rating, review) VALUES (?,?,?)";
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../forums.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "sss", $title, $rating ,$review,);
            mysqli_stmt_execute($stmt);
            header("Location: ../forums.php?signup=postmade");
            exit();
        }
    }
}