<aside class="sidebar">
                             <!--Latest Post section-->
                        <section class="latest-post">
                            <a href="#" class="text-md text-dark">Latest Post</a>
                            <div class="flex flex-column">
                                <!--get template file get_template_part()-->
                                <?php get_template_part('templates/temp/sidebar','latest-post'); ?>
                            </div>
                        </section>
                        <!--End Latest Post-->

                        <!--search area-->
                        <section class="search-area">
                            <div class="search">
                                <h3 class="text-md text-dark">Search</h3>
                                <!--<form class="form-group">
                                    <input type="search" class="input-control mr-sm-2" placeholder="Search">
                                    <button class="btn btn-submit" type="submit"><i class="fas fa-search"></i></button>
                                </form>-->
                                <?php 
                                get_search_form()
                                ?>
                            </div>
                        </section>
                        <!--End Search area-->

                        <!--Popular tags-->
                        <section class="popular-tags">
                            <h4 class="text-md">Popular Tags</h4>
                            <div class="tags flex flex-row flex-wrap">
                                <?php

                                $tags = get_tags();
                                ?>

                                <?php if($tags):?>
                                <?php foreach($tags as $tag):?>
                                    <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"><span><?php echo esc_html($tag->name); ?></span></a>                                
                                <?php endforeach; ?>
                                <?php endif; ?>
                                <!--<a href="#"><span>camera</span></a>
                                <a href="#"><span>bike</span></a>
                                <a href="#"><span>craft</span></a>
                                <a href="#"><span>Photography</span></a>
                                <a href="#"><span>article</span></a>
                                <a href="#"><span>events</span></a>
                                <a href="#"><span>driving</span></a>
                                <a href="#"><span>wordpress</span></a>-->
                            </div>
                        </section>
                        <!--End Popular tags-->
                    </aside>