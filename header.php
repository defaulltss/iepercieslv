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
    <div>
        <a class="navtext" style="font-size:large;" href="index.php">Sākums</a>
        <a class="navtext" style="font-size:large;" href="forums.php">Forums</a>
            <?php
                if (isset($_SESSION['userId'])) {
                    echo '<button class="navbtn"><a class="navbtn"href="userpage.php">Profils</a><button>
                    <form action="templates/logout.inc.php" method="POST">';
                    echo '<button class="navbtn" type="submit" name="logout-submit">atlsēgties</button>
                    </form>';
                }
                else {
                    echo '<button class="navbtn"><a href="login.php">Pieslēgties</a></button>';
                }
            ?>
    </div>
</header>
<main>