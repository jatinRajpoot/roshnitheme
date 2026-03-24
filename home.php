<?php
/**
 * Blog index template
 */

get_header();
$theme_uri = get_template_directory_uri();
?>

<main class="site-main">
    <?php roshni_render_page_hero( array(
        'title'    => 'Health Tips & Updates',
        'subtitle' => 'Practical articles on child development, therapy support, dental care and skin wellness.',
        'image'    => 'https://images.unsplash.com/photo-1579154204601-01588f351e67?auto=format&fit=crop&w=1600&q=80',
    ) ); ?>

    <section class="section">
        <div class="container">
            <div class="blog-grid">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
                <?php endwhile; else : ?>
                    <article class="card blog-card" style="padding: 1.2rem; grid-column: 1 / -1;">
                        <div class="blog-card-body">
                            <h3>No posts published yet</h3>
                            <p>Create your first health article from WordPress dashboard to populate this section.</p>
                        </div>
                    </article>
                <?php endif; ?>
            </div>

            <div style="margin-top: 1.2rem;">
                <?php the_posts_pagination(); ?>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
