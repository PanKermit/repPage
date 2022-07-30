<?php 
    
    session_start();
    require_once "connect.php";
    
    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

    if($polaczenie->connect_errno>0)
    {
        echo "ERROR: ".$polaczenie->connect_errno;
    }
    else
    {
        $login=$_POST['login'];
        $password=$_POST['password'];
        
        $login=htmlentities($login, ENT_QUOTES, "UTF-8");
        $password=htmlentities($password, ENT_QUOTES, "UTF-8");

        $sql="SELECT * FROM username WHERE user='$login' AND password='$password'";
        if($answer=@$polaczenie->query(sprintf("SELECT * FROM username WHERE user='%s' AND password='%s'",
          mysqli_real_escape_string($polaczenie, $login),
        mysqli_real_escape_string($polaczenie,$password))))
        {
            $usersum=$answer->num_rows;
            if($usersum>0)
            {
                $wiersz=$answer->fetch_assoc();
                $_SESSION['user']=$wiersz['user'];
                $_SESSION['money']=$wiersz['money'];
                /*unset($_SESSION['blad']);*/
                #kutasie jak nie czyścisz połączenia to chuj ci w dupę
                $answer->free_result();

                header('Location: shopee.php');
            }
            else
            {
                /*$_SESSION='<span style="color:red;">Nieprawidłowy login lub hasło</span>';*/
                header('Location:index.php');
            }
        }
        $polaczenie->close();
    }

?>