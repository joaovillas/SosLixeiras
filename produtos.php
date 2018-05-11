<?php include("DBCon.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        ﻿ 
﻿﻿﻿  
        <title>SOS Lixeiras</title>
        <link rel="shortcut icon" type="image/x-icon" href="tpl/assets/images/favicon.ico" />
        <!-- Plugin css -->
        <link rel="stylesheet" type="text/css" href="tpl/assets/css/font-awesome.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="tpl/assets/fonts/flaticon.css" media="all" />
        <link rel="stylesheet" type="text/css" href="tpl/assets/css/bootstrap.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="tpl/assets/css/animate.css" media="all" />
        <link rel="stylesheet" type="text/css" href="tpl/assets/css/swiper.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="tpl/assets/css/lightcase.css" media="all" />
        <link rel="stylesheet" type="text/css" href="tpl/assets/css/jquery.nstSlider.css" media="all" />
        <link rel="stylesheet" type="text/css" href="tpl/assets/css/flexslider.css" media="all" />

        <!-- own style css -->
        <link rel="stylesheet" type="text/css" href="tpl/assets/css/style.css" media="all" />
        <link rel="stylesheet" type="text/css" href="tpl/assets/css/responsive.css" media="all" />
        <link rel="stylesheet" type="text/css" href="tpl/assets/css/fonts/font-awesome.min.css" media="all" />

        
    </head>
    <body>
     
        <header class="header-style-2">
  
    <!-- Start Menu -->
    <div class="bg-main-menu menu-scroll">
        <div class="container">
            <div class="row">
                <div class="main-menu">
                    <a class="show-res-logo" href="index.html"><img src="tpl/assets/images/home01/logo.png" alt="logo" class="img-responsive" /></a>
                    <nav class="navbar">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.html"><img src="tpl/assets/images/home01/logo.png" alt="logo" class="img-responsive" /></a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">                                
                                <li><a href="index.html">Home</a></li>
                                <li><a href="a-empresa.html">Empresa</a></li>
                                <li><a href="produtos.php">Produtos</a></li>
                                <li><a href="clientes.html">Clientes</a></li>
                                <li><a href="contato.html">Contato</a></li>
                            </ul>                           
                        </div><!-- .navbar-collapse -->
                    </nav>
                </div><!-- .main-menu -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .bg-main-menu -->
</header><section class="bg-page-header">
    <div class="page-header-overlay">
        <div class="container">
            <div class="row">
                <div class="page-header">
                    <div class="page-title">
                        <h2>Nossos Produtos</h2>
                    </div><!-- .page-title -->                    
                </div><!-- .page-header -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header-overlay -->
</section>




<section class"bg-shop-section">
    <div class="container">
        <div class="row">
            <div class="shop-option">
                <div class="row">
                    
                
                    <div class="col-md-9">
                        <div class="shop-collection">
                            <div class="row">
                               
                                
                                
                                
                            <?php
                                include ("DBCon.php");

                                $consulta = "SELECT * FROM produtos";

                                $con = $mysqli->query($consulta) or die($mysqli->error)
                                ?>
                                <?php
                                
                                
                                while($dado = $con->fetch_array()){
                                    
                                    echo '<div class="col-md-4 col-sm-6 col-xs-6" style="height: 350px;">';
                                    echo '<div class="collection-items">';
                                    echo '   <div class="collection-img">';
                                    echo '      <a href="detalhes.php?id='.$dado['id'].'">';
                                    echo '          <div class="collection-overlay"></div>    ' ;                                    
                                    echo ' <img style="max-width: 100%;
                                    max-height: 175px;padding:15px" class ="img-thumbnail" src="'.utf8_encode($dado["img"]).'" alt="collection-img-1" />
                                            
                                        </div><!-- .collection-img -->
                                        <div class="collection-content">
                                            <h4>'.utf8_encode($dado["nome"]).'</h4></a>                                            
                                        </div><!-- .collection-content -->
                                    </div><!-- .collection-items -->
                                </div><!-- .col-md-4 -->';

                                }
                                ?>
                                <?php
                                include ("DBCon.php");

                                $consulta = "SELECT * FROM produtos_limpeza";

                                $con = $mysqli->query($consulta) or die($mysqli->error)
                                ?>
                                <?php

                                while($dado = $con->fetch_array()){

                                    echo '<div class="col-md-3 col-sm-6 col-xs-6" style="height: 350px;">';
                                    echo '<div class="collection-items">';
                                    echo '   <div class="collection-img">';
                                    echo '      <a href="detalhe_limpeza.php?id='.$dado['id'].'">';
                                    echo '          <div class="collection-overlay"></div>    ' ;                                    
                                    echo ' <img style="max-width: 100%;
                                    max-height: 205px;padding:15px" class ="img-thumbnail" src="'.utf8_encode($dado["img"]).'" alt="collection-img-1" />
                                            
                                        </div><!-- .collection-img -->
                                        <div class="collection-content">
                                            <h4>'.utf8_encode($dado["nome"]).'</h4></a>                                            
                                        </div><!-- .collection-content -->
                                    </div><!-- .collection-items -->
                                </div><!-- .col-md-4 -->';

                                }
                                ?>
                                    
                                   
                               
                              

                            </div>
                            

                        </div>


                                    

                    </div>

                                  
                                  <?php require_once ('menulateral.php');?>
                </div>

                    

            </div>
                                         
           
        </div>


    </div>



</section>








<footer class="footer navbar-fixed-bottom">
    <div class="bg-footer-bottom fixed-bottom">
        <div class="container">
            <div class="row">
                <div class="footer-bottom">
                    <div class="copyright-txt">
                        <p>&copy; 2018 SOS Lixeiras. Todos os direitos reservados. 
                        <a href="http://github.com/joaovillas" title="Criação de Sites em Salvador"><img src="midias/man-user.png" width="20"></a></p>
                    </div><!-- .copyright-txt -->
                    <div class="social-box">
                        <ul class="social-icon-rounded">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>                           
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div><!-- .social-box -->
                </div><!-- .footer-bottom -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .bg-footer-bottom -->
</footer>
<!-- End Footer Section -->

<!-- Start Scrolling -->
<div class="scroll-img"> <i class="fa fa-angle-up" aria-hidden="true"></i></div>

<!-- End Scrolling -->
<script type="text/javascript" src="tpl/assets/js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="tpl/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="tpl/assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="tpl/assets/js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="tpl/assets/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="tpl/assets/js/swiper.min.js"></script>
<script type="text/javascript" src="tpl/assets/js/lightcase.js"></script>
<script type="text/javascript" src="tpl/assets/js/jquery.nstSlider.js"></script>
<script type="text/javascript" src="tpl/assets/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="tpl/assets/js/custom.map.js"></script>
<script type="text/javascript" src="tpl/assets/js/plugins.isotope.js"></script>
<script type="text/javascript" src="tpl/assets/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="tpl/assets/js/custom.isotope.js"></script>
<script type="text/javascript" src="tpl/assets/js/custom.js"></script>
    </body>
</html>

