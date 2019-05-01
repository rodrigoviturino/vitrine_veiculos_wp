<?php 
// Template Name: Home

    get_header( );
?>

    <?php include ( TEMPLATEPATH . "/widgets_parts/banner_home.php" ); ?>

    <?php // include ( TEMPLATEPATH . "/widgets_parts/widgets_search_cars.php" ); ?>

<!-- Localização -->
<section class="localizacao">
    <div class="container">
        <div class="row">


        <div class="col-md-6">
            <div class="localizacao--searchLocal">
                <!-- <label for="makes" class="control-label">Make</label> -->
                <select name="" id="">
                    <option value="Estado">Estado</option>
                    <option value="São Paulo">São Paulo</option>
                    <option value="Minas Gerais">Minas Gerais</option>
                    <option value="Santa Catarina">Santa Catarina</option>
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="localizacao--searchLocal">
                <!-- <label for="makes" class="control-label">Make</label> -->
                <select name="" id="">
                    <option value="Cidade">Cidade</option>
                    <option value="São Paulo - Capital">São Paulo</option>
                    <option value="Belo Horizonte">Belo Horizonte</option>
                    <option value="Lorem">Lorem Ipsum</option>
                </select>
                <button type="submit">Filtrar</button>
            </div>
        </div>


            <div class="col-md-6 col-lg-4 localizacao__car--item">
                <div>
                    <img src="<?php echo get_template_directory_uri( ) . '../assets/img/cars/allure-2008-1-6.jpg' ?>" alt="">
                </div>
                <h3>Titulo Maior</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <span>Status: <i style="color:darkred" class="fas fa-circle"></i> | <a href="#" class="localizacao__car--item--info">Saiba Mais</a> </span>
                <a href="#" class="localizacao__car--item--btnBuy">Comprar</a> 
            </div>

            <div class="col-md-6 col-lg-4 localizacao__car--item">
                <div>
                    <img src="<?php echo get_template_directory_uri( ) . '../assets/img/cars/0-0_carro_facil_900x800_hb20_sedan_1-6.jpg' ?>" alt="">
                </div>
                <h3>Titulo Maior</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <span>Status: <i style="color:green" class="fas fa-circle"></i> | <a href="#" class="localizacao__car--item--info">Saiba Mais</a> </span>
                <a href="#" class="localizacao__car--item--btnBuy">Comprar</a>
            </div>

            <div class="col-md-6 col-lg-4 localizacao__car--item">
                <div>
                    <img src="<?php echo get_template_directory_uri( ) . '../assets/img/cars/allure-2008-1-6.jpg' ?>" alt="">
                </div>
                <h3>Titulo Maior</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <span>Status: <i style="color:green" class="fas fa-circle"></i> | <a href="#" class="localizacao__car--item--info">Saiba Mais</a> </span>
                <a href="#" class="localizacao__car--item--btnBuy">Comprar</a>
            </div>

            <div class="col-md-6 col-lg-4 localizacao__car--item">
                <div>
                    <img src="<?php echo get_template_directory_uri( ) . '../assets/img/cars/volkswagen_polo_2019.png' ?>" alt="">
                </div>
                <h3>Titulo Maior</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <span>Status: <i style="color:green" class="fas fa-circle"></i> | <a href="#" class="localizacao__car--item--info">Saiba Mais</a> </span>
                <a href="#" class="localizacao__car--item--btnBuy">Comprar</a>
            </div>

            <div class="col-md-6 col-lg-4 localizacao__car--item">
                <div>
                    <img src="<?php echo get_template_directory_uri( ) . '../assets/img/cars/ford_ka_sedan_2019.png' ?>" alt="">
                </div>
                <h3>Titulo Maior</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <span>Status: <i style="color:darkred" class="fas fa-circle"></i> | <a href="#" class="localizacao__car--item--info">Saiba Mais</a> </span>
                <a href="#" class="localizacao__car--item--btnBuy">Comprar</a>
            </div>

            <div class="col-md-6 col-lg-4 localizacao__car--item">
                <div>
                    <img src="<?php echo get_template_directory_uri( ) . '../assets/img/cars/volkswagen_virtus_2019.png' ?>" alt="">
                </div>
                <h3>Titulo Maior</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <span>Status: <i style="color:darkred" class="fas fa-circle"></i> | <a href="#" class="localizacao__car--item--info">Saiba Mais</a>  </span>
                <a href="#" class="localizacao__car--item--btnBuy">Comprar</a>
            </div>

        </div>
    </div>
</section>
<!-- Fim Localização -->

    <!-- Contact Form -->
    <?php include ( TEMPLATEPATH . "/widgets_parts/contact_form.php"); ?>


<?php
    get_footer( );
?>