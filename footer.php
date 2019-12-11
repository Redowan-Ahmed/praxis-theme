    <!-- Start Site Footer -->
	   <footer class="site-footer black-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="widget text-widget">
                            <h2 class="widget-title">ABOUT</h2>
                            <?php
                                if(function_exists('cs_get_option')){
                                    $footer = cs_get_option('footer_des');
                                    $footer_mail = cs_get_option('footer_emal');
                                    $footer_phone = cs_get_option('footer_phn');
                                    $footer_location = cs_get_option('footer_loca');
                                    $footer_face = cs_get_option('footer_fb');
                                    $footer_twee = cs_get_option('footer_tweet');
                                    $footer_insta = cs_get_option('footer_inc');
                                    $footer_be = cs_get_option('footer_bb');

                                }
                            ?>
                            <p><?php echo $footer;?></p>
                        </div><!-- .widget -->
                    </div><!-- .col -->
                    <div class="col-sm-3">
                        <div class="widget verti-menu-widget">
                            <h2 class="widget-title">RECENT POSTS</h2>
                            <ul>
                                <?php
                                     $recent_posts = wp_get_recent_posts(array(
                                        'numberposts' => 4, // Number of recent posts thumbnails to display
                                        'post_status' => 'publish' // Show only the published posts
                                    ));
                                    foreach( $recent_posts as $recent ) {
                                        printf( '<li><a href="%1$s">%2$s</a></li>',
                                            esc_url( get_permalink( $recent['ID'] ) ),
                                            apply_filters( 'the_title', $recent['post_title'], $recent['ID'] )
                                        );
                                    }
                                ?>
                                </ul>
                        </div><!-- .widget -->
                    </div><!-- .col -->
                    <div class="col-sm-3">
                        <div class="widget contact-info-widget">
                            <h2 class="widget-title">CONTACT INFO</h2>
                            <ul>
                                <li><span>E-mail:</span> <?php echo $footer_mail;?></li>
                                <li><span>Phone:</span> <?php echo $footer_phone;?></li>
                                <li><span>Location:</span> <?php echo $footer_location;?></li>
                            </ul>
                            <div class="social-btn">
                                <a href="<?php echo $footer_face;?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="<?php echo $footer_twee;?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="<?php echo $footer_insta;?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="<?php echo $footer_be;?>"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            </div>
                        </div><!-- .widget -->
                    </div><!-- .col -->
                    <div class="col-sm-3">
                        <div class="widget gallery-widget">
                            <h2 class="widget-title">LATEST WORKS</h2>
                            <div class="footer-gallery-list">
                            <?php 
                                 $sec = new WP_Query(array(
                                    'post_type'=>'work',
                                    'posts_per_page'=> 8,
                                     ));
                             while($sec->have_posts()):$sec->the_post();
                                     ?>
                                <a href="<?php the_permalink()?>"><?php the_post_thumbnail();?></a>
                                <?php endwhile?>                               
                            </div>
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="copy-right">© 2019 by Praxis - Developed With 💖 By   <a href="https://www.youtube.com/"><abbr title="A Proffestional Web Designer And Developer"> Redowan Ahmed</abbr></a></div>
            </div>
        </footer>
        <!-- End Site Footer -->
		<?php wp_footer(); ?>
    </body>
</html>
