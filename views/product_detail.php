<?php
require_once('../controllers/ProduitController.php');
$detailCtr = new ProduitController();
$detail = $detailCtr->getProduitById($_GET['id']);

include "inc/header.php";
?>

<div class="layout_padding-2">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="img_box">
                    <?php if (isset($detail['image'])): ?>
                        <figure><img src="../images/<?php echo $detail['image']; ?>" alt="#" /></figure>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 product_detail_side">
                <div class="abotext_box">
                    <div class="product-heading">
                        <?php if (isset($detail['nom'])): ?>
                            <h2><?php echo $detail['nom'] ?></h2>
                        <?php endif; ?>
                    </div>
                    <div class="detail-contant">
                        <?php if (isset($detail['description'])) {
                            echo '<p>' . $detail['description'] . '</p>';
                        } ?>
                        <?php if (isset($detail['stock'])) {
                            echo '<p><b class="stock">' . $detail['stock'] . ' en stock</b></p>';
                        } ?>
<!--la formulaire qui va récuperer les champs de table commander-->

                        <form class="cart" method="post" action="commander.php">
                            <?php if (isset($detail['id'])) {
                                echo '<input type="hidden" name="id_produit" value="' . $detail['id'] . '">'; // id de produit caché
                            } ?>
                            <div class="quantity">
                                <input step="1" min="1" max="<?php echo $detail['stock'] ?>" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" type="number">
                            </div>
                            <button type="submit" class="bt_main">Add to cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="tab_bar_section">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#description">Description</a> </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div id="description" class="tab-pane active">
                                            <div class="product_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum elit. Morbi eu arcu ipsum. Aliquam lobortis accumsan quam ac convallis. Fusce elit mauris, aliquet at odio vel, convallis vehicula nisi. Morbi vitae porttitor dolor. Integer eget metus sem. Nam venenatis mauris vel leo pulvinar, id rutrum dui varius. Nunc ac varius quam, non convallis magna. Donec suscipit commodo dapibus.
                                                    <br>
                                                    <br>Vestibulum et ullamcorper ligula. Morbi bibendum tempor rutrum. Pelle tesque auctor purus id molestie ornare.Donec eu lobortis risus. Pellentesque sed aliquam lorem. Praesent pulvinar lorem vel mauris ultrices posuere. Phasellus elit ex, gravida a semper ut, venenatis vitae diam. Nullam eget leo massa. Aenean eu consequat arcu, vitae scelerisque quam. Suspendisse risus turpis, pharetra a finibus vitae, lobortis et mi.</p>
                                            </div>
                                        </div>
                                        <div id="reviews" class="tab-pane fade">
                                            <div class="product_review">
                                                <h3>Reviews (2)</h3>
                                                <div class="commant-text row">
                                                    <div class="col-lg-2 col-md-2 col-sm-4">
                                                        <div class="profile">
                                                            <img class="img-responsive" src="images/lllll.png" alt="#">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                                        <h5>Ravi</h5>
                                                        <p><span class="c_date">July 23, 2019</span> | <span><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></span></p>
                                                        <span class="rating">
                                 <i class="fa fa-star" aria-hidden="true"></i>
                                 <i class="fa fa-star" aria-hidden="true"></i>
                                 <i class="fa fa-star" aria-hidden="true"></i>
                                 <i class="fa fa-star" aria-hidden="true"></i>
                                 <i class="fa fa-star-o" aria-hidden="true"></i>
                                 </span>
                                                        <p class="msg">ThisThis book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, “Lorem ipsum dolor sit amet..
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="commant-text row">
                                                    <div class="col-lg-2 col-md-2 col-sm-4">
                                                        <div class="profile">
                                                            <img class="img-responsive" src="images/lllll.png" alt="#">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                                        <h5>Ravi</h5>
                                                        <p><span class="c_date">July 23, 2019</span> | <span><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></span></p>
                                                        <span class="rating">
                                 <i class="fa fa-star" aria-hidden="true"></i>
                                 <i class="fa fa-star" aria-hidden="true"></i>
                                 <i class="fa fa-star" aria-hidden="true"></i>
                                 <i class="fa fa-star" aria-hidden="true"></i>
                                 <i class="fa fa-star-o" aria-hidden="true"></i>
                                 </span>
                                                        <p class="msg">Nunc augue purus, posuere in accumsan sodales ac, euismod at est. Nunc faccumsan ermentum consectetur metus placerat mattis. Praesent mollis justo felis, accumsan faucibus mi maximus et. Nam hendrerit mauris id scelerisque placerat. Nam vitae imperdiet turpis</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="full review_bt_section">
                                                            <div class="float-right">

                                                                <a class="bt_main" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Leave a Review</a>

                                                            </div>
                                                        </div>

                                                        <div class="full">

                                                            <div id="collapseExample" class="full collapse commant_box">
                                                                <form accept-charset="UTF-8" action="index.html" method="post">
                                                                    <input id="ratings-hidden" name="rating" type="hidden">
                                                                    <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." required=""></textarea>
                                                                    <div class="full_bt center">
                                                                        <button class="bt_main" type="submit">Save</button>
                                                                    </div>
                                                                </form>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  footer -->
       <?php
       include "inc/footer.php"
     ?>
 </body>
 
 </html>