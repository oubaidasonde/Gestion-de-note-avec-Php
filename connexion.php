<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <div class="container">
        <form action="validation.php" method="post" class="login-email">
            <p class="welcome-text"  >Welcome</p>
            <div class="input-container">
                <input type="text" placeholder="Identifiant" name="id" value="<?php if(isset($_COOKIE['id'])) echo $_COOKIE['id']; ?>" required>
            </div>
            <div class="input-container">
                <input type="password" placeholder="Mot de passe" name="pw" value="<?php if(isset($_COOKIE['pw'])) echo $_COOKIE['pw']; ?>"  required>
            </div>
            <input type ="checkbox" name ="check" id ="check" >
            <label for ="check"> Se souvenir de moi </label><br/><br/>
            <div class="input-container" class="test">
                <button name="submit" class="btn">Valider</button>
                <button class="btn"><a href="connexion.php">Annuler</a></button>
            </div>
        </form>
    </div>
</body>
</html> 