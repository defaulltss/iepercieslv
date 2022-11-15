<style>
<?php include "static/clean.css";?>
</style>
<?php
   session_start(); 
?>

<!DOCTYPE html>
<html class="html">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<header class="header">
    <button class="button_open" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"></button>
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
        <butto class="button_close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <br><br><br><br>
                <div class="options2">
                    <a class="options" href="index.php">Sākums</a>
                        <br><br>
                    <a class="options" href="profile.php">Uzņēmuma profils</a>
                        <br><br>
                    <a class="options" href="statistics.php">Statistika</a>
                        <br><br>
                    <a class="options" href="userplatform.php" >Uzņēmuma platforma</a>
                        <br><br>
                    <a class="options" href="about.php">Par mums</a>
                <div>
        </div>
    </div>
</header>
<main>