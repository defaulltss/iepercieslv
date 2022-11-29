<?php
    include_once 'header.php'
?>
<div class="body">
    <form action="templates/login.inc.php" method="POST">
        <h6>E-pasts</h6>
        <input type="text" name="mailuid" class="input"><br>
        <h6>Parole</h6>
        <input type="password" name="pwd" class="input"><br><br>
        <button type="submit" name="login-submit"><a>Pieslēgties</a></button><br><br>
        <a>nevari pieslēgties ? tad </a><a href="register.php">Reģistrējies</a>
    </form>
</div>
<?php
    include_once 'footer.php'
?>
