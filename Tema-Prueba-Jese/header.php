<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 15/04/18
 * Time: 08:36 AM
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Para Katsen</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_parent_theme_file_uri( 'bootstrap/css/bootstrap.css' ); ?>" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo get_parent_theme_file_uri( 'style.css' ); ?>" rel="stylesheet">
    <link href="<?php echo get_parent_theme_file_uri( 'assets/bootstrap-social-gh-pages/css/font-awesome.css' ); ?>" rel="stylesheet">
    <link href="<?php echo get_parent_theme_file_uri( 'assets/bootstrap-social-gh-pages/css/bootstrap-social.css' ); ?>" rel="stylesheet"
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body class="pb-0 " <?php body_class(); ?>>
<nav class="navbar navbar-expand-md navbar-dark fixed-top navegadorespecial">
    <div class="container">
        <a class="navbar-brand ml-lg-5 ml-xl-5 cambiarlogo" href="#">
            <img class="d-inline-block align-top" src="<?php echo get_parent_theme_file_uri( 'assets/img/logo.png' ); ?>" width="220" height="100" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php wp_nav_menu(array(
            'theme_location' => 'primero',
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'navbarCollapse',
            'items_wrap' => ' <ul class="navbar-nav ml-auto mr-md-5 mr-lg-5 mr-xl-5">%3$s</ul>'
        )); ?>
    </div>
</nav>
