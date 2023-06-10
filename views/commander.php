<?php
session_start();
if (!isset($_SESSION['nom'])){ //s'il est non connecté
header('location:connexion.php');
exit();
    }

require_once('../controllers/ProduitController.php'); 
require_once('../models/Produit.php');
require_once('../controllers/CommandeController.php'); 
require_once('../models/Commande.php');
require_once('../controllers/PanierController.php'); 
require_once('../models/Panier.php');

// NB: mch lazem les variables yebdew nafs l'esm kima les attributs taa l model. le plus important c'est que l tartib k tji tesnaa l'objet yebda nafsou kima l consructeur (kima l lota)
$produit_id=$_POST["id_produit"];
$quantite=$_POST["quantity"];

$produit=new Produit();
$produitCtr=new ProduitController();
$produit = $produitCtr->getProduitById($produit_id);
$total= $quantite*$produit['prix'];
$dateCreation= date("y-m-d");
$visiteur=$_SESSION['id'];

if(!isset($_SESSION['panier'])){ //s'il n'ya pas unne panier 
    $_SESSION['panier']= array($visiteur, 0, $dateCreation, array() ); //esnaa wa7da jdida 
}
$_SESSION['panier'][1]+=$total;
$_SESSION['panier'][3][]=array($quantite,$total,$dateCreation,$produit_id,$produit['nom']);// esnaa commande. NB: les accolades vides prés de 3 pour qu'on puisse fabriqué un autre ligne de la comande
var_dump($_SESSION['panier']);
var_dump($_SESSION['panier'][3]);
// echo($quantite).'</br>';
// echo($total).'</br>';
// echo($dateCreation);
// echo($panier);

// insertion de panier:

// $panier=new Panier($visiteur,$total,$dateCreation);
// $panierContr=new PanierController();
// $res=$panierContr->insert($panier);
// // var_dump($panier);
// $panier_id = $panierContr->getLastInsertedId();

// // insertion de commande:
// $commande=new Commande($produit_id,$quantite,$panier_id,$total,$dateCreation); // 7othom b nafs l tartib kima ma7toutin fel constructeur
// $commandeContr=new CommandeController();
// // var_dump($commande->getProduit());
// $res=$commandeContr->insert($commande);
header('location:panier.php');
?>