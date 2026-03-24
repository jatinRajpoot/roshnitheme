<?php
/**
 * Template Name: Blog Page
 */

get_header();
$theme_uri = get_template_directory_uri();

$paged = max( 1, get_query_var( 'paged' ), get_query_var( 'page' ) );
$blog_query = new WP_Query(
	array(
		'post_type'      => 'post',
		'post_status'    => 'publish',
		'posts_per_page' => 9,
		'paged'          => $paged,
	)
);
?>

<main class="site-main">
	<?php
	roshni_render_page_hero(
		array(
			'title'    => 'Health Tips & Updates',
			'subtitle' => 'Practical articles on child development, therapy support, dental care and skin wellness.',
			'image'    => roshni_get_hero_image_by_slug( 'blog' ),
		)
	);
	?>

	<section class="section">
		<div class="container">
			<div class="blog-grid">
				<?php if ( $blog_query->have_posts() ) : ?>
					<?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
						<?php
						$thumb = get_the_post_thumbnail_url( get_the_ID(), 'large' );
						if ( ! $thumb ) {
							$thumb = $theme_uri . '/images/post-fallback.svg';
						}
						?>
						<article class="card blog-card">
							<img src="<?php echo esc_url( $thumb ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" loading="lazy">
							<div class="blog-card-body">
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
								<a href="<?php the_permalink(); ?>">Read Article</a>
							</div>
						</article>
					<?php endwhile; ?>
				<?php else : ?>
					<article class="card blog-card" style="padding: 1.2rem; grid-column: 1 / -1;">
						<div class="blog-card-body">
							<h3>No posts published yet</h3>
							<p>Create your first blog post from WordPress dashboard to populate this page.</p>
						</div>
					</article>
				<?php endif; ?>
			</div>

			<?php if ( $blog_query->max_num_pages > 1 ) : ?>
				<div style="margin-top: 1.2rem;">
					<?php
					echo paginate_links(
						array(
							'current' => $paged,
							'total'   => $blog_query->max_num_pages,
						)
					);
					?>
				</div>
			<?php endif; ?>
		</div>
	</section>
</main>

<?php
wp_reset_postdata();
get_footer();
