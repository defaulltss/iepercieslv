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
        <a class="navtext" href="index.php">Sākums</a>
        <a class="navtext" href="posts.php">Forums</a>
        <?php
                if (isset($_SESSION['userId'])) {
                    echo '<a class="navtext" href="forums.php">Veikt ierakstu</a>';
                    echo '<a class="navtext" href="userpage.php">Profils</a>';
                    echo '<a class="navtext" href="templates/logout.inc.php">Atslēgties</a>';
                }
                else {
                    echo '<a class="navtext" href="login.php">Pieslēgties</a>';
                }
            ?>
</header>
<main>