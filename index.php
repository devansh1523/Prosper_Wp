<?php
    //get header.php file
    get_header();
?>     


        <!--Banner area-->
        <section class="banner-area">
            <div class="container-fluid">
                <div class="banner">
                    <!--<img src="./assets/images/background.png" alt="banner area" class="fluid">-->
                    <?php 
                        if(get_theme_mod('header_image')): ?>
                        <img src="<?php echo esc_url(get_theme_mod("header_image"))?>" alt="banner area" class="fluid">
                        <?php EndIf; ?>
                </div>
                <div class="banner-title text-center">
                    <!--<h1 class="text-lg text-light">Prosper</h1>-->
                    <?php 
                        if(get_theme_mod('header_text_field')): ?>
                        <h1 class="text-lg text-light"><?php echo get_theme_mod('header_text_field') ?></h1>
                        <?php EndIf; ?>
                    <!--<span class="description text-sm text-light">With the Power of Wordpress</span>-->
                    <?php 
                        if(get_theme_mod('header_desc_field')): ?>
                        <span class="description text-sm text-light"><?php echo get_theme_mod('header_desc_field') ?></span>
                        <?php EndIf; ?>
                </div>
            </div>
        </section>
        <!--End Banner area-->

        <!--Categories-->
        <section class="categories">
            <div class="container">
                <div class="flex flex-row flex-wrap">
                    <?php
                        //template tag
                        get_template_part('templates/temp/categories',)
                    ?>
                </div>
            </div>
        </section>
        <!--End Categories-->

        <!--Post area-->
        <section class="post-area">
            <div class="wrapper">
                <!--Two columns layout-->
                <div class="row">
                    <div class="col-7-lg col-12 md">
                        <!--two columns layout-->
                        <div class="grid">
                            <?php
                                //load template post-content.php
                                get_template_part('templates/temp/post','content');
                            ?>
                        </div>

                        <!--Pagination Area-->
                        <div class="row">
                            <div class="col-12-lg text-center">
                                <div class="pagination">
                                    <?php
                                        echo paginate_links(array(
                                            'mid_size' => 2,
                                            'prev_text' => __('<span class="fa fa-arrow-left"></span>'),
                                            'next_text' => __('<span class="fa fa-arrow-right"></span>')
                                        ));
                                    ?>
                                    <!-- <a href="#"><span>1</span></a>
                                    <a href="#"><span>2</span></a>
                                    <a href="#"><span>3</span></a>
                                    <a href="#"><span class="fa fa-arrow-right"></span></a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4-lg col-12-md">
                        <!--get the sidebar template -->
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </section>
        <!--End Post area-->

<?php
    //get footer 
    get_footer();
?>
