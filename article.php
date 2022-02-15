<?php
require_once 'bdd.php';

//  include('header.php');
// Sur cette page, les utilisateurs peuvent voir l’ensemble des articles, triés du
// plus récents au plus anciens. S’il y a plus de 5 articles, seuls les 5 premiers
// sont affichés et un système de pagination permet d’afficher les 5 suivants
// (ou les 5 précédents). Pour cela, il faut utiliser l’argument GET “start”.
// ex : https://localhost/blog/articles.php/?start=5 affiche les articles 6 à 10.
// La page articles peut également filtrer les articles par catégorie à l’aide de
// l’argument GET “categorie” qui utilise les id des categories.
// ex : https://localhost/blog/articles.php/?categorie=1&start=10 affiche les
// articles 11 à 15 ayant comme id_categorie 1).



$art = $bdd->query('SELECT* FROM articles ORDER BY date DESC LIMIT 5');



?>

<h1>Articles</h1>
    <table border="2">
<thead>

          <?php 
          while($a = $art->fetch()){ 

   echo ' <th>'. $a['article']. '</th>'  ;    } ?>
   </thead> 
 </table>
</body>
</html>


Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta dignissimos necessitatibus, animi aperiam, corporis officiis doloribus pariatur, nihil deleniti modi praesentium ab quibusdam deserunt. Velit illum quae repellat repudiandae perspiciatis possimus quasi. Similique nam, laborum id, dolore libero officiis consequatur aliquid provident facere magni corporis cum perspiciatis voluptatum iste recusandae rem sed, dolores harum maiores. Repellat quasi ipsam delectus hic sequi eos quod laboriosam, sint voluptatibus nostrum quaerat tempora quia deleniti! Expedita, excepturi vel fuga saepe odio, nihil tempora esse error maxime beatae non. Ab, tempore ipsa a fugiat similique consequuntur aliquid autem in ratione quis nesciunt animi nulla! Modi officia voluptatum minima a architecto. Dolor distinctio veniam sit atque magnam sed exercitationem veritatis corporis praesentium vitae ipsam totam consequuntur quaerat suscipit, optio numquam cumque enim obcaecati? Culpa dolorum libero, ex eaque rem, cum voluptas dolores dicta voluptate ad quidem tenetur voluptatum nemo nulla ut aspernatur molestiae et. Nemo itaque ipsa distinctio dolorem dicta. Rerum quia excepturi animi obcaecati labore itaque rem tempore? Accusantium dolor cumque ipsa mollitia explicabo ipsum corrupti, esse, facere tempore maxime exercitationem perferendis neque dignissimos veritatis eos quod. Odio, odit laboriosam eos rerum error, id fugiat at cupiditate cum doloremque beatae reprehenderit reiciendis repellendus temporibus debitis.