<?php
require_once('../controllers/ProduitController.php');
$produitCtr=new ProduitController();
$produitCtr->delete($_GET['idp']);
header('Location:produitsAdmin.php');
?>
