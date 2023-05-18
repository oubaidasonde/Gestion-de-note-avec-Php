
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
        <form action="sauvgarde.php" method="post" class="login-email">
            <p class="welcome-text"  >Welcome</p>
            <div class="input-container">
                <input type="text" placeholder="Identifiant" name="id"  required>
            </div>
            <div class="input-container">
                <input type="password" placeholder="Mot de passe" name="pw"  required>
            </div>
            <div class="input-container" class="test">
                <button name="submit" class="btn">Valider</button>
                <button class="btn"><a href="connexion.php">Annuler</a></button>
            </div>
            
        </form>
    </div>
</body>
</html> 