<?php 
session_start();
require_once('../controllers/ProduitController.php'); //le point signifie que la destination (dossier controllers) est dans le meme emplacement que cette fivhier (registre.php) mais par expl s'ils sont 2 ponts donc tu dois aller un repertoire en arriere par exemple si le fichier registre.php est das un dosssier views donc tu dois faire ..  

$produitCtr=new ProduitController();

$produits=$produitCtr->liste();
include "inc/headerAdmin.php";
?>


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Liste des Produit</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
         
        <a  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter </a>

        </div>
      </div>
   
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  foreach ($produits as $i => $p) {
    $i++;
    echo '<tr>
            <th scope="row">' . $i . '</th>
            <td>' . $p['nom'] . '</td>
            <td>' . $p['description'] . '</td>    
            <td>
            
              <a data-bs-toggle="modal" data-bs-target="#editModal'.$p['id'].'" class="btn btn-success">Modifier</a>
              <a href="deleteproduit.php?idp=' . $p['id'] . '" class="btn btn-danger">Supprimer</a>
            </td>
          </tr>';
  }
  ?>
  </tbody>
</table>
</main>     
     


<!-- Modal Ajout-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter Produit</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="ajoutProduit.php" method="post" enctype="multipart/form-data"> <!-- le enctype permettre le téléchargement de fichiers-->
          <div class="form-group">
            <input type="text" name="nom" class="form-control" placeholder="Nom du produit ..."></br>
          </div>
          <div class="form-group">
            <textarea name="description" class="form-control" placeholder="Description du produit ..."></textarea></br>
          </div>
          <div class="form-group">
            <input type="number" name="prix" class="form-control" placeholder="Prix du produit ..."></br>
          </div>
          <div class="form-group">
            <input type="number" name="stock" class="form-control" placeholder="Stock ..."></br>
          </div>
          <div class="form-group">
            <input type="file" name="image" class="form-control">
          </div>
          <div class="form-group">
            <input name="createur" type="hidden" value="<?php $_SESSION['id']; ?>" />
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php foreach($produits as $index=>$produit) { ?>
  <!-- Modal Modifier -->
  <div class="modal fade" id="editModal<?php echo $produit['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier Produit</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="modifProduit.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $produit['id']; ?>" name="idp" />
            <div class="form-group">
              <label for="nom">Nom:</label>
              <input type="text" name="nom" class="form-control" value="<?php echo $produit['nom']; ?>" placeholder="Nom du produit ...">
            </div>
            <div class="form-group">
              <label for="description">Description:</label>
              <textarea type="text" name="description" class="form-control" placeholder="Description du produit ..."><?php echo $produit['description']; ?></textarea>
            </div>
            <div class="form-group">
              <label for="prix">Prix:</label>
              <input type="number" name="prix" class="form-control" value="<?php echo $produit['prix']; ?>" placeholder="Prix du produit ...">
            </div>
            <div class="form-group">
              <label for="stock">Stock:</label>
              <input type="number" name="stock" class="form-control" value="<?php echo $produit['stock']; ?>" placeholder="Stock ...">
            </div>
            <div class="form-group">
              <label for="image">Image:</label>
              <input type="hidden" name="image_old" value="<?php echo $produit['image']; ?>"> <!-- un champs caché bch nrécuperi menou l'image loula elli 9bal l modification-->
              <input type="file" name="image" id="image" class="form-control" >
              <img src="../images/<?php echo $produit['image']; ?>" alt="Product Image" class="img-fluid mx-auto d-block" style="max-width: 300px; height: auto;margin-top: 10px;">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<?php } ?>



    <script src="../js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="../js/dashboard.js"></script>
  </body>
</html>
