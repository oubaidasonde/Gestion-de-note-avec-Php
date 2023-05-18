<?php
session_start();

$id = $_POST['id'];
$mdp = $_POST['pw'];


if (isset($_POST['check'])){
    setcookie('id',$_POST['id'], time() +24*3600);
    setcookie('pw',$_POST['pw'], time() +24*3600);
}

if (!$fp = fopen("login.txt","r")){ echo "Echec de l'ouverture du fichier "; exit; }
else 
{
    while (!feof ($fp)){
        $Line = fgets ($fp );
        $Tab = explode (';' , $Line );
        if ($Tab[0]== $id && $Tab[1]== $mdp) {header("Location: F4.php") ; break ;}
        else header("Location: connexion.php") ;
    }
}


?>
