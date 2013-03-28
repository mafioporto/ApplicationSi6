<?php

/*
 * connexion Base de donnée
 */
function connexionBDD($util,$mdp)
{
    $bdd= new PDO('mysql:host=localhost;dbname=tp6news',$util, $mdp)or die("erreur");
    return $bdd;
}
?>
