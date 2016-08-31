<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

    <section id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        <?php
          global $wp_query;
          $total_results = $wp_query->found_posts;
          if ( $total_results == 0 ) : ?>
           <section>
            <div class="container">
                <div class="col-md-12">
                    <h1 class="section-title">No Results Found for [<?php printf( __( '%s', 'twentyfifteen' ), get_search_query() ); ?>]</h1>
                    <span class="green-line"></span>
                </div>
              </div>
            </section>
        <?php endif;?>

        <?php if ( have_posts() ) : ?>
            <section>
            <div class="container">
                <div class="col-md-12">
                    <h1 class="section-title"><?php printf( __( 'Search Results for: [%s]', 'twentyfifteen' ), get_search_query() ); ?></h1>
                    <span class="green-line"></span>
                </div>
              </div>
            </section>

            <?php
            // Start the loop.
            while ( have_posts() ) : the_post(); ?>

                <?php
                /*
                 * Run the loop for the search to output the results.
                 * If you want to overload this in a child theme then include a file
                 * called content-search.php and that will be used instead.
                 */
                get_template_part( 'content', 'search' );

            // End the loop.
            endwhile;

            // Previous/next page navigation.
            the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
                'next_text'          => __( 'Next page', 'twentyfifteen' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
            ) );

        // If no content, include the "No posts found" template.
        else :
            get_template_part( 'content', 'none' );

        endif;
        ?>

        </main><!-- .site-main -->
    </section><!-- .content-area -->

<?php get_footer(); ?>
