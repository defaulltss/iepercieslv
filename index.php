<?php
    include_once 'header.php'
?>
<?php 
      require 'templates/dbh.inc.php';

      $sql = "SELECT * FROM users";
      $result = $conn->query($sql);
?>


<div class="body">
    <br><br>
    <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
          <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <h1 class="display-4 fw-bold lh-1">Iepazīsti pasauli caur mūziku un fantāziju</h1>
                <br>
            <p class="lead">Droši izveido savu profilu un jau drīzumā arī tu varēsi publicēt savas domas par dziesmām un grāmatām</p>
          </div>
          <div class="col-lg-3 offset-lg-1 p-0" style="border-radius:20px;">
            <img src="static/img/music.jpg" style="height:20%; width: 120%; border-radius: 20px;" >
        </div>
      </div>
  </div>
  <div class="underhero">
      <?php
      if (isset($_SESSION['userId'])){
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              if ($row['users_id'] == $_SESSION['userId']){
                echo 'Sveiki, '.$row['users_firstname'];
                  }
              }
            }
      }
      ?>
  </div>
</div>
<?php
    include_once 'footer.php'
?>