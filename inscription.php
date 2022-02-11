<?php
include('header.php');
include('connection.php');
// Une page contenant un formulaire d’inscription (inscription.php) :
//     Le formulaire doit contenir l’ensemble des champs présents dans la table
//     “utilisateurs”  
// id, int, clé primaire et Auto Incrément
// - login, varchar de taille 255
// - password, varchar de taille 255
// - email, varchar de taille 255
// - id_droits, int 
//  ainsi qu’une confirmation de mot de passe. 
//  Dès qu’un utilisateur remplit ce formulaire, les données sont insérées dans la base de données et l’utilisateur est dirigé vers la page de connexion.

// $password_confirm="password_confirm";
if(isset($_POST['submit'])){
    $id =['id'];
    $login =['login'];
    $password=['password'];
    
    $email=['email'];
    $id_droits=['id_droits'];
       // $date = DateTime();

$requet= $bdd->query("SELECT * FROM utilisateurs WHERE id=''");
$requet->execute();
$result = $requet->fetch();
        $row = $requet->rowCount();
        // if ($password != $password_confirm) {
        // echo "Les mots de passe ne sont pas identique";
        if ($row['login'] == 1) {
            echo "login existe déjà";
        }else{
            $req = $bdd->prepare("INSERT INTO utilisateurs (login,password,email,id_droits) VALUES ('$login' ,'$password','$email','$id_droits')");
            $req->execute(array($login,$password,$email,$id_droits));
            $_SESSION['id']=$id;
            $_SESSION['isConnected']=$id;
            header('location:connexion.php');
        }

        }
   

 
?>
<h1>Inscription</h1>
<div class="cree">
    <form action="" method="post">
       <th>Votre Login:</th><br> <input type="text" name="login" id="" placeholder="Lucy45"><br>
       <th>Mot de passe:</th><br><input type="password" name="password" id="" placeholder="********"><br>
       <!-- <th>Mot de passe:</th> <input type="password" name="password_confirm" id="" placeholder="********"><br> -->
        <button type="submit" name="submit">Valider</button>
    </form>
</div>
</body>
</html>