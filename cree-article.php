<?php 
include('header.php');

// Cette page possède un formulaire permettant aux modérateurs et
// administrateurs de créer de nouveaux articles. Le formulaire contient donc
// le texte de l’article, une liste déroulante contenant les catégories existantes
// en base de données et un bouton submit.
// include('header.php');
include('connection.php');
$id="id";
$id_utilisateur="id_utilisateur";
$id_categorie="id_categorie";
if(isset($_POST['submit'])){
    $id = 'id';
    $article = $_POST['article'];
    $id_utilisateur ='id_utilisateur';
    $id_categorie = 'id_categorie';
  $requet = $bdd->query("SELECT * FROM articles  WHERE id=''");
  $requet ->execute(array($id, $article, $id_utilisateur, $id_categorie));
    $req = $bdd->prepare("INSERT INTO articles (id, article, id_utilisateur, id_categorie,date) VALUES ('$id','$article','$id_utilisateur','$id_categorie',NOW())");
    $req->execute();
  $id_categorie = $_SESSION['article'];
  $article=  $_SESSION['article'];  
    }

var_dump($bdd);
 




?>
<h1>Crée votre article</h1>


    <div class="cree">
    <form action="article.php" method="post">
      <select name="id_categorie" size="1" >
          <option value="<?php if(isset($_SESSION['id_article'])){  echo $id_article ; }   ?>">article1</option>
          <option value="<?php if(isset($_SESSION['id_article'])){  echo $_SESSION['article'] ; }   ?>">article2</option>
          <option value="<?php if(isset($_SESSION['id_article'])){  echo $_SESSION['article'] ; }   ?>">artricle3</option>
          <option value="<?php if(isset($_SESSION['id_article'])){  echo $_SESSION['article'] ; }   ?>">article4</option>
        <textarea name="article" id="" cols="50" rows="10" value="<?php echo $article ; ?>"> </textarea><br>
        <button type="submit"name="submit">Crée</button>
        </select><br>

        </form>
  </div>
</body>
</html>