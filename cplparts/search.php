<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package cplparts
 */

get_header();
?>

	<!-- <main id="primary" class="site-main"> -->
	
	<div class="block-space block-space--layout--after-header"></div>
      <div class="container">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'cplparts' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->
			<main id="primary" class="site-main">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;

		?>
		</main>
		</div>
		<div class="block-space block-space--layout--before-footer"></div>

	<!-- #main -->

<?php
// get_sidebar();


$year = $_GET['year'];
$model = $_GET['model'];

if ($year && $model) {
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'meta_query' => array(
        'relation' => 'AND',
array(
            'key' => business_year,
 'value' => $year,

        ),
        array(
            'key' => business_model,
 'value' => $model,

        )
    )
 );
query_posts($args);
} else {
  query_posts('posts_per_page=4');
}

if ($year && $model) { ?>
  <h3>Your Search For <?php echo $year; ?> and <?php echo $model; ?></h3>
  <?php } else { ?>
  <h3>Title</h3>
  <?php } if(have_posts()) : ?>
            <?php while(have_posts()) : the_post()
             ?>

         <p class="no_percentage"><?php echo excerpt(15); ?> </p>

        <span class="readmore" ><a href="<?php the_permalink(); ?>" > <?php _e('read more');?>  </a> </span>

      <?php endwhile; ?>

      <?php else: ?>
      <p class="notice_msg"><?php _e( 'Sorry, but nothing matched your search criteria.'); ?></p>
      <?php endif; ?>

<?php
get_footer();
