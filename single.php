<?php
/**
 * Single post template
 */

get_header();
$theme_uri = get_template_directory_uri();
?>

<main class="site-main">
    <?php while ( have_posts() ) : the_post(); ?>
        <?php
        $hero_image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
        if ( ! $hero_image ) {
            $hero_image = 'https://images.unsplash.com/photo-1471864190281-a93a3070b6de?auto=format&fit=crop&w=1600&q=80';
        }
        roshni_render_page_hero( array(
            'title'    => get_the_title(),
            'subtitle' => get_the_date(),
            'image'    => $hero_image,
        ) );
        ?>

        <section class="section">
            <div class="container">
                <article class="page-content-shell">
                    <div class="ro-single-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            </div>
        </section>
    <?php endwhile; ?>
</main>

<?php
get_footer();
