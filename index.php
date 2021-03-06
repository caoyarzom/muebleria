<?php //   
//require('visitas/countbdd.php');   
//echo $men;   
?>  
<!DOCTYPE html>
<html>

    <head> 

        <meta name="robots" content="index, follow" /> 
        <meta name="keywords" content="" /> 
        <meta name="description" content="" /> 
        <title>Muebleria Alaracon- Diseño - Muebles- Cortes CNC</title> 



        <!-- CSS Start //--> 
        <link rel="shortcut icon" href="./images/favicon.png"/> 
        <link rel="stylesheet" type="text/css" href="./style.css"/> 
       <link rel="stylesheet" type="text/css" href="./css/colorbox.css" /> 
        <link rel="stylesheet" type="text/css" href="./css/superfish.css" />
        <link rel="stylesheet" type="text/css" href="./css/tipTip.css" />
        <link rel="stylesheet" type="text/css" href="./css/styles-own.css" />

        <link id="google_font" href='http://fonts.googleapis.com/css?family=Maven+Pro:regular,bold&v1' rel='stylesheet' type='text/css'>
        <!-- fallback if js not enabled //-->
        <link href="./css/noscript.css" rel="stylesheet" type="text/css" media="screen,all" id="noscript" /> 
        <!-- CSS End //-->


        <!-- JS Start //-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script> 
        <script>window.jQuery || document.write("<script src='./js/libs/jquery-1.6.2.min.js'>\x3C/script>")</script>
        <script type="text/javascript">
            var $ = jQuery.noConflict();
        </script>

        <script type="text/javascript" src="galleriffic-2.0/js/jquery.galleriffic.js"></script>
        <link rel="stylesheet" href="galleriffic-2.0/css/basic.css" type="text/css" />
        <link rel="stylesheet" href="galleriffic-2.0/css/galleriffic-2.css" type="text/css" />
        <script type="text/javascript" src="galleriffic-2.0/js/jquery.opacityrollover.js"></script>

        <script type="text/javascript" src="./js/jquery.detectbrowser.js"></script> 
       
        <script type="text/javascript" src="./js/jquery.easing.1.3.js"></script>
        
        <script type="text/javascript" src="./js/jquery.twitter.js"></script>
        
        
        <script type="text/javascript" src="./js/jquery.quovolver.js"></script>
        <script type="text/javascript" src="./js/jquery.tipTip.minified.js"></script>
        <script type="text/javascript" src="./js/jquery.totop.js"></script>
        <script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>
     
        <script type="text/javascript" src="./js/redirection_mobile.min.js"></script>
        <script type="text/javascript" src="./js/jflickrfeed.min.js"></script>
        <script type="text/javascript" src="./js/jquery.infieldlabel.min.js"></script>
         <script type="text/javascript" src="./js/jquery.colorbox-min.js"></script>
        <script type="text/javascript" src="./js/jquery.superfish.js"></script>
        <script type="text/javascript" src="./js/jquery.supersubs.js"></script>
   <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
        <!-- Custom Functions - Main Js file -->
        <script type="text/javascript" src="./js/functions.js"></script> 

        <!-- Scripts only for this page -->
        <link href="./sliders/nivoslider/nivo-slider.css" rel="stylesheet">
        <script type="text/javascript" src="./sliders/nivoslider/jquery.nivo.slider.pack.js"></script>
        <!-- fancybox -->
        <script src="fancybox/fancybox/jquery.fancybox-1.3.4.pack.js" type="text/javascript"> </script>

        <link rel="stylesheet" href="fancybox/fancybox/jquery.fancybox-1.3.4.css" type="text/css"/>

        <!-- end fancybox -->
        <!-- Start bxSlider -->

       <script src="jquery.bxSlider/jquery.bxSlider/jquery.bxSlider.min.js" type="text/javascript"> </script>
        <link rel="stylesheet" href="jquery.bxSlider/jquery.bxSlider/bx_styles/bx_styles.css" type="text/css"/>
        <!-- Start bxSlider -->
        <script type='text/javascript' src="js/prefixfree.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#visitas').load("visitas/visitas.php")
                $('#slider').nivoSlider({
                    effect:'sliceDown' //Specify sets like: 'fold,fade,sliceDown'
                });
                // load hidden map
                loadHiddenMap();
                //Esconde slider y muestra menu Servicios-Muebles
                $('#menu_ser_mubles').click(function () {
                    $('#slider').hide();
                    $(".ns-container").load("gal_muebles.php");
                });
                $('#menu_ser_cncn').click(function () {
                    $('#slider').hide();
                    $(".ns-container").load("gal_cncn.php");
                });
                $('#logo_1').click(function () {
                    $('#slider').hide();
                    $(".ns-container").load("gal_muebles.php");
                });
                $('#logo_2').click(function () {
                    $('#slider').hide();
                    $(".ns-container").load("gal_cncn.php");
                });
                $('#cliente').click(function () {
                    $('#slider').hide();
                    $(".ns-container").load("cliente.php");
                });
                $('#portafolio').click(function () {
                    $('#slider').hide();
                    $(".ns-container").load("portafolio.php");
                });
                $('#nosotros').click(function () {
                    $('#slider').hide();
                    $(".ns-container").load("nosotros.php");
                });
                $('#contacto').click(function () {
                    $('#slider').hide();
                    $(".ns-container").load("contacto.php");
                });
               
                
            });
        </script> 
        <!-- JS End //--> 

        <meta charset="UTF-8"></head>

    <body class="homepage nivo-slider">
        <header>
            <div id="wrapper">

                <div id="header">
                    <div class="container_12">
                        <div class="grid_9 omega">
                            <ul class="menu sf-menu">
                                <li><a href="./index.php">Home</a>
                                    
                                <li><a >Servicios</a>
                                    <ul> 
                                        <li id="menu_ser_mubles"><a  >Muebles</a></li>
                                        <li id="menu_ser_cncn"><a >Cortes CNC</a></li>
                                    </ul>
                                </li>
                                <li id="cliente"><a>Clientes</a>
                                    <!--<ul>
                                        <li><a href="#">Company</a></li>
                                    </ul>-->
                                </li>
                                <li id="portafolio"><a >Portafolio</a>
                                    <!--<ul>
                                        <li><a href="#">Company</a></li>
                                    </ul>-->
                                </li>
                                <li id="nosotros"><a>Nosotros</a></li>
                                <li id="contacto"><a >Contactanos</a></li>
                            </ul><!-- Main menu end -->
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="shadow-down"></div>
                </div><!--Header End -->
                <!--Franja Start -->
                <div id="franja">
                    <a  id="logo_1"></a>
                    <a  id="logo_2"></a>
                </div><!--franja End -->
            </div>
        </header>
        <section>
            <!-- Slideshow End -->
            <div id="slideshow">

                <div class="ns-container">
                    <div id="slider" class="nivoSlider">
                        <img src="./images/sliders/nivoslider/slide1.png" alt=""  />
                        <img src="./images/sliders/nivoslider/slide2.png" alt="" />
                        <img src="./images/sliders/nivoslider/slide3.png" alt="" />
                        <img src="./images/sliders/nivoslider/slide4.png" alt=""  />
                    </div>
                    <!--<div id="htmlcaption" class="nivo-html-caption">
                        <p> Imagenes de Nuestros Trabajos</p>
                    </div>-->
                </div>
                <!--  <a href="#" id="top-link">Scroll to top</a> -->
            </div>
            <!-- Wrapper end -->
        </section>
        <footer>
            <div id="container">
                <div class="bottom">
                    <div class="shadow-up"></div>
                    <div class="container_12">
                        <h3 class="title">DETALLES DE CONTACTO</h3>
                        <div class="grid_3">

                            Felipe Alarcon<br>
                            Diseñador Industrial<br>
                            Santiago, Chile<br>
                            Cel: (0569) 7 2048521<br>
                            Email: <a href="#">cortes.routercnc@gmail.com</a><br>
                        </div>
                        <div class="grid_3">
                            <p>Felix Alarcon<br>
                                Jefe Produccion y Proyectos<br>
                                Cel: (0569) 9 1342823<br>
                                Email: <a href="#">alarcon.felix@gmail.com</a><br>
                        </div>
                        <div class="grid_3">
                            <h3 class="title"></h3>
                            Carnot #777, San Miguel, Chile<br>
                            <p><a href="" class="map_link hasTip" title="Haz Click para ver el Mapa">Mapa </a></p>


                        </div>
                        <div class="grid_3">

                            <p><strong>Redes Sociales</strong></p>
                            <a target="_blank" href="https://twitter.com/#!/cortesroutercnc" rel="nofollow"><img title="Siguenos en Twitter" alt="Twitter" src="./images/social_icons/twitter.png" /><strong></strong></a> 
                            <a target="_blank" href="https://www.facebook.com/cortes.routercnc" rel="nofollow"><img title="Siguenos en Facebook" alt="Facebook" src="./images/social_icons/facebook.png" /><strong></strong></a> 

                        </div>
                        <div class="grid_3">
                            <div id="visitas"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div><!-- Bottom End -->
                <div class="hidden-map-wrapper">
                    <div class="shadow-top"></div>
                    <div class="shadow-bottom"></div>
                    <div class="close-map"></div>
                    <div id="hidden_map"></div><!-- Container of the hidden map -->
                </div>

            </div>
        </footer>
        <!-- #Container End -->
    </body>
</html>