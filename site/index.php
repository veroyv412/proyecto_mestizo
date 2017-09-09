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
         style="background: url('images/modals/ominira.png') no-repeat;
         background-size: cover;
         max-width: 700px;
         data-height-lg="300">
        <div style="padding: 50px;">
            <div class="heading-block nobottomborder bottommargin-sm" style="max-width:500px;">
                <h3>NOTICIAS DE ÚLTIMO MOMENTO</h3>
                <span>Compañía Proyecto Mestizo Convoca</span>
            </div>
            <div class="widget-subscribe-form-result">
                Hombres y Mujeres que Bailen.<br>
                Se requiere experiencia escénica.<br>
                Para realizar una participación en la Obra OMINIRA de Gaby Fabro.<br>
                El lenguaje danzario de la obra se basa en lo AFRO MODERNO. <br>
                Esto NO es excluyente para poder audicionar.<br>
                ...<br><br>

                <a class="button button-rounded button-border button-light noleftmargin"
                   onclick="$.magnificPopup.close();$('html, body').animate({ scrollTop: $('#novedades').offset().top }, 500);"
                   type="submit"
                   style="margin-top:15px;">Mas Información</a>
            </div>
        </div>
    </div>
</div>

<?php echo file_get_contents('./partials/footer.php') ?>
</body>
