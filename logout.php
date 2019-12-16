<?php require_once("inc/connect.php"); 
     if(@$_COOKIE["giris"]=='1'){
        $zaman=(86400 * 30);

        setcookie("giris", 0, time() - $zaman);
        if(@$_COOKIE["hatirla"]=='0'){
            setcookie("kid", $user, time() - $zaman);
            setcookie("sifre", $password, time() - $zaman);
        }

    }
    header("Location: signin.php"); 
