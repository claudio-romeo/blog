<?php
// Un bouton de retour vers la page d’accueil, une liste déroulante contenant
// les différentes catégories d’articles,

// si l’utilisateur n’est pas connecté : une page d’inscription et une page de connexion, sinon une page permettant de
// modifier son profil et une permettant de se déconnecter. 

//Si l’utilisateur a les droits de modérateur, il doit avoir accès à la page creer-article, si il est administrateur, il peut également accéder à la page admin. Le header doit
// être présent dans chacune des pages du blog.

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <nav>
<?php

// Un bouton de retour vers la page d’accueil, une liste déroulante contenant
// les différentes catégories d’articles,
    echo '<nav>
           
    <ul>
            <li class="deroulant"><a href="index.php">Les articles</a>
                <ul class="list">
                    <li><a href="article.php">article1</a></li>
                    <li><a href="article.php">article2</a></li>
                    <li><a href="article.php">article3</a></li>
                </ul>
            </li>';
    //Si l’utilisateur a les droits de modérateur, il doit avoir accès à la page creer-article, si il est administrateur, il peut également accéder à la page admin. Le header doit
// être présent dans chacune des pages du blog.
// if($_SESSION['isConnected']){
//     echo '
//     <li class="page"><a href="index.php">Accueil</a></li>';
//     echo '<li class="page"><a href="cree-article.php">Crée un article</a></li>';
//     echo '<li class="page"><a href="admin.php">Les admins</a></li>';
//     // si l’utilisateur n’est pas connecté : une page d’inscription et une page de connexion, sinon une page permettant de
// // modifier son profil et une permettant de se déconnecter. 
// // // }
// // if ($_SESSION['user'] = FALSE) {
echo '<li class="page"><a href="index.php">Accueil</a></li>
    <li class="page"><a href="inscription.php">S\'inscrire</a></li>
    <li class="page"><a href="connexion.php">Connectez-vous</a></li>';
// // // } else {
//     echo '<li class="page"><a href="index.php">Accueil</a></li>
// <li class="page""><a href="profil.php">Profil</a></li>
//  <li class="page""><a href="deconnexion.php">Déconnexion</a></li>';
// // }


?>
      
    </nav>
</body>

</html>