<?php

require('./Etudiant.php');
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>infos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">

         <form action="tab.php" method="post" class="login-email">

             <div class="input-container">
                 <input type="text" name="etud1" value="<?php echo $_SESSION['students'][$_SESSION['index']]->getnom(); ?>">
             </div>
             <div class="input-container">
                 <input type="number" max=20 min=0 name="Mt1" value="<?php echo $_SESSION['students'][$_SESSION['index']]->getmath();  ?>">         
             </div>
             <div class="input-container">
                <input type="number" max=20 min=0  name="inf1" value="<?php echo $_SESSION['students'][$_SESSION['index']]->getinfo();   ?>">
             </div>
             <div class="input-container">
                <button name="modifier2" class="btn">Modifier</button>
                <button name="supprimer2" class="btn"><a href="tab.php">Annuler</a></button>
             </div>

         </form>
    </div>
    
</body>
</html>