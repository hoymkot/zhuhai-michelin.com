<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header();
?>

    <div class="container">
<?php get_search_form(); ?>

               <div class="row"><h1 class="mx-auto my-3">技术中心 </h1></div>
            <section id="primary" class="content-area">
                <main id="main" class="site-main" role="main">

                    <?php if ( have_posts() ) : ?>
                    
                       <?php if(strlen(get_search_query()) == true) { ?>
                        <header class="page-header mt-2">
                            <h1 class="page-title"><?php printf( __( '搜索结果: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                        </header>
                        <?php } ?>
                        <!-- .page-header -->
                        <div class="row">
                            <table class="table table-borderless table-hover">
                                <thead>
                                </thead>
                                <tbody>
<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			// End the loop.
  
			endwhile;
?>
                                </tbody>
                            </table>
                            <?php
			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( '上一页', 'twentysixteen' ),
				'next_text'          => __( '下一页', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

                </main>
                <!-- .site-main -->
            </section>
            <!-- .content-area -->
            </div>
            <?php get_footer(); ?>