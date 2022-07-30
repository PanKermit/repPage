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
            <div id="wrot">
                <form action="shopee.php" method="POST">
                    <button>Powrót</button>
                </form>
            </div>
    
        <div id="shop">
            <div id="mot">
                <form action="order.php" method="post">
                    <h3>Zamówienie</h3>
                    <div class="produkt">
                    <p>Intel Core i5-4690</p>
                    <a href="#"><img src="images/intel.png"></a>
                    <p>Cena:180 PLN</p>
                    Ilość:
                    <input type="number" name="intel" id="inti">
                    </div>

                    <div class="produkt">
                    <p>AMD Ryzen 3 1200</p>
                    <a href="#"><img src="images/amd.png"></a>
                    <p>Cena:280 PLN</p>
                    Ilość
                    <input type="number" name="amd" id="amdi">
                    </div>

                    <div class="produkt">   
                    <p>Intel Xeon E7-4830</p>
                    <a href="#"><img src="images/xeon.png"></a>
                    <p>Cena:30 PLN</p>
                    Ilość
                    <input type="number" name="xeon">
                    </div>

                    <div class="produkt">
                    <p>Amd Athlon 4600</p>
                    <a href="#"><img src="images/athlon.png"></a>
                    <p>Cena:29.99 PLN</p>
                    Ilość
                    <input type="number" name="athlon">
                    </div>

                    <br/><h4>s</h4><br/>

                    <div id="up">
                        <input type="submit" value="Zamów">
                    </div>
                </form>
                
        </form>
            </div>
            <footer>SKLEP Z TANIMI PROCESORAMI</footer>
        </div>

    </body>
</html> 