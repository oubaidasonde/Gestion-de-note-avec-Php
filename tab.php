<?php



require('./Etudiant.php');

$fichier = "./notes.txt";
// $student = array();
$moyenne = -1;
$mention = 'NULL';
session_start();
if (isset($_POST['submit'])) {
   $_SESSION['students'][]=new Etudiant($_POST['etud'],$_POST['Mt'], $_POST['inf']);
 


     
}

if (isset($_POST['modifier2'])) {
   $_SESSION['students'][$_SESSION['index']]->setnom($_POST['etud1']);
   $_SESSION['students'][$_SESSION['index']] ->setmath($_POST['Mt1']);
   $_SESSION['students'][$_SESSION['index']] ->setinfo( $_POST['inf1']);

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style2.css">
   <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css"
  rel="stylesheet"
/>

   <title>Document</title>
</head>
<body>
   <div class="container2">
      <button classe="btn btn1"><a href="infos.php">Nouveau</a></button>
      <button classe="btn btn1" ><a href="destroysession.php">Annuler</a></button>

      <form  method="post" >
      <button classe="btn btn1" name="enregistrer">Enregistrer</button>
      </form>
      
   </div>
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
               echo'
               <td> <button name="modifier"  value="'.$i.'" class="btn btn-outline-success btn-floating " ><i class="fas fa-edit"></i></button>
               </td>
               <td><button name="supprimer"  value="'.$i.'" class="btn btn-outline-danger btn-floating " ><i class="far fa-trash-alt"></i></button>
               </td>
               <td> <button name="imprimer"  value="'.$i.'" >Imprimer</button>
               </td>';

            }



?>
   </form>

   <?php

      
      if (isset($_POST['modifier'])) {
         $_SESSION['index'] =  $_POST['modifier'];
         header("location: modification.php");
     }
     if (isset($_POST['imprimer'])) {
      $_SESSION['index'] =  $_POST['imprimer'];
      header('location: pdf.php');
  }

 

  if (isset($_POST['supprimer'])) {
   array_splice($_SESSION['students'],$_POST['supprimer'] ,1);
   header('location: tab.php');
}
if (isset($_POST['imprimer'])) {
   $_SESSION['index'] =  $_POST['imprimer'];
   header('location: pdf.php');
}


      ?>
      </form>
      
   </table>

   <?php
   if (isset($_POST['enregistrer'])) {
      $fp = fopen("notes.txt","w");
      for ($i=0; $i <count($_SESSION['students']) ; $i++){
         $Line[0] = $_SESSION['students'][$i]->getnom();
         $Line[1] = $_SESSION['students'][$i]->getmath();
         $Line[2] = $_SESSION['students'][$i]->getinfo();
         fputcsv($fp, $Line , ";");
      }
      fclose ($fp);
   }
      
   ?> 
</body>
</html>