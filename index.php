<?php
    include_once 'header.php'
?>


<div class="body">
  <br><br><br>
    <h1 style="text-align:center;" class="sveiciens">Sveicināti mana jaunuzņēmumā</h1>
    <?php
      if (isset($_SESSION['userId'])) {
        echo '<h5 style="text-align:center;" class="sveiciens">Jūs esat reģistrējies</h5>';
      }
      else {
        echo '<h5 style="text-align:center;" class="sveiciens">Jūs nēesat reģistrējies</h5>';
      }
    ?>
    <br><br>
    <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
          <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <h1 class="display-4 fw-bold lh-1">text ?</h1>
                <br>
            <p class="lead">yow</p>
          </div>
          <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
            <img>
        </div>
      </div>
</div>
</div>
<?php
    include_once 'footer.php'
?>