<?php
    include_once 'header.php'
?>
<?php 
      require 'templates/dbh.inc.php';

      $sql = "SELECT * FROM users";
      $result = $conn->query($sql);
?>
<div class="body">
    <h1>šeit būs redzams lietotaja profils</h1>
    <?php
      if (isset($_SESSION['userId'])){
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              if ($row['users_id'] == $_SESSION['userId']){
                echo 'Vārds : '.$row['users_firstname']. '<br>';
                echo 'Uzvārds : '.$row['users_lastname']. '<br>';
                echo 'E-pasts : '.$row['users_uid']. '<br>';
                  }
              }
            }
      }
      ?>
</div>
<?php
    include_once 'footer.php'
?>
