<?php
/**
 * Template Name: Service Detail Page
 */

get_header();

$slug = get_post_field( 'post_name', get_the_ID() );

$service_data = array(
    'special-education-programs' => array(
        'title' => 'Special Education Programs',
        'subtitle' => 'Focused support for developmental, behavioural and school-related challenges.',
        'points' => array(
            'Autism Spectrum Disorder (ASD)',
            'Attention Deficit Hyperactive Disorder (ADHD)',
            'Behaviour Management',
            'Anger Management',
            'Mental Disabilities (M.R.)',
            'Speech and Language Delays',
            'Trouble in school or/and Home',
        ),
        'benefits' => array(
            'Children facing attention, communication or behaviour challenges',
            'Parents needing structured routines and home support',
            'Students with school adjustment concerns',
        ),
    ),
    'speech-language-therapy' => array(
        'title' => 'Speech and Language Therapy',
        'subtitle' => 'Individualized communication development programs for children and adolescents.',
        'points' => array(
            'Speech clarity and articulation training',
            'Language comprehension and expression work',
            'Joint attention and communication readiness',
            'Practical exercises for daily communication',
            'Parent-guided follow-up activities',
        ),
        'benefits' => array(
            'Speech delay',
            'Poor sentence formation or comprehension',
            'Communication frustration and social difficulty',
        ),
    ),
    'occupational-therapy' => array(
        'title' => 'Occupational Therapy (OT)',
        'subtitle' => 'Improving functional skills, motor planning and independence in daily activities.',
        'points' => array(
            'Fine motor and gross motor skill development',
            'Sensory regulation strategies',
            'Hand-eye coordination and task focus',
            'Self-care and daily routine training',
            'Home and school activity planning',
        ),
        'benefits' => array(
            'Children with sensory and motor concerns',
            'Difficulty with writing, balance, grip or routine tasks',
            'Children needing independent daily living support',
        ),
    ),
    'aba-behaviour-therapy' => array(
        'title' => 'ABA and Behaviour Therapy',
        'subtitle' => 'Structured behavioural intervention using Applied Behaviour Analysis principles.',
        'points' => array(
            'Applied Behaviour Analysis (ABA) sessions',
            'Behaviour Management Therapy',
            'Positive reinforcement and routine structuring',
            'Social skill and classroom behaviour support',
            'Progress tracking and parent guidance',
        ),
        'benefits' => array(
            'Aggression, tantrums or non-compliance',
            'Attention and transition difficulty',
            'Need for consistent behaviour support plans',
        ),
    ),
    'dental-care-services' => array(
        'title' => 'Dental Care Services',
        'subtitle' => 'Dental treatments under Dr. Amanpreet Chahal (BDS, PGDCC - Delhi), Regd. No. 11317-A.',
        'points' => array(
            'Dental X-Ray and OPG machine availability',
            'Teeth Bleaching',
            'Tooth Colored Filling',
            'Root Canal Treatment (RCT)',
            'Bridge and Crown (Fixed Crown and Bridge)',
            'Complete Denture',
            'Ultrasonic Scaling',
            'Extraction and Surgical Extraction of Impacted Tooth',
            'Tooth Jewellery',
            'Treatment of Trigeminal Neuralgia',
            'Treatment of Trismus',
        ),
        'benefits' => array(
            'Tooth pain, decay or sensitivity',
            'Cosmetic correction and smile enhancement',
            'Missing tooth replacement and restorative care',
        ),
    ),
    'skin-hair-treatments' => array(
        'title' => 'Skin and Hair Treatments',
        'subtitle' => 'Clinical skin and hair solutions with procedure-based treatment options.',
        'points' => array(
            'Tattoo Removal',
            'Acne Treatment',
            'Acne Scar Reduction',
            'Permanent Hair Reduction',
            'Wrinkle Reduction',
            'Hair Fall Treatment',
            'Botox and Fillers',
        ),
        'benefits' => array(
            'Acne, scars or pigmentation concerns',
            'Early aging signs and wrinkle concerns',
            'Hair fall and unwanted hair reduction needs',
        ),
    ),
);

$service = isset( $service_data[ $slug ] ) ? $service_data[ $slug ] : null;
?>

<main class="site-main">
    <?php
    if ( $service ) {
        roshni_render_page_hero( array(
            'title'    => $service['title'],
            'subtitle' => $service['subtitle'],
        ) );
    } else {
        roshni_render_page_hero( array(
            'title' => get_the_title(),
        ) );
    }
    ?>

    <section>
        <div class="container" style="max-width: 1040px;">
            <?php if ( $service ) : ?>
                <div class="ro-detail-grid">
                    <div class="ro-detail-box">
                        <h2 style="color: var(--primary);">What This Service Covers</h2>
                        <ul>
                            <?php foreach ( $service['points'] as $point ) : ?>
                                <li><?php echo esc_html( $point ); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="ro-detail-box">
                        <h2 style="color: var(--secondary);">Who Can Benefit</h2>
                        <ul>
                            <?php foreach ( $service['benefits'] as $benefit ) : ?>
                                <li><?php echo esc_html( $benefit ); ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid #e2e8f0;">
                            <p><strong>Address:</strong> Sonepat Road, Gohana</p>
                            <p><strong>Phone:</strong> <a href="tel:9588536580">9588536580</a></p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if ( get_the_content() ) : ?>
                <div class="card" style="padding: 2rem; border-radius: 14px; margin-top: 1.5rem;">
                    <div class="ro-single-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endif; ?>

            <div style="margin-top: 1.5rem; text-align: center;">
                <a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Book Consultation</a>
                <a class="btn" style="margin-left: 0.6rem; border: 1px solid #cbd5e0;" href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Back to Services</a>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
