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
        <?php echo file_get_contents('./partials/staff.php') ?>
        <?php echo file_get_contents('./partials/contactus.php') ?>
    </div>    
</section>

<?php echo file_get_contents('./partials/footer.php') ?>
</body>
