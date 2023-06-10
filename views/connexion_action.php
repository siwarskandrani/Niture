
<?php
require_once('../controllers/VisiteurController.php'); //le point signifie que la destination (dossier controllers) est dans le meme emplacement que cette fivhier (registre.php) mais par expl s'ils sont 2 ponts donc tu dois aller un repertoire en arriere par exemple si le fichier registre.php est das un dosssier views donc tu dois faire ..  
require_once('../models/Visiteur.php');
$email=$_POST['email'];
$mdp=$_POST['mdp'];
$visiteur=new Visiteur();
$visiteur->setemail($email);
$visiteur->setmdp($mdp);
$visiteurCtr=new VisiteurController();

$res=$visiteurCtr->ConnectVisiteur($visiteur);

//echo $client->getNcin();

if($res==true){
	session_start();
	$_SESSION['id'] = $res['id'];
	$_SESSION['email'] = $res['email'];
    $_SESSION['nom'] = $res['nom'];
	$_SESSION['prenom'] = $res['prenom'];
    $_SESSION['mdp'] = $res['mdp'];
	header('Location:index.php'); 
}else echo "hello";



?>


