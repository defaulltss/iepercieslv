<?php

if (isset($_POST['comment'])) {

    session_start();
    require 'dbh.inc.php';

    $sql = "SELECT * FROM books";
    $result = $conn->query($sql);

    $sql2 = "SELECT * FROM songs";
    $result2 = $conn->query($sql2);
    
    $user = $_SESSION['userId'];
    $book = $_POST['books'];
    $song = $_POST['songs'];
    $rating = $_POST['rating'];
    $review = $_POST['review'];

    if (empty($song)) {
    while($row = $result->fetch_assoc()){
        if($book == $row['book_name']){
            $book_id = $row['book_id'];
        }
    }
    }
    if (empty($book)) {   
    while($row2 = $result2->fetch_assoc()){
        if($song == $row2['song_name']){
            $song_id = $row2['song_id'];
        }
    }
    }

    if (empty($rating) || empty($review)) {
        header("Location: ../forums.php?error=emtpyfields");
        exit();
    }
    else {
        $stmt = mysqli_stmt_init($conn);
        $sql = "INSERT INTO post (users_id, book_id, song_id, rating, review) VALUES (?,?,?,?,?)";
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../forums.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "sssss",$user, $book_id, $song_id, $rating ,$review,);
            mysqli_stmt_execute($stmt);
            header("Location: ../forums.php?signup=postmade");
            exit();
            
        }
    }
}