<?php 
session_start();
require_once('../controllers/VisiteurController.php'); //le point signifie que la destination (dossier controllers) est dans le meme emplacement que cette fivhier (registre.php) mais par expl s'ils sont 2 ponts donc tu dois aller un repertoire en arriere par exemple si le fichier registre.php est das un dosssier views donc tu dois faire ..  

$visiteurCtr=new VisiteurController();

$visiteurs=$visiteurCtr->liste();
include "inc/headerAdmin.php";
?>


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Liste des Clients</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
         
        <a  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter </a>

        </div>
      </div>
   
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">email</th>
    </tr>
  </thead>
  <tbody>
  <?php
  foreach ($visiteurs as $i => $visiteur) {
    $i++;
    echo '<tr>
            <th scope="row">' . $i . '</th>
            <td>' . $visiteur['nom'] . '</td>
            <td>' . $visiteur['prenom'] . '</td>    
            <td> ' . $visiteur['email'] . '</td>
          </tr>';
  }
  ?>
  </tbody>
</table>
</main>     
     






    <script src="../js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="../js/dashboard.js"></script>
  </body>
</html>
