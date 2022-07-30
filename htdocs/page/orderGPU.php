<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">    
        <title>Zamówienie</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <?php

            $ati=$_POST['ati'];
            $had=$_POST['rad_had'];
            $gt630=$_POST['gt630'];
            $gtx=$_POST['gtx'];

            if($ati<0)
            {
                $ati=-$ati;
            }

            if($had<0)
            {
                $had=-$had;
            }

            if($gt630<0)
            {
                $gt630=-$gt630;
            }

            if($gtx<0)
            {
                $gtx=-$gtx;
            }

            $sumAti=80*$ati;
            $sumHad=$had*63;
            $sumGt630=$gt630*170;
            $sumGtx=$gtx*180;
            $sum=$sumAti+$sumGt630+$sumGtx+$sumHad;


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
                        $had
                    </td>
                        
                    <td>
                        63 PLN
                    </td>
                        
                    <td>
                        Radeon HD 6450
                    </td>

                    <td>
                        $sumHad
                    </td>
                </tr>

                <tr>
                    <td>
                        $gt630
                    </td>

                    <td>
                        170 PLN
                    </td>
                        
                    <td>
                        Gt630
                    </td>

                    <td>
                        $sumGt630
                    </td>
                </tr>

                <tr>
                    <td>
                        $gtx
                    </td>

                    <td>
                        180 PLN
                    </td>
                        
                    <td>
                        GTX 460
                    </td>

                    <td>
                        $sumGtx
                    </td>
                </tr>

                <tr>
                    <td>
                        $ati
                    </td>

                    <td>
                        80 PLN
                    </td>
                        
                    <td>
                        ATI Radeon
                    </td>

                    <td>
                        $sumAti
                    </td>
                </tr>
            </table>

            <p>Łączna suma zamównienia wynosi $sum PLN</p>
            END;
        ?>


        <P>Zamówienie zostało zrealizowane pomyślnie</P>
        <p>Cofnij do strony zamówień</p>
        
        <div id="wrot">
                <form action="shopee.php" method="POST">
                    <button>Powrót</button>
                </form>
            </div>

        <footer>SKLEP Z TANIMI KOMPONENTAMI KOMPUTEROWYMI</footer>
    </body>
</html>