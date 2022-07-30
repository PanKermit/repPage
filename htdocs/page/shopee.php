<?php  
    session_start();
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">    
        <title>Sklep</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <?php 
            echo"Witaj ".$_SESSION['user']." <p>Stan twojego konta: ".$_SESSION['money']." PLN</p>";
            echo'[<a href="index.php">Wyloguj</a>]';
        ?>

        <div id="tom">
            <div id="men">
                
                <ul>
                    <li>
                        <a href="shopGpu.php">Karty Graficzne</a>
                    </li>

                    <li>
                        <a href="shop.php">Procesory</a>
                    </li>

                    <li>
                        <a href="#" onclick="info();">Centralki</a>
                    </li>

                    <li>
                        <a href="#">Monitory</a>
                    </li>
                </ul>
            </div>
            <p id="inf"></p>
            <div id="tex">
                Znajdujesz się w menu. Wybierz sekję komponentów która cię interesuje.
            </div>
        </div>
        <footer>|SKLEP Z TANIMI KOMPONENTAMI KOMPUTEROWYMI|</footer>
    </body>
</html>