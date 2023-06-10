<?php
include_once('../models/Administrateur.php') ; 
include_once('../database/config.php');
class AdminController extends Connexion{
function __construct() {
parent::__construct();
}
function ConnectAdmin( Administrateur $A){
    $sql = "SELECT * FROM administrateur WHERE email=? AND mdp=?";
    $res = $this->pdo->prepare($sql);
    
    $aryy=array($A->getemail(),$A->getmdp());
    //var_dump($aryy);
    $res->execute($aryy);
    
    return $res->fetch();
    
    }
    
    
    
    
    }
    
    ?>
