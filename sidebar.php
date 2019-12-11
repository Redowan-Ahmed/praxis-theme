<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Praxis
 */?>

        <aside class="col-md-3 col-sm-4 sidebar">
                        <section class="widget widget_search">
                            <h2 class="widget-title">SEARCH</h2>
                            <form role="search" method="get" id="searchform" class="search-form" action="<?php bloginfo('url'); ?>/">
                            <input type="text" class="search-field" value="<?php the_search_query(); ?>" name="s" id="s" />
                        <input type="submit" id="searchsubmit" value="Search" />
                        </section>
                        <section class="widget widget_recent_entries">
							    <?php the_widget( 'WP_Widget_Recent_Posts' );?>
                        </section>
                        <section class="widget widget_categories">
                            <h2 class="widget-title">PROJECT CATEGORIES</h2>
                            <ul>
                                <?php
                                wp_list_categories( array(
                                    'orderby'    => 'count',
                                    'order'      => 'DESC',
                                    'show_count' => 1,
                                    'title_li'   => '',
                                    'number'     => 10,
                                    ) );
							        ?>
                            </ul>
                        </section>
                        <section class="widget widget_tag_cloud">
                            <div class="tagcloud">
                            <?php
                            /* translators: %1$s: smiley */
                                the_widget( 'WP_Widget_Tag_Cloud' );
                            ?>
                            </div>
                        </section>
                        <section class="widget widget_archive">
                            <?php the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$praxis_archive_content" );?>
                        </section>
                   </aside><!-- .col -->
 
