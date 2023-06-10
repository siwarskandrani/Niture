<?php
session_start();

require_once('../controllers/ProduitController.php'); //le point signifie que la destination (dossier controllers) est dans le meme emplacement que cette fivhier (registre.php) mais par expl s'ils sont 2 ponts donc tu dois aller un repertoire en arriere par exemple si le fichier registre.php est das un dosssier views donc tu dois faire ..  
require_once('../models/Produit.php');
$nom=$_POST['nom'];
$description=$_POST['description'];
$prix=$_POST['prix'];
$stock=$_POST['stock'];
$createur=$_SESSION['id'];
$date_creation=date("y-m-d");


//upload image
$target_dir = "../images/"; //le nom de dossier ou je veux mettre l'image: houwa l'image bch tet7at fel site yelzemha tetsajal 9bal fel code mtaana fel dossier image bch a7na njibiuha men ghadi
$target_file = $target_dir . basename($_FILES["image"]["name"]); //image c'est le name " " dans la formulaire et ["name"] bch ntalaaa biha esm l'image

if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    $image=$_FILES["image"]["name"];
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

$produit=new Produit($nom,$description,$prix,$createur,$image,$stock,$date_creation);//hek l blassa l fergha taa l createur
$produitCtr=new ProduitController();

$res=$produitCtr->insert($produit);
//echo $client->getNcin();

if($res==true){
	header('Location:produitsAdmin.php'); //kenet .php
}


?>