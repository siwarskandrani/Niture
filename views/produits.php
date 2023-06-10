<?php
require_once('../controllers/ProduitController.php');

$produitCtr = new ProduitController();
$produits = $produitCtr->liste();

include "inc/header.php";
?>

<div class="contactus">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-8 offset-md-2">
            <div class="title">
               <h2>Our Products</h2>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="ourproduct">
   <div class="container">
      <div class="row product_style_3">
         <?php foreach ($produits as $produit) { ?>
            <!-- product -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
               <div class="full product">
                  <div class="product_img">
                     <div class="center">
                        <img src="../images/<?php echo $produit['image']; ?>" alt="#"/>
                        <div class="overlay_hover">
                           <a class="add-bt" href="product_detail.php?id=<?php echo $produit['id']; ?>">+ Add to cart</a>
                        </div>
                     </div>
                  </div>
                  <div class="product_detail text_align_center">
                     <p class="product_price"><?php echo $produit['prix']; ?> DT</p>
                     <p class="product_name"><?php echo $produit['nom']; ?></p>
                  </div>
               </div>
            </div>
            <!-- end product -->
         <?php } ?>
      </div>
   </div>
</div>

<?php include "inc/footer.php"; ?>

</body>
</html>
