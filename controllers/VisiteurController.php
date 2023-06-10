<?php
include_once('../models/Visiteur.php') ; 
include_once('../database/config.php');
class VisiteurController extends Connexion{
function __construct() {
parent::__construct();
}

function insert(Visiteur $V){


$query="insert into visiteur (nom,email,prenom,mdp)values(?, ?, ?, ?)";

$res=$this->pdo->prepare($query);

$aryy =array($V->getNom(),$V->getemail(),$V->getPrenom(),$V->getmdp());
//var_dump($aryy);
return $res->execute($aryy);

}



function ConnectVisiteur(Visiteur $V){
    
$sql = "SELECT * FROM visiteur WHERE email=? AND mdp=?";
$res = $this->pdo->prepare($sql);

$aryy=array($V->getemail(), $V->getmdp());
//var_dump($aryy);
$res->execute($aryy);
//print_r($res);
return $res->fetch();

}


function liste(){
    $query = "select * from visiteur";
    $visiteurs=$this->pdo->prepare($query);
    $visiteurs->execute(); 
    return $visiteurs->fetchAll();
    
    }



}

?>


	