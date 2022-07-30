<?php 
    session_start();
?>  
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">    
        <title>Zamówienie</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>

    <body>
        <?php 
            echo"Witaj ".$_SESSION['user']." <p>Stan twojego konta: ".$_SESSION['money']." PLN</p>";
        ?>
        <?php 
            $intel=$_POST['intel'];
            $amd=$_POST['amd'];
            $xeon=$_POST['xeon'];
            $athlon=$_POST['athlon'];
            
            if($amd<0)
            {
                $amd=-$amd;
            }
            
            if($intel<0)
            {
                $intel=-$intel;
            }
            
            if($xeon<0)
            {
                $xeon=-$xeon;
            }
            
            $sumIntel=180*$intel;
            $sumAmd=280*$amd;
            $sumXeon=30*$xeon;
            $sumAthlon=29.99*$athlon;
            $sum=$sumIntel+$sumAmd;
            /*echo "$intel x Intel ";
            echo "$amd x Amd";*/

            echo<<<END
            <table border="1" cellpadding="10" cellspace="0">
                <tr>
                    <td>
                        Ilość
                    </td>
                    <td>
                        Cena
                    </td>

                    <td>
                        Nazwa
                    </td>

                    <td>
                        Suma
                    </td>
                </tr>
                <tr>
                    <td>
                        $intel
                    </td>
                        
                    <td>
                        180PLN/szt
                    </td>
                        
                    <td>
                        Intel
                    </td>

                    <td>
                        $sumIntel
                    </td>
                </tr>

                <tr>
                    <td>
                        $amd
                    </td>

                    <td>
                        280PLN/szt
                    </td>
                        
                    <td>
                        AMD
                    </td>

                    <td>
                        $sumAmd
                    </td>
                </tr>

                <tr>
                    <td>
                        $xeon
                    </td>

                    <td>
                        30PLN/szt
                    </td>
                        
                    <td>
                        XEON
                    </td>

                    <td>
                        $sumXeon
                    </td>
                </tr>

                <tr>
                    <td>
                        $athlon
                    </td>

                    <td>
                        29.99PLN/szt
                    </td>
                        
                    <td>
                        XEON
                    </td>

                    <td>
                        $sumAthlon
                    </td>
                </tr>
            </table>
            
            <p>Łączna suma zamównienia wynosi $sum PLN</p>
            END;
        ?>
        <button type="button" onclick="druk();">Wydrukuj</button>

        <P>Zamówienie zostało zrealizowane pomyślnie</P>
        
            <div id="wrot">
                <form action="shopee.php" method="POST">
                    <button>Powrót</button>
                </form>
            </div>
            <iframe src="https://pl.crazygames.com/embed/age-of-war" style="width: 1000px; height: 250px;" frameborder="0"></iframe>
        <footer>SKLEP Z TANIMI KOMPONENTAMI KOMPUTEROWYMI</footer>
    </body>
</html>