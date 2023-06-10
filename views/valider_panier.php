<?php
require_once('../controllers/PanierController.php'); 
require_once('../models/Panier.php');
require_once('../controllers/CommandeController.php'); 
require_once('../models/Commande.php');
session_start();
$dateCreation= date("y-m-d");
$visiteur=$_SESSION['id'];
$total=$_SESSION['panier'][1];
// insertion de panier:
$panier=new Panier($visiteur,$total,$dateCreation);
$panierContr=new PanierController();
$res=$panierContr->insert($panier);

$panier_id = $panierContr->getLastInsertedId();

$commandes=$_SESSION['panier'][3];
foreach($commandes as $commande){
// insertion de commande:
$quantite=$commande[0];
$total=$commande[1];
$produit_id=$commande[3];
$commandee=new Commande($produit_id,$quantite,$panier_id,$total,$dateCreation); // 7othom b nafs l tartib kima ma7toutin fel constructeur
$commandeContr=new CommandeController();
// var_dump($commandee->getProduit());
$res=$commandeContr->insert($commandee);
}

$_SESSION['panier']=null; //khw l commande taadet w l panier tarjaa fergha
header('location:index.php');

?>