<?php

/**
 * Description of Utilisateur
 *
 * @author tony
 */

include_once 'bdd.php';
class Utilisateur {
   private $pseudo;
   private $mdp;
   private $droitUtil;
   


   
  /**
   * Contruit un utilisateur et l'ajoute à la base de donnée si il 
   * n'est pas présent dans la base de donnée
   * @param type $pseudo
   * @param type $mdp
   * @param type $droitUtil
   */
   
   function __construct($pseudo,$mdp,$droitUtil) 
   {
       
       $pseudo= $this->pseudo;
       $mdp=  $this->mdp;
       $droitUtil=  $this->droitUtil;
       
     
    
    }
    
    
}

?>
