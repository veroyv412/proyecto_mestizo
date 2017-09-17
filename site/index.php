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
        <?php echo file_get_contents('./partials/novedades.php')?>
        <?php echo file_get_contents('./partials/staff.php') ?>
        <?php echo file_get_contents('./partials/contactus.php') ?>
    </div>    
</section>

<div class="modal-on-load" data-target="#myModal1"></div>
<!-- Modal -->
<div class="modal1 mfp-hide" id="myModal1" >
    <div class="block dark divcenter"
         style="background: url('images/modals/audicion.png') no-repeat;
         background-size: cover;
         max-width: 700px;
         data-height-lg="300">
        <div style="padding: 50px;">
            <div class="heading-block nobottomborder bottommargin-sm" style="max-width:500px;">
                <h3>NOTICIAS DE ÚLTIMO MOMENTO</h3>
                <span>Compañía Proyecto Mestizo Convoca</span>
            </div>
            <div class="widget-subscribe-form-result">
                <ul class="iconlist">
                    <li><i class="icon-ok-sign"></i> Hombres y Mujeres que Bailen.</li>
                    <li><i class="icon-ok-sign"></i> Se requiere experiencia escénica.</li>
                    <li><i class="icon-ok-sign"></i> Para realizar una participación en la Obra OMINIRA de Gaby Fabro.</li>
                    <li><i class="icon-ok-sign"></i> El lenguaje danzario de la obra se basa en lo AFRO MODERNO. Esto NO es excluyente para poder audicionar.</li>
                    <li><i class="icon-ok-sign"></i> Concurrir con vestimenta que permita observar bien la línea del cuerpo.</li>
                </ul>
                <p>
                    Los días de ensayo de la Compañía son:<br>
                    Miércoles y Viernes de 13.30hs a 17hs.<br>
                    Pudiendo agregar algún horario de común acuerdo.<br><br>

                    Las funciones se realizarán en los meses de OCTUBRE y NOVIEMBRE.<br>
                </p>

                <a class="button button-rounded button-border button-light noleftmargin"
                   onclick="$.magnificPopup.close();$('html, body').animate({ scrollTop: $('#novedades').offset().top }, 500);"
                   type="submit"
                   style="margin-top:15px;">Mas Información</a>

                <a class="button button-rounded button-border button-light noleftmargin hidden-xs right"
                   onclick="$.magnificPopup.close();return false;"
                   type="submit"
                   style="margin-top:15px;">Cerrar</a>

                <a class="button button-rounded button-border button-light noleftmargin"
                   onclick="$.magnificPopup.close();$('html, body').animate({ scrollTop: $('#next-novedad').offset().top }, 500);"
                   type="submit"
                   style="margin-top:15px;">Siguiente <i class="icon-chevron-right"></i> </a>
            </div>
        </div>
    </div>
</div>


<?php echo file_get_contents('./partials/footer.php') ?>
</body>
