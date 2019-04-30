<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'./style.css' ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'./assets/library/slick/slick.css' ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'./assets/library/slick/slick-theme.css' ?>">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri( ) . './favicon.png' ?>" />
    <title>Vitrine de Veículos</title>

    <?php wp_head( ); ?>
</head>
<body>
    
<header>
    <div class="container">
        <div class="row">            
            <div class="col-md-6">
                <a href="#"><img class="logo" src="<?php echo get_template_directory_uri().'./assets/img/logo.png' ?>" alt="logo">  </a>
            </div>

            <div class="col-md-6">
                <ul class="header__menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#" class="header__menu--login">Login</a></li>
                </ul>
            </div>

        </div>
    </div>
</header>