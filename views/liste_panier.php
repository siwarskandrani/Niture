<?php 
session_start();
require_once('../controllers/PanierController.php'); //le point signifie que la destination (dossier controllers) est dans le meme emplacement que cette fivhier (registre.php) mais par expl s'ils sont 2 ponts donc tu dois aller un repertoire en arriere par exemple si le fichier registre.php est das un dosssier views donc tu dois faire ..  
require_once('../controllers/CommandeController.php'); 
$panierCtr=new PanierController();
$paniers=$panierCtr->liste();

$commandeCtr=new CommandeController();
$commandes=$commandeCtr->liste();

if(isset($_POST['btnSubmit'])){

$panierrCtr=new PanierController();
$panier_id = $_POST['panier_id'];
$etat = $_POST['etat'];
$panierrCtr->ChangerEtatPanier($panier_id, $etat);
}
include "inc/headerAdmin.php";
?>


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Liste des Paniers</h1>
    
      </div>
   
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Client</th>
      <th scope="col">Total</th>
      <th scope="col">Date</th>
      <th scope="col">Etat</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  <?php
  foreach ($paniers as $i => $panier) {
    $i++;
    echo '<tr>
            <th scope="row">' . $i . '</th>
            <td>' . $panier['nom'].' '.$panier['prenom'] . '</td>
            <td>' . $panier['total'] . ' DT</td>    
            <td> ' . $panier['date_creation'] . '</td>
            <td> ' . $panier['etat'] . '</td>
            <td>
            
              <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#commande'.$panier['id'].'">Afficher</a>
              <a  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#traiter'.$panier['id'].'">Traiter</a>
            </td>
          </tr>';
  }
  ?>
  </tbody>
</table>
</main>     
     


<?php foreach($paniers as $index=>$p) { ?>
  <!-- Afficher Modifier -->
  <div class="modal fade" id="commande<?php echo $p['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Liste des commandes</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div> 
        <div class="modal-body">
       <table class="table">
        <thead>
          <tr>
        
           <th>Nom Produit</th>
            <th>image</th>
            <th>Quantité</th>
            <th>Total</th>
        
          </tr>
        </thead>
        <tbody>
        <?php
  foreach ($commandes as $i => $c) {
          if($c['panier']==$p['id']){ // pour qu'il m'affiche que les command de la panier l ma7loula
    echo '<tr>
            
            <td>' . $c['nom'].' </td>
            <td><img src="../images/'.$c['image'].'" width=100> </td>
            <td>' . $c['quantite'] . '</td>    
            <td> ' . $c['total'] . ' DTT</td>

          </tr>';
          }
  }
  ?>
        </tbody>
       </table>

        </div>
        <div class="modal-footer">
         
        </div>
      </div>
    </div>
  </div>
<?php } ?>



<?php foreach($paniers as $index=>$p) { ?>
  <!-- Modal traiter -->
  <div class="modal fade" id="traiter<?php echo $p['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Liste des commandes</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div> 
        <div class="modal-body">
      
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> <!--  $_SERVER[' PHP_SELF'] ca veut dire nefs l page hedhi  -->
          <input type="hidden" value="<?php echo $p['id']; ?>" name="panier_id">
          <select name="etat" class="form-control" >
          <option value="en livraison">En livraison</option>
          <option value="livraison termine">livraison terminé</option>
          </select></br>
          <button type="submit" name="btnSubmit" class="btn btn-primary"> sauvegarder</button>
  
        </form>

        </div>
        <div class="modal-footer">
         
        </div>
      </div>
    </div>
  </div>
<?php } ?>

    <script src="../js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="../js/dashboard.js"></script>
  </body>
</html>
