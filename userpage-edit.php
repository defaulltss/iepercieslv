<?php
    include_once 'header.php'
?>
<?php 
      require 'templates/dbh.inc.php';

      $sql = "SELECT * FROM users";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();

      while($row = $result->fetch_assoc()) {
        if ($row['users_id'] == $_SESSION['userId']){
          $name = $row['users_firstname'];
          $lastname = $row['users_lastname'];
          $email = $row['users_uid'];
            }
        }
?>
<div class="body">
    <br><h3>Veiciet jūsu izmaiņas</h3>
      <form method="POST" action="templates/profileupdate.inc.php">
        <p>Vārds :</p><input type="text" name="editname" value="<?=$name?>" class="input">
        <p>Uzvārds :</p><input type="text" name="editlastname" value="<?=$lastname?>" class="input">
        <p>E-pasts :</p><input type="text" name="edituid" value="<?=$email?>" class="input">
      </form>           
    <br><button type="submit" name="edituser"><a>Saglabāt</a></button>
    <a href="userpage.php">Atcelt</a>
</div>
<?php
    include_once 'footer.php'
?>