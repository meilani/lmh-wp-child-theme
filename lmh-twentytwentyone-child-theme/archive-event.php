<?php
/**
 * The template for displaying the event archive page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

$description = get_the_archive_description();
?>

<?php if ( have_posts() ) : ?>

	<header class="page-header alignwide">
		<h1 class="page-title">
			<?php _e( 'Events', 'twentytwentyone' ); ?>
		</h1>
		<?php if ( $description ) : ?>
			<div class="archive-description"><?php echo wp_kses_post( wpautop( $description ) ); ?></div>
		<?php endif; ?>
	</header><!-- .page-header -->
	<div class="event-container">

		<?php while ( have_posts() ) : ?>
			<div class="event-entry">
				<?php the_post(); ?>
				<?php
					twenty_twenty_one_post_thumbnail();
					the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' );
				?>
			</div>
		<?php endwhile; ?>
	</div>

<?php else : ?>
	<?php get_template_part( 'template-parts/content/content-none' ); ?>
<?php endif; ?>

<?php
get_footer();
