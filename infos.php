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

    <?php
  
    require_once('Etudiant.php');

    if(isset($_POST["enregistrer"])){
        $fp = fopen('./notes.txt',"a+");

    
    foreach( $_SESSION['students'] as $etudiant){

        $ser = serialize($etudiant);

        fwrite("./notes.txt",$ser.PHP_EOL);

    }

    fclose($fp);

    header("location:" . "infos.php");

   }elseif(isset($_POST["quitter"])) {

    header("location:" . "infos.php");

  }

    ?>
         <form action="tab.php" method="post" class="login-email">

             <div class="input-container">
                 <input type="text" name="etud" placeholder="Etudiant">
             </div>
             <div class="input-container">
                 <input type="number" max=20 min=0 name="Mt" placeholder="Maths">         
             </div>
             <div class="input-container">
                <input type="number" max=20 min=0  name="inf" placeholder="Informatique">
             </div>
             <div class="input-container">
                <button name="submit" class="btn">Résultat</button>
                <button class="btn"><a href="tab.php">Annuler</a></button>
             </div>
    
         </form>
    </div>
    
</body>
</html>