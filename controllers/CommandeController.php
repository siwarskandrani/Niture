<?php
include_once('../models/Commande.php') ; 
include_once('../database/config.php');
class CommandeController extends Connexion{
function __construct() {
parent::__construct();
}

function insert(Commande $C){


$query="insert into commande (produit,quantite,panier,total,date_creation)values(?, ?, ?, ?, ?)";

$res=$this->pdo->prepare($query);

$aryy = array($C->getProduit(), $C->getQuantite(), $C->getPanier(), $C->getTotal(), $C->getDateCreation());
//var_dump($aryy);
return $res->execute($aryy);

}

function liste(){
    $query = "select p.nom, p.image, c.quantite, c.total, c.panier from commande c, produit p where c.produit=p.id";
    $commandes=$this->pdo->prepare($query);
    $commandes->execute(); 
    return $commandes->fetchAll();
    
    }
}
?>