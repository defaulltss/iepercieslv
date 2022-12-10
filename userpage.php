<?php
    include_once 'header.php'
?>
<?php 
      require 'templates/dbh.inc.php';

      $sql = "SELECT * FROM users";
      $result = $conn->query($sql);
?>
<div class="body">
    <br><h3>Visa jūsu informācija</h3>
    <?php
      if (isset($_SESSION['userId'])){
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              if ($row['users_id'] == $_SESSION['userId']){
                echo 'Vārds     : '.$row['users_firstname']. '<br>';
                echo 'Uzvārds   : '.$row['users_lastname']. '<br>';
                echo 'E-pasts   : '.$row['users_uid']. '<br>';
                  }
              }
            }
      }
      ?>
    <br><a href="ierkasti.php">Mani veiktie ierkasti </a>
</div>
<?php
    include_once 'footer.php'
?>
