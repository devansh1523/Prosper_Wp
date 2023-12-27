</main>
   <!--End Main-->

   <!--Footer area-->
   <footer class="footer-area">
        <div class="row">
            <div class="col-4-lg col-4-md col-12-sm">
                <!--About me-->
                <section class="about-me">
                    <div class="site-logo">
                        <!--<img src="./assets/images/Logo.png" alt="logo" class="">--> 
                        <?php
                        if(function_exists('the_custom_logo')){
                            the_custom_logo();
                        }else{
                            bloginfo('name');
                        }
                        ?>
                    </div>
                    <p class="para">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam officia exercitationem similique expedita inventore veniam tenetur quaerat atque deleniti pariatur!
                    </p>
                    <div class="social-media">
                        <a href="#" class="text-primary"><span class="fab fa-facebook"></span></a>
                        <a href="#" class="text-primary"><span class="fab fa-instagram"></span></a>
                        <a href="#" class="text-primary"><span class="fab fa-twitter"></span></a>
                        <a href="#" class="text-primary"><span class="fab fa-youtube"></span></a>
                    </div>
                </section>
            </div>
            <div class="col-4-lg col-4-md col-12-sm">
                <!--Recent Post-->
                <section class="recent-post">
                    <a href="#" class="text-md text-light">Recent Post</a>
                    <div class="posts flex flex-row flex-wrap">
                        <?php
                            get_template_part('templates/temp/recent','post');
                        ?>
                    </div>
                </section>
            </div>
            <div class="col-3-lg col-4-md col-12-sm">
                <!--Popular tags-->
                <section class="popular-tags">
                    <a href="#" class="text-md text-light">Popular Tags</a>
                    <div class="tags flex flex-row flex-wrap">
                        <a href="#"><span>camera</span></a>
                        <a href="#"><span>bike</span></a>
                        <a href="#"><span>craft</span></a>
                        <a href="#"><span>Photography</span></a>
                        <a href="#"><span>article</span></a>
                        <a href="#"><span>events</span></a>
                        <a href="#"><span>driving</span></a>
                        <a href="#"><span>wordpress</span></a>
                    </div>
                </section>
            </div>
        </div>

        <div class="rights text-center text-gray">
            Wordpress Theme By <a href="#" class="text-primary">Devansh Cokerey</a> &copy; 2023
        </div>

   </footer>
   <!--End Footer-->

    <!--script files-->

    <script src="./vendor/js/jquery-3.7.1.js"></script>

    <script src="./assets/js/main.js"></script>

</body>

</html>