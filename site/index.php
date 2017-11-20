<?php
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Veronica Nisenbaum" />
    <link rel="shortcut icon" href="/images/gaby_fabro/favicon.ico">

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/colors.php" type="text/css" />
    <link rel="stylesheet" href="css/swiper.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta property="og:url" content="http://gabyfabro.com">
    <meta property="og:title" content="Bailarina, Coreógrafa y Directora">
    <meta property="og:description" content="Bailarina, Coreógrafa, Directora de la Escuela de Danzas Proyecto Mestizo y de la Compañía de Danza Proyecto Mestizo.">
    <meta property="og:image" content="http://gabyfabro.com/images/gaby_fabro/gaby_fabro_seo.jpg">

    <!-- Document Title
    ============================================= -->
    <title>Gaby Fabro</title>

    <style>
        .feature-box.fbox-plain.fbox-small p {
            margin-left: 0px !important;
        }

        .team-image img {
            width: 120px;
        }
        
        .avatar {
            width: 120px;
            height: 120px;
            margin: 0 auto 15px;
            -webkit-border-radius: 100%;
            border-radius: 100%;
            overflow: hidden;
            position: relative;
            z-index: 1;
            border: 5px solid #DDDDDD;
        }
    </style>

    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-104114288-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments)};
        gtag('js', new Date());

        gtag('config', 'UA-104114288-1');
    </script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-104114288-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>

<body class="sticky-footer stretched">

<div class="body-overlay"></div>
<?php echo file_get_contents('./partials/header.php') ?>
<?php echo file_get_contents('./partials/home_slider.php') ?>
<section id="content" style="margin-bottom: 0px;">
    <div class="content-wrap">
        <?php echo file_get_contents('./partials/gaby_fabro.php') ?>
        <?php echo file_get_contents('./partials/gallery.php') ?>
        <?php echo file_get_contents('./partials/proyecto_mestizo.php') ?>
        <?php echo file_get_contents('./partials/calendario_clases.php') ?>
        <?php echo file_get_contents('./partials/compania.php') ?>
        <?php /*echo file_get_contents('./partials/events.php') */?>
        <?php /*echo file_get_contents('./partials/novedades.php') */?>
        <?php echo file_get_contents('./partials/staff.php') ?>
        <?php echo file_get_contents('./partials/contactus.php') ?>
    </div>    
</section>


<!--<div class="modal-on-load" data-target="#myModal"></div>
<!-- Modal -->
<div class="modal1 mfp-hide" id="myModal" >
    <div class="block divcenter" style="background-color: #FFF; max-width: 700px;">
        <div style="padding: 50px;">
            <h3>Novedades</h3>
            <div class="row" data-animate="fadeIn">
                <div id="posts" class="events small-thumbs">
                    <div class="entry clearfix">
                        <h5><a href="#">EL EMPLEO DE LA TÉCNICA EN LAS DANZAS POPULARES Y FOLKLÓRICAS DE LATINOAMERICA Y EL CARIBE</a></h5>
                        <div class="entry-image hidden-sm">
                            <a href="#">
                                <img src="images/gaby_fabro/novedades/gaby_charla.jpg" alt="Charla">
                                <div class="entry-date">Nov<span>4</span></div>
                            </a>
                        </div>
                        <div class="entry-c">
                            <ul class="entry-meta clearfix">
                                <li><a href="#"><i class="icon-time"></i> 4 de Noviembre</a></li>
                                <li><a href="#"><i class="icon-map-marker2"></i>Fórum Santiago del Estero - Centro de Convenciones</a></li>
                            </ul>
                            <div class="entry-content">
                                <p>
                                    Destinado a todo el público interesado en la temática.
                                <br>
                                A cargo de Gaby Fabro - Bailarina, Coreógrafa, Directora de la Escuela de Danzas Proyecto Mestizo y de la Compañía de Danza Proyecto Mestizo, CABA.
                                <br>SALA GRAL. JOSE DE SAN MARTIN
                                </p>
                            </div>
                            <br><br>
                        </div>
                    </div>
                    <div class="entry clearfix">
                        <h5><a href="#">FESTIVAL NACIONAL DE CULTURA AFRO ARGENTINA</a></h5>
                        <div class="entry-image hidden-sm">
                            <a href="#">
                                <img src="images/gaby_fabro/novedades/ominira_musicos.jpg" alt="Congreso La Plata">
                                <div class="entry-date">Nov<span>10</span></div>
                            </a>
                        </div>
                        <div class="entry-c">
                            <ul class="entry-meta clearfix">
                                <li><a href="#"><i class="icon-time"></i> 10 de Noviembre</a></li>
                                <li><a href="#"><i class="icon-map-marker2"></i>Centro Cultural Pasaje Dardo Rocha, Sala A. Calle 7 entre 49 y 50, La Plata</a></li>
                            </ul>
                            <div class="entry-content">
                                <b>Unica Función</b>
                                <br>Viernes 10 de Noviembre 21:00hs
                                <br>
                                <b>Centro Cultural Pasaje Dardo Rocha</b>
                            </div>
                            <br><br>
                        </div>
                    </div>
                </div>
                <a href="#" class="button" onClick="$.magnificPopup.close();return false;">Cerrar Ventana</a>
            </div>
        </div>
    </div>
</div>

-->

<!--<div class="modal-on-load" data-target="#myModal2"></div>
<!-- Modal -->
<!--<div class="modal1 mfp-hide" id="myModal2">
    <div class="block divcenter" style="background-color: #FFF; max-width: 700px;">
        <div class="row nomargin clearfix">
            <div class="col-sm-6" data-height-lg="456" data-height-md="456" data-height-sm="456" data-height-xs="0" data-height-xxs="0" style="background-image: url(images/gaby_fabro/novedades/ominira_musicos.jpg); background-size: cover;"></div>
            <div class="col-sm-6 col-padding" data-height-lg="456" data-height-md="456" data-height-sm="456" data-height-xs="456" data-height-xxs="456">
                <div>
                    <h2 class="uppercase ls1">Novedades</h2>
                    <h3>OMINIRA</h3>
                    <p>
                        <b>Unica Función</b>
                        <br>Viernes 10 de Noviembre 21:00hs
                        <br>
                        <b>Centro Cultural Pasaje Dardo Rocha</b>
                        <br>
                        Sala A. Calle 7 entre 49 y 50, La Plata
                        <br>Bajo el marco del FESTIVAL NACIONAL DE CULTURA AFRO ARGENTINA
                    </p>
                    <p>
                        <a href="#" class="button" onClick="$.magnificPopup.close();return false;">Cerrar Ventana</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>-->


<?php echo file_get_contents('./partials/footer.php') ?>
</body>
