<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
        <link rel="stylesheet" href="tpl/assets/css/fonts/font-awesome.min.css" media="all" />

        
    </head>
    <body>
     
        <header class="header-style-2">
  
    <!-- Start Menu -->
<?php require_once('menu_header.php'); ?>

<section class="bg-page-header">
    <div class="page-header-overlay">
        <div class="container">
            <div class="row">
                <div class="page-header">

                </div><!-- .page-header -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header-overlay -->
</section>


<!-- End Page Header Section -->


<!-- Start Single Shop Project Section -->

<section class="bg-shop-section">
    <div class="container">
        <div class="row">
            <div class="shop-option">
                <div class="row">
                    <div class="col-md-9 col-sm-6">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="single-product-slider">
                                    <div id="slider" class="flexslider">
                                        <ul class="slides">
                                            <li>
                                                <img src="midias/produtos/lixeira-com-pedal-lar-15l.jpg" />
                                            </li> 
                                                                                    </ul>
                                    </div> 
                                    <div id="carousel" class="flexslider">
                                        <ul class="slides">
                                            <li>
                                                <img src="midias/produtos/lixeira-com-pedal-lar-15l.jpg" />
                                            </li> 
                                                                                    </ul>
                                    </div>
                                </div><!-- .single-product -->

                            </div><!-- .col-md-5 -->
                            <div class="col-md-5">
                                
                                <div class="about-product-datails" style =  "margin:0 auto !important;">
                                    
                                    <?php
                                        
                                           
                                            include ("DBCon.php");
                                            
                                            $produto = $_GET['id'];
                                            
                                            
                                            $consulta = 'SELECT * FROM produtos_limpeza WHERE id = "'.$produto.'"';
                                            
                                            $con = $mysqli->query($consulta) or die($mysqli->error);
                                            
                                            $dado = $con->fetch_array();
                                            
                                            echo '<h3>'.$dado['nome'].'</h3>';
                                        echo '<div style="padding:15px" class="desc-content">';
                                            
                                            
                                            echo '<img style="max-width: 100%;
                                            "  src="'.$dado['img'].'" alt="'.$dado['nome'].'"> <br><br>';
                                           
                                            
                                            
                                            
                                            
                                            echo"Uso:  ". $dado['uso'] ."<br><br>";
                                            echo"Apresentação: ". $dado['apresentacao']."<br>";
                                            if ($dado['fragrancia'] != ""){
                                            echo"Fragrância: ". $dado['fragrancia']."<br>";
                                            }
                                            
                                            
                                            
                                            
                                           
                                            
                                            
                                            ?>
 
                                        <!-- AddToAny BEGIN -->
                                        <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                            <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                            <a class="a2a_button_facebook"></a>
                                            <a class="a2a_button_whatsapp"></a>
                                            <a class="a2a_button_twitter"></a>
                                        </div>
                                        <script async src="static.addtoany.com/menu/page.js"></script>
                                        <!-- AddToAny END -->
                                    </div>
                                </div><!-- .about-product-datails -->
                            </div><!-- .col-md-7 -->
                          
                        </div><!-- .row -->

                    </div><!-- .col-md-9 -->
                    


                           <?php require_once ('menulateral.php');?>
                        
                    </div><!-- .col-md-3 -->
                </div><!-- .row -->
            </div><!-- .shop-option -->
        </div><!-- .row -->
    </div><!-- .container -->
</section>



<!-- End Shop Project Section -->
<!-- Start Footer Section -->
<footer>
    <div class="bg-footer-bottom">
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
<div class="scroll-img"><i class="fa fa-angle-up" aria-hidden="true"></i></div>

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

