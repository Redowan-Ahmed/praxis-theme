<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Praxis
 */

?>
            <article class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <div  class="post-thumbnail"><?php the_post_thumbnail()?></div>
                    <div class="post-details-wrap">
                        <h2 class="entry-title"><?php the_title()?></h2>
                        <div class="byline">
                            <span class="author">
                                <?php 
                                    echo 'Posted' . ' '; praxis_posted_by()
                                ?>
                            </span>
                            <span class="posted-on">
                            <?php 
                                        praxis_posted_on();
                                ?>
                            </span>
                        </div>
                    </div><!-- .post-details-wrap -->
                </header>
                <div class="entry-content">
                    <p><?php the_content()?></p>
                </div>
            </article>
            <div class="social-share">
					<span class="social-share-title">share this post on:</span>
					<div class="social-btn">
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&text=<?php the_title(); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
					</div>
				</div>
