<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Informations Entreprises</h1>
        
        <form method="Post" action="index.php">
            <label>Utilisateur <input type="text" name="pseudo"/></label>
        </form>
        <div><br/>
        <?php
      
       
     
       include_once  'ListeArticle.php';
       include_once 'Article.php';
       include_once 'bdd.php';
     
       $tabarticle = new ListeArticle();
       
       $article_2= new Article("Les aventures ", "TOoto","18/02/1993","ceci est un deuxième texte");
       
       
         $article_2->ajouterArticleBDD($article_2);
           
       
       $tabarticle->afficheTabArticle();
       
         ?>
            
            
            
        </div>
        <div><br/>
        <a href="index.php">Accueil</a>
        </div>
    </body>
</html>
