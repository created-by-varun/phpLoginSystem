<?php
    require "header.php";
?>

    <main>

        <?php
            if(isset($_SESSION['userId'])){
                echo '<p class="login-status">You are logged in</p>';
            } 
        ?>
    </main>

<?php
    require "footer.php";
?>
