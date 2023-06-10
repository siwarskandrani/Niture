<?php
session_start();
$id=$_GET['id'];
$total_enlever=$_SESSION['panier'][3][$id][1];
$_SESSION['panier'][1]-= $total_enlever;
//on va supprimer la ligne elli l'rid mtaaha heka
unset($_SESSION['panier'][3][$id]);'.</br>'; 
header('location:panier.php');
?>