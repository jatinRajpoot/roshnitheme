<?php
/**
 * Generic page template
 */

get_header();
?>

<main class="site-main">
    <?php while ( have_posts() ) : the_post(); ?>
        <?php roshni_render_page_hero( array( 'title' => get_the_title(), 'subtitle' => get_the_excerpt() ) ); ?>
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
