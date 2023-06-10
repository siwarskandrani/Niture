<?php
session_start();

// Destruction de toutes les variables de session
$_SESSION = array();

// Destruction de la session
session_destroy();

// Redirection vers la page de connexion ou une autre page de votre choix
header("Location: connexionAdmin.php");
exit();
?>
