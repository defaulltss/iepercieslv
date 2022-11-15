<?php
    include_once 'header.php'
?>


<div class="body">
  <br><br><br>
    <h1 style="text-align:center;" class="sveiciens">Sveicināti mana jaunuzņēmumā</h1>
    <br><br>
    <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
          <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <h1 class="display-4 fw-bold lh-1">text ?</h1>
                <br>
            <p class="lead">yow</p>
                <br>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
              <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold" style="margin-left: 39%;" id="login">Pieslēgties</button>
            </div>
          </div>
          <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
            <img>
        </div>
      </div>
</div>
<div>
</div>
<script>
document.getElementById("login").addEventListener("click", redirectFunction)

function redirectFunction(){
    window.location.href = "login.php"
}
</script>


<?php
    include_once 'footer.php'
?>