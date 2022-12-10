<?php
    include_once 'header.php'
?>
<?php 
      require 'templates/dbh.inc.php';

      $sql = "SELECT * FROM books";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();

      $sql2 = "SELECT * FROM songs";
      $result2 = $conn->query($sql2);
      $row2 = $result2->fetch_assoc();
?>
<div class="body">
    <br><br>
        <h1>Publicē arī savas domas</h1>
            <br>
            <form action="templates/comment.inc.php" method="POST">
                <select class="select" name="books">
                    <option>Izvēlieties grāmatas nosaukumu</option>
                    <?php 
                    while($row = $result->fetch_assoc()) {
                        echo '<option>'.$row['book_name'].'</option>';
                      }
                    ?>
                    <option> </option>
                </select>
                <select class="select" name="songs">
                    <option>Izvēlieties dzeismas nosaukumu</option>
                    <?php 
                    while($row2 = $result2->fetch_assoc()) {
                          echo '<option>'.$row2['song_name'].'</option>';
                        }
                    ?>
                    <option> </option>
                </select> <br><br>
                <h6>Reitings</h6>
                <input type="text" name="rating" class="input1" placeholder="1-5 zvaigznes"><br><br>
                <h6>Atziņa</h6>
                <textarea type="text" name="review" class="input2" placeholder="jūsu domas"></textarea><br><br>
                <button type="submit" name="comment"><a>Publicēt</a></button>
            </form>
</div>';
<?php
    include_once 'footer.php'
?>