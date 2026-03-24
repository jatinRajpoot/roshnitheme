<?php
/**
 * Template Name: About Page
 */

get_header();
$theme_uri = get_template_directory_uri();
?>

<main class="site-main">
    <?php roshni_render_page_hero( array(
        'title'    => 'About ROSHNI Centre',
        'subtitle' => 'Compassion-driven special education and clinical care in a trusted, family-first environment.',
    ) ); ?>

    <section class="section">
        <div class="container grid-2">
            <article class="card" style="padding: 1.5rem;">
                <h2 style="color: var(--primary); margin-bottom: 0.6rem;">Our Mission</h2>
                <p style="color: var(--muted);">To support children and families with structured, compassionate and measurable therapy programs while providing quality dental and skin-hair care under one roof.</p>
            </article>
            <article class="card" style="padding: 1.5rem;">
                <h2 style="color: var(--primary); margin-bottom: 0.6rem;">Our Vision</h2>
                <p style="color: var(--muted);">To be Gohana's most trusted integrated care centre where every family receives clear guidance, professional treatment and long-term support.</p>
            </article>
        </div>
    </section>

    <section class="section" style="padding-top: 0;">
        <div class="container">
            <div class="section-title">
                <h2>Meet the Team</h2>
                <p>Profiles shown with dummy photos as requested.</p>
            </div>
            <div class="team-grid">
                <article class="card team-card">
                    <img src="<?php echo esc_url( $theme_uri . '/images/dummy-profile.svg' ); ?>" alt="Dummy profile for Dr. Amanpreet Chahal">
                    <div class="team-body">
                        <h3>Dr. Amanpreet Chahal</h3>
                        <p>BDS, PGDCC (Delhi) | Regd. No. 11317-A. Leads dental and clinical consultation services.</p>
                    </div>
                </article>
                <article class="card team-card">
                    <img src="<?php echo esc_url( $theme_uri . '/images/dummy-profile.svg' ); ?>" alt="Dummy profile for Dr. Sachin">
                    <div class="team-body">
                        <h3>Dr. Sachin</h3>
                        <p>BDS, MDS. Focused on advanced dental care and treatment planning.</p>
                    </div>
                </article>
                <article class="card team-card">
                    <img src="<?php echo esc_url( $theme_uri . '/images/dummy-profile.svg' ); ?>" alt="Dummy profile for Dr. Aanchal">
                    <div class="team-body">
                        <h3>Dr. Aanchal</h3>
                        <p>BDS, MDS. Provides patient-centered consultation and restorative dental support.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="section" style="padding-top: 0;">
        <div class="container">
            <div class="section-title">
                <h2>Facility Highlights</h2>
                <p>Real clinic photos from your uploaded content folder.</p>
            </div>
            <div class="gallery-grid">
                <img src="<?php echo esc_url( $theme_uri . '/images/content-gallery/236fa3e0-5563-4d7b-864d-4e9448794848.jpg' ); ?>" alt="Dental chair and treatment room">
                <img src="<?php echo esc_url( $theme_uri . '/images/content-gallery/e451c189-6323-42f3-8fbd-16965618b651.jpg' ); ?>" alt="Dental doctors during procedure">
                <img src="<?php echo esc_url( $theme_uri . '/images/content-gallery/e82298d1-a189-4815-9a00-081f3f1e7ede.jpg' ); ?>" alt="Close treatment procedure">
                <img src="<?php echo esc_url( $theme_uri . '/images/content-gallery/961d8156-a377-47ad-b015-92e57a1a1309.jpg' ); ?>" alt="OPG dental x-ray image">
                <img src="<?php echo esc_url( $theme_uri . '/images/content-gallery/c8b8845b-8af5-4e37-8b59-7a8abb828261.jpg' ); ?>" alt="Dental care in progress">
                <img src="<?php echo esc_url( $theme_uri . '/images/content-gallery/dbf83b5b-e1ed-492f-aabc-196e5666b7c6.jpg' ); ?>" alt="Clinical oral treatment">
                <img src="<?php echo esc_url( $theme_uri . '/images/content-gallery/76d93da3-d586-4f37-979b-410c28779b85.jpg' ); ?>" alt="Dental setup and instruments">
                <img src="<?php echo esc_url( $theme_uri . '/images/content-gallery/1e1d5312-3539-4ad3-9f74-dd20fa3cdbb1.jpg' ); ?>" alt="Two doctors providing treatment">
                <img src="<?php echo esc_url( $theme_uri . '/images/content-gallery/6dfdf24e-92bc-4b1b-8525-ef3bdbfe5763.jpg' ); ?>" alt="Team procedure under operating light">
                <img src="<?php echo esc_url( $theme_uri . '/images/content-gallery/4dbc38ee-b375-4d59-85d0-48cf030993dc.jpg' ); ?>" alt="Close-up dental care">
                <img src="<?php echo esc_url( $theme_uri . '/images/content-gallery/9dac2dd9-bcf6-4507-a86e-4281b31619ec.jpg' ); ?>" alt="Patient treatment side view">
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
