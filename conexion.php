<?php
require_once 'bdd.php';

// on commence par verifier si les input existe
if(isset($_POST['login']) && isset($_POST['password']))
{
    // ensuite on stock dans des html specialchars pour eviter les fails xss
    $email = htmlspecialchars($_POST['email']);
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);

    // ensuite on check si l'utilisateur exist en BDD 

    $check = $_bdd->prepare('SELECT login, password, email FROM utilisateurs WHERE login = ?');
    $check->execute(array($login));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row == 1)
    {
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $password = hash('sha256', $password);

                if($data['password'] === $password)
                {
                    $_SESSION['user'] = $data['login'];


                }else header('location:index.php?login_err=password');
            }else header('location:index.php?login_err=email');
    }else header('location:index.php?login_err=already');
}else  header('location:index.php');
    //si elle n'existe pas on redirige vers l'index


