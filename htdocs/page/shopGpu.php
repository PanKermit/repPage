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
        <?php 
            echo"Witaj ".$_SESSION['user']." <p>Stan twojego konta: ".$_SESSION['money']." PLN</p>";
        ?>
        <div id="container">
            <div id="wrot">
                <form action="shopee.php" method="POST">
                    <button>Powrót</button>
                </form>
            </div>


            <div id="shop">
                <div id="mot">
                    <form action="orderGPU.php" method="post">
                        <h3>Zamówienie</h3>
                        <div class="produkt">
                            <p> Radeon HD 6450 </p>
                            <a href="#"><img src="gpu/rad_had.png"></a>
                            <p>Cena:63 PLN</p>
                            Ilość:
                            <input type="number" name="rad_had">
                        </div>

                        <div class="produkt">
                            <p>Gt630</p>
                            <a href="#"><img src="gpu/gt630.png"></a>
                            <p>Cena:170 PLN</p>
                            Ilość
                            <input type="number" name="gt630">
                        </div>

                        <div class="produkt">
                            <p>GTX 460</p>
                            <a href="#"><img src="gpu/gtx460.png"></a>
                            <p>Cena:180 PLN</p>
                            Ilość
                            <input type="number" name="gtx">
                        </div>

                        <div class="produkt">
                            <p>ATI Radeon</p>
                            <a href="#"><img src="gpu/ati.png"></a>
                            <p>Cena:80 PLN</p>
                            Ilość
                            <input type="number" name="ati">
                        </div>

                        <br/><h4>s</h4><br/>

                        <div id="up">
                            <input type="submit" value="Zamów">
                        </div>
                    </form>
                
                </div>
            <footer>SKLEP Z TANIMI PROCESORAMI</footer>
        </div>
    </div>
    </body>
</html> 