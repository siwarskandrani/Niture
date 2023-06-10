
<?php
require_once('../controllers/AdminController.php'); //le point signifie que la destination (dossier controllers) est dans le meme emplacement que cette fivhier (registre.php) mais par expl s'ils sont 2 ponts donc tu dois aller un repertoire en arriere par exemple si le fichier registre.php est das un dosssier views donc tu dois faire ..  
require_once('../models/Administrateur.php');
$email=$_POST['email'];
$mdp=$_POST['mdp'];
$admin=new Administrateur();
$admin->setemail($email);
$admin->setmdp($mdp);
$adminCtr=new AdminController();

$res=$adminCtr->ConnectAdmin($admin);

//echo $client->getNcin();

if($res==true){
	session_start();
	$_SESSION['id'] = $res['id'];
	$_SESSION['email'] = $res['email'];
    $_SESSION['nom'] = $res['nom'];
    $_SESSION['mdp'] = $res['mdp'];
	header('Location:profileAdmin.php'); 
}else echo "hello";



?>


