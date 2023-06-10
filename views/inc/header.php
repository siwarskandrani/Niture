<?php
 session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>niture</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="../images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">

    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="../images/loading.gif" alt="#" /></div>
    </div>
     <!-- end loader -->

    <div class="wrapper">

       
        <div class="sidebar">
         <!-- Sidebar  -->
        <nav id="sidebar">

            <div id="dismiss">
                <i class="fa fa-arrow-left"></i>
            </div>

            <ul class="list-unstyled components">
                
                <li class="active"> <a href="index.php">Home</a></li>
                 <li> <a href="about.php">About</a></li>
                 
                                          <?php if (isset($_SESSION['nom'])): ?>
                                          <li><a href="profile.php">Profile</a></li>
                                        <?php endif; ?>
                                        <li> <a href="produits.php">Product</a></li>
                                        <li> <a href="blog.php">Blog</a></li>
                                        <?php if (isset($_SESSION['nom'])): ?>
                                          <li><a href="deconnexion.php">Déconnexion</a></li>
                                        <?php endif; ?>
            </ul>

        </nav>
      </div>

        <div id="content">
            <!-- header -->
            <header>
                <!-- header inner -->
                <div class="header">

                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-3 logo_section">
                                <div class="full">
                                    <div class="center-desk">
                                        <div class="logo">
                                            <a href="index.php"><img src="../images/logo.jpg" alt="#"></a>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="right_header_info">
                                    <ul>
                                      <li>
    <?php if (!isset($_SESSION['nom'])): ?>
        <a href="connexion.php"><img style="margin-right: 15px;" src="../icon/1.png" alt="#" /></a>
    <?php else: ?>
        <span> Bienvenue <?php echo $_SESSION['nom']; ?></span>
    <?php endif; ?>
</li>

                                     
                                        <li>
                                        <?php if (isset($_SESSION['nom'])): ?>
                                            <a href="panier.php" style="color:black"> <img style="margin-right: 15px;" src="../icon/3.png" alt="#" /></a>
                                            <?php endif; ?>
                                        </li>

                                        <li>
                                            <button type="button" id="sidebarCollapse">
                                                <img src="../images/menu_icon.png" alt="#" />
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end header inner -->
            </header>
            <!-- end header -->