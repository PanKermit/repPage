<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <title>Procesors for schools</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
    
                <div id="log">
                    <form action="log.php" method="POST">
                        Login:</br>
                        <input type="text" name="login"/></br>
                        Hasło:</br>
                        <input type="password" name="password"/></br>
                        </br>
                        <input type="submit" value="Zaloguj"/>

                    </form>
                    <?php
                        /*echo $_SESSION['blad'];*/
                    ?>
                </div>

            <footer>SKLEP Z TANIMI KOMPONENTAMI KOMPUTEROWYMI</footer>
    </body>
</html> 