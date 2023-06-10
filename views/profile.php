<?php
include "inc/header.php";
if (!isset($_SESSION['nom'])) {
    header("Location: connexion.php");
?>
<?php
  
} else {
    ?>
    <div>
        <?php if (isset($_SESSION['nom']) && isset($_SESSION['prenom']) && isset($_SESSION['email'])): ?>
            <h1>Nom : <?php echo $_SESSION['nom']; ?></h1>
            <h1>Prénom : <?php echo $_SESSION['prenom']; ?></h1>
            <h1>E-mail : <?php echo $_SESSION['email']; ?></h1>
        <?php endif; ?>
    </div>
<?php
    include "inc/footer.php";

} 
   

?>
