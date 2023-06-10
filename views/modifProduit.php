<?php
require_once('../controllers/ProduitController.php');
require_once('../models/Produit.php');
$produitCtr=new ProduitController();
$produit=new Produit();

$id = $_POST['idp'];
$produit->setNom($_POST['nom']);
$produit->setDescription($_POST['description']);
$produit->setPrix($_POST['prix']);
$produit->setStock($_POST['stock']);


if (!empty($_FILES["image"]["name"])) { //Si le nom du fichier n'est pas vide, cela signifie qu'un nouveau fichier d'image a été téléchargé
  $target_dir = "../images/"; // Répertoire de destination où l'image sera téléchargée
  $target_file = $target_dir . basename($_FILES["image"]["name"]); // Chemin complet du fichier d'image
  
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) { //La condition if vérifie si le fichier a été déplacé avec succès vers le nouvel emplacement. 
    $produit->setimage($_FILES["image"]["name"]);
  } else {
    echo "Désolé, une erreur s'est produite lors du téléchargement de votre fichier.";
  }
} else {
  // Pas de nouveau fichier d'image, conserver l'image existante
  $produit->setimage($_POST['image_old']); // si j'ai modifier un tel champs et je modifie pas l'image alors l'image ne se supprime pas (kenet tetfasakh) 
}

$produitCtr->modifier_produit($produit, $id);

header('Location:produitsAdmin.php');
?>
