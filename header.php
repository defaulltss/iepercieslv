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
    <nav class="navbar navbar-expand-lg bg-gray">
    <div class="container-fluid">
        <a class="navbar-brand" style="font-size:large;">Iepercies</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" style="font-size:large;" aria-current="page" href="index.php">Sākums</a>
            <a class="nav-link active" style="font-size:large;" href="statistics.php">Forums</a>
            <a class="nav-link disabled">Par mums</a>
        </div>
        </div>
        <button class="btn"><a href="login.php">Pieslēgties</a></button>
    </div>
    </nav>
</header>
<main>