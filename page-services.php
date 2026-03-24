<?php
/**
 * Template Name: Services Page
 */

get_header();
?>

<main class="site-main">
    <?php roshni_render_page_hero( array(
        'title'    => 'Detailed Services at ROSHNI',
        'subtitle' => 'Choose a dedicated service page to understand treatment scope, benefits and care pathway.',
    ) ); ?>

    <section class="section">
        <div class="container">
            <div class="section-title">
                <h2>Service Directory</h2>
                <p>Therapy, dental and skin-hair services with dedicated pages for full details.</p>
            </div>

            <div class="ro-service-directory">
                <article class="card ro-service-link-card">
                    <h3>Special Education Programs</h3>
                    <p>ASD, ADHD, behaviour management and developmental support.</p>
                    <a class="btn btn-soft" href="<?php echo esc_url( home_url( '/services/special-education-programs/' ) ); ?>">Open Page</a>
                </article>

                <article class="card ro-service-link-card">
                    <h3>Speech and Language Therapy</h3>
                    <p>Communication, articulation and language development interventions.</p>
                    <a class="btn btn-soft" href="<?php echo esc_url( home_url( '/services/speech-language-therapy/' ) ); ?>">Open Page</a>
                </article>

                <article class="card ro-service-link-card">
                    <h3>Occupational Therapy (OT)</h3>
                    <p>Sensory integration, motor development and daily living skills.</p>
                    <a class="btn btn-soft" href="<?php echo esc_url( home_url( '/services/occupational-therapy/' ) ); ?>">Open Page</a>
                </article>

                <article class="card ro-service-link-card">
                    <h3>ABA and Behaviour Therapy</h3>
                    <p>Applied Behaviour Analysis and structured behaviour support.</p>
                    <a class="btn btn-soft" href="<?php echo esc_url( home_url( '/services/aba-behaviour-therapy/' ) ); ?>">Open Page</a>
                </article>

                <article class="card ro-service-link-card">
                    <h3>Dental Care Services</h3>
                    <p>Dental X-Ray, RCT, scaling, extraction and restorative procedures.</p>
                    <a class="btn btn-soft" href="<?php echo esc_url( home_url( '/services/dental-care-services/' ) ); ?>">Open Page</a>
                </article>

                <article class="card ro-service-link-card">
                    <h3>Skin and Hair Treatments</h3>
                    <p>Acne, scars, hair fall and anti-aging procedures including fillers.</p>
                    <a class="btn btn-soft" href="<?php echo esc_url( home_url( '/services/skin-hair-treatments/' ) ); ?>">Open Page</a>
                </article>
            </div>
        </div>
    </section>

    <section class="section" style="padding-top: 0;">
        <div class="container">
            <div class="trust-strip">
                <div>
                    <h3>Integrated Care Model</h3>
                    <p>Therapy and medical services coordinated with one care team for continuity and faster decision support.</p>
                </div>
                <ul>
                    <li>Parent-guided plans</li>
                    <li>Structured therapy routines</li>
                    <li>Dental and skin procedures in-house</li>
                    <li>Easy follow-up scheduling</li>
                </ul>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
