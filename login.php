<?php
    include_once 'header.php'
?>
<div class="body">
    <h6>E-pasts</h6>
    <input type="text"><br>
    <h6>Parole</h6>
    <input type="text"><br><br>
    <button type="submit"><a>Pieslēgties</a></button><br>
    <h5>nevari pieslēgties ? tad reģistrējies</h5>
    <button type="submit" id="register"><a>Registreties</a></button>
</div>
<script>
document.getElementById("register").addEventListener("click", redirectFunction)

function redirectFunction(){
    window.location.href = "register.php"
}
</script>
<?php
    include_once 'footer.php'
?>
