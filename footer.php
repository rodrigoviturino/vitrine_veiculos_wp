
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 footer--logo">
                <img src="<?php echo get_template_directory_uri().'/assets/img/logo.png'; ?>" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum commodi nulla alias eligendi eos.</p>
            </div>

            <div class="col-md-4 footer--menu">
                <p><a href="#">Menu</a></p>
                <ul>
                    <li><a href="#">Link 01</a></li>
                    <li><a href="#">Link 02</a></li>
                    <li><a href="#">Link 03</a></li>
                </ul>
            </div>

            <div class="col-md-4 footer--redeSocial">
                <p>Rede Social</p>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Linkedin</a></li>
                    <li><a href="#">Youtube</a></li>
                </ul>
            </div>

        </div>
    </div>
    <?php wp_footer(); ?>
</footer>

<!-- Scripts -->
    <script src="<?php echo get_template_directory_uri() . '/assets/js/jquery.min.js'?> " ></script>
    <script src="<?php echo get_template_directory_uri() . '/assets/library/slick/slick.min.js'?> " ></script>
    <script src="<?php echo get_template_directory_uri() . '/assets/js/main.js'?> " ></script>

</body>
</html>