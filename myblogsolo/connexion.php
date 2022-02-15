<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
</head>
<body>
    <div class="login_form">
        <form action="conexion.php" method="post">
        <h2 class="text_center">Connexion</h2>
        <div class="form_groupe">
            <input type="login" name="login" class="form_control" placeholder="Login" required="required" autocomplete="off">
        </div>
        <div class="form_groupe">
            <input type="password" name="password" class="form_control" placeholder="Mot de passe" required="required" autocomplete="off">
        </div>
        <div class="form_group">
            <button type="submit" class="">Connexion</button>
        </div>
    </form>
    <p class="text_center"><a href="inscription.php">Inscription</a></p>
    </div>
</body>
</html>