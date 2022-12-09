<?php
    include_once 'header.php'
?>
            <?php
                if (isset($_SESSION['userId'])) {
                    echo '
                    <div class="body">
                    <h1>Publicē arī savas domas</h1>
                        <form action="templates/comment.inc.php" method="POST">
                            <h6>Tēma</h6>
                            <input type="text" name="title" class="input1" placeholder="Grāmatas vai dziesmas nosaukums"><br>
                            <h6>Reitings</h6>
                            <input type="text" name="rating" class="input1" placeholder="1-5 zvaigznes"><br>
                            <h6>Atziņa</h6>
                            <textarea type="text" name="review" class="input2" placeholder="jūsu domas"></textarea><br><br>
                            <button type="submit" name="comment"><a>Publicēt</a></button>
                        </form>
                    </div>';
                }
                else {
                    echo '<br><div class="contents">Lai veiktu ierakstus jums ir nepieciešams pieslēgties <br><br> <button class="navbtn"><a href="login.php">Pieslēgties</a></button></div>';
                }
            ?>
<?php
    include_once 'footer.php'
?>