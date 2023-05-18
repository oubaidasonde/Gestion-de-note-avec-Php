<?php
require('./Etudiant.php');
session_start();
if (!$fp1 = fopen("notes.txt","r")){ echo "Echec de l'ouverture du fichier "; exit; }
else 
{
    while (!feof ($fp1)){
        $Line1 = fgets ($fp1);
        if (strlen($Line1)>0) {
            $Tab1 = explode (';' , $Line1);
            $_SESSION['students'][]=new Etudiant($Tab1[0],$Tab1[1], $Tab1[2]);
            // $_SESSION['students'][]->getnom() = $Tab1[0];
            // $_SESSION['students'][]-> = $Tab1[1];
            // $_SESSION['students'][] = $Tab1[2];
        }
    }
    fclose($fp1);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>F4</title>
</head>
<body>
    <button><a href="infos.php">Nouveau</a></button>
    <button><a href="connexion.php">Annuler</a></button>
    <table id="MonTab">
      <tr>
         <th>Nom</th>
         <th>Math</th>
         <th>Info</th>
         <th>Moyenne</th>
         <th>Mention</th>
      </tr>

      <form method="post">
    <?php
            for ($i=0; $i <count($_SESSION['students']) ; $i++) { 
               $_SESSION['students'][$i]->affichage();

            }



?>
   </form>
   </table>

    
</body>
</html>