<?php 
// Template Name: Home

    get_header( );
?>

    <?php include ( TEMPLATEPATH . "/widgets_parts/banner_home.php" ); ?>

    <?php include ( TEMPLATEPATH . "/widgets_parts/widgets_search_cars.php" ); ?>

<!-- Localização -->
<section class="localizacao">
    <div class="container">
        <div class="row">

            <div class="col-md-4 localizacao__car-item">
                <div>
                    <img src="<?php echo get_template_directory_uri( ) . '../assets/img/cars/allure-2008-1-6.jpg' ?>" alt="">
                </div>
                <h3>Titulo Maior</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <a href="#">Comprar</a>
            </div>

            <div class="col-md-4 localizacao__car-item">
                <div>
                    <img src="<?php echo get_template_directory_uri( ) . '../assets/img/cars/0-0_carro_facil_900x800_hb20_sedan_1-6.jpg' ?>" alt="">
                </div>
                <h3>Titulo Maior</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <a href="#">Comprar</a>
            </div>

            <div class="col-md-4 localizacao__car-item">
                <div>
                    <img src="<?php echo get_template_directory_uri( ) . '../assets/img/cars/allure-2008-1-6.jpg' ?>" alt="">
                </div>
                <h3>Titulo Maior</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <a href="#">Comprar</a>
            </div>

            <div class="col-md-4 localizacao__car-item">
                <div>
                    <img src="<?php echo get_template_directory_uri( ) . '../assets/img/cars/volkswagen_polo_2019.png' ?>" alt="">
                </div>
                <h3>Titulo Maior</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <a href="#">Comprar</a>
            </div>

            <div class="col-md-4 localizacao__car-item">
                <div>
                    <img src="<?php echo get_template_directory_uri( ) . '../assets/img/cars/ford_ka_sedan_2019.png' ?>" alt="">
                </div>
                <h3>Titulo Maior</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <a href="#">Comprar</a>
            </div>

            <div class="col-md-4 localizacao__car-item">
                <div>
                    <img src="<?php echo get_template_directory_uri( ) . '../assets/img/cars/volkswagen_virtus_2019.png' ?>" alt="">
                </div>
                <h3>Titulo Maior</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <a href="#">Comprar</a>
            </div>

        </div>
    </div>
</section>
<!-- Fim Localização -->


<?php
    get_footer( );
?>