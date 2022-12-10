<?php
    include_once 'header.php'
?>
<?php 
      require 'templates/dbh.inc.php';
      require 'templates/comment.inc.php';

      $sql = "SELECT * FROM post";
      $result = $conn->query($sql);

      $sql2 = "SELECT * FROM books, songs";
      $result2 = $conn->query($sql2);
?>
<div class="body">
<br><br>
    <?php
      if (isset($_SESSION['userId'])){
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              if ($row['users_id'] == $_SESSION['userId']){
                echo 'Post-id                   : '.$row['post_id']. '<br>';
                while($row2 = $result2->fetch_assoc()){
                    if ($row['book_id'] == $row2['book_id']){
                        echo 'Nosaukums         : '.$row2['book_name']. '<br>';
                        break;
                    }
                    else if ($row['song_id'] == $row2['song_id']){
                        echo 'Nosaukums         : '.$row2['song_name']. '<br>';
                        break;
                    }
                }
                echo 'Reitings                  : '.$row['rating']. '<br>';
                echo 'Atziņa                    : '.$row['review']. '<br>';
                echo 'Datums kad pievienots     : '.$row['date_added']. '<br>';
                echo '<br><br>';
                  }
              }
            }
      }
      ?>
</div>
<?php
    include_once 'footer.php'
?>