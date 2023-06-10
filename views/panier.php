<?php


include "inc/header.php";
$commandes=array(); // je l'ai fait pour que losqu'on a pas des commandes del panier yebda houwa deja aandou un variables panier feragh khtr a7na l $commandes sna3neh kif tebda aana panier m3ebya heka aalh k tebda fergha hawka tala3li tableau feragh mch erreur
if(isset($_SESSION['panier'])){ //si on a uue panier
    if(count($_SESSION['panier'][3])> 0){
            $commandes=$_SESSION['panier'][3];
    }
}
$total=0;
if (isset($_SESSION['panier']))
$total=$_SESSION['panier'][1];
?>
 
<div class="row col-12 mt-4 p-5">
    <h1>Panier utilisateur</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Produit</th>
      <th scope="col">Quantité</th>
      <th scope="col">Total</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <?php
    foreach($commandes as $index=> $commande){
    echo '<tr>
      <th scope="row">'.($index+1).'</th>
      <td>'.$commande[4].'</td>
      <td>'.$commande[0].' pieces </td>
      <td>'.$commande[1].' DT</td>
      <td> 
      <a href="enlever_produit_panier.php?id='.$index.'" class="btn btn-danger">supprimer</a>
      </td>

   
    </tr>';
    }
    ?>
    </tbody>
</table>
<div class="text-end mt-3">
<h1>Total : <?php echo $total ?> DT</h1>
</hr>
    <a href="valider_panier.php" class= "btn btn-success" style="width: 100px;">valider</a>
</div>
</div>




            <!--  footer -->
<?php

include "inc/footer.php"
?>
</body>

</html>