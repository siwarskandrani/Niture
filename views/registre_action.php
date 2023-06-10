<?php
require_once('../controllers/VisiteurController.php'); //le point signifie que la destination (dossier controllers) est dans le meme emplacement que cette fivhier (registre.php) mais par expl s'ils sont 2 ponts donc tu dois aller un repertoire en arriere par exemple si le fichier registre.php est das un dosssier views donc tu dois faire ..  
require_once('../models/Visiteur.php');
$nom=$_POST['nom'];
$email=$_POST['email'];
$prenom=$_POST['prenom'];
$mdp=$_POST['mdp'];
$visiteur=new Visiteur($nom,$email,$prenom,$mdp);
$visiteurCtr=new VisiteurController();

$res=$visiteurCtr->insert($visiteur);
//echo $client->getNcin();

if($res==true){
	header('Location:index.php'); //kenet .php
}


?>