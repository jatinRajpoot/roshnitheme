<?php
/**
 * Main template file
 */

get_header();
$theme_uri = get_template_directory_uri();

if ( is_front_page() ) :
    ?>
    <main class="site-main">
        <section class="hero-main hero-carousel" data-carousel>
            <div class="hero-slide is-active hero-slide-education">
                <div class="container hero-grid">
                    <div class="hero-content">
                        <span class="hero-badge">ROSHNI Centre for Special Education | Sonepat Road, Gohana</span>
                        <h1>Training and Education Support for Children with Special Needs</h1>
                        <p>Compassionate, skilled therapies for children and adolescents with ASD, ADHD, speech delays, behavior and school challenges.</p>
                        <div class="hero-actions">
                            <a href="<?php echo esc_url( home_url( '/services/special-education-programs/' ) ); ?>" class="btn btn-primary">Explore Education Programs</a>
                            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline">Book Assessment</a>
                        </div>
                    </div>
                    <div class="hero-panel">
                        <p><strong>Focus Areas:</strong> ASD, ADHD, speech & language delays, behaviour management.</p>
                        <p><strong>Therapies:</strong> Speech Therapy, Occupational Therapy, ABA, Social Skill Training.</p>
                        <p><strong>Call Now:</strong> <a href="tel:9588536580">+91 9588536580</a></p>
                    </div>
                </div>
            </div>
            <div class="hero-slide hero-slide-dental">
                <div class="container hero-grid">
                    <div class="hero-content">
                        <span class="hero-badge">Dental Clinic | Dr. Amanpreet Chahal (Regd. No. 11317-A)</span>
                        <h1>Comprehensive Dental Care at One Trusted Clinic</h1>
                        <p>From checkups and scaling to RCT, crowns and extractions, get complete dental treatment with patient-first care in Gohana.</p>
                        <div class="hero-actions">
                            <a href="<?php echo esc_url( home_url( '/services/dental-care-services/' ) ); ?>" class="btn btn-primary">View Dental Services</a>
                            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline">Book Dental Visit</a>
                        </div>
                    </div>
                    <div class="hero-panel">
                        <p><strong>Services:</strong> Dental X-Ray, Tooth Bleaching, RCT, Crowns, Extraction, Complete Denture.</p>
                        <p><strong>Also Available:</strong> Dental Veneers, Scaling, Skin & Hair treatments.</p>
                        <p><strong>Call Now:</strong> <a href="tel:9588536580">+91 9588536580</a></p>
                    </div>
                </div>
            </div>
            <button class="hero-carousel-nav hero-carousel-prev" type="button" aria-label="Previous slide">&#10094;</button>
            <button class="hero-carousel-nav hero-carousel-next" type="button" aria-label="Next slide">&#10095;</button>
            <div class="hero-carousel-dots" role="tablist" aria-label="Homepage highlights">
                <button class="hero-carousel-dot is-active" type="button" aria-label="Show education slide" aria-current="true"></button>
                <button class="hero-carousel-dot" type="button" aria-label="Show dental slide" aria-current="false"></button>
            </div>
        </section>

        <section class="section">
            <div class="container welcome-grid">
                <article class="welcome-copy">
                    <h2>Welcome to ROSHNI</h2>
                    <p>At ROSHNI, families receive personalized therapy and medical support in a safe, warm and structured environment. Our therapists work closely with parents to build measurable progress plans for every child.</p>
                    <p>Alongside special education therapies, we offer complete dental and skin-hair care services to make quality care accessible in one location.</p>
                    <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="btn btn-soft">Meet Our Team</a>

                    <div class="stats">
                        <div class="stat"><strong>10+ Years</strong><span>Clinical and therapy expertise</span></div>
                        <div class="stat"><strong>500+</strong><span>Families supported</span></div>
                        <div class="stat"><strong>6+</strong><span>Dedicated service streams</span></div>
                        <div class="stat"><strong>1 Centre</strong><span>Integrated care in Gohana</span></div>
                    </div>
                </article>
                <figure class="welcome-image">
                    <img src="https://images.unsplash.com/photo-1551884170-09fb70a3a2ed?auto=format&fit=crop&w=1200&q=80" alt="Friendly clinic environment">
                </figure>
            </div>
        </section>

        <section class="section" style="padding-top: 0;" id="services">
            <div class="container">
                <div class="section-title">
                    <h2>Dedicated Service Programs</h2>
                    <p>Every core service has its own detailed page so parents and patients can clearly understand what we offer.</p>
                </div>
                <div class="service-grid">
                    <article class="card service-card">
                        <div class="service-icon">SE</div>
                        <h3>Special Education Programs</h3>
                        <p>Support for ASD, ADHD, behaviour management, speech delays and school-related challenges.</p>
                        <a href="<?php echo esc_url( home_url( '/services/special-education-programs/' ) ); ?>">Learn More</a>
                    </article>
                    <article class="card service-card">
                        <div class="service-icon">SL</div>
                        <h3>Speech and Language Therapy</h3>
                        <p>Communication, articulation and language development plans with practical sessions.</p>
                        <a href="<?php echo esc_url( home_url( '/services/speech-language-therapy/' ) ); ?>">Learn More</a>
                    </article>
                    <article class="card service-card">
                        <div class="service-icon">OT</div>
                        <h3>Occupational Therapy</h3>
                        <p>Motor skills, sensory regulation and daily functional independence programs.</p>
                        <a href="<?php echo esc_url( home_url( '/services/occupational-therapy/' ) ); ?>">Learn More</a>
                    </article>
                    <article class="card service-card">
                        <div class="service-icon">AB</div>
                        <h3>ABA and Behaviour Therapy</h3>
                        <p>Applied Behaviour Analysis and structured behaviour intervention modules.</p>
                        <a href="<?php echo esc_url( home_url( '/services/aba-behaviour-therapy/' ) ); ?>">Learn More</a>
                    </article>
                    <article class="card service-card">
                        <div class="service-icon">DC</div>
                        <h3>Dental Care Services</h3>
                        <p>Dental X-ray, RCT, crowns, scaling, extraction and restorative procedures.</p>
                        <a href="<?php echo esc_url( home_url( '/services/dental-care-services/' ) ); ?>">Learn More</a>
                    </article>
                    <article class="card service-card">
                        <div class="service-icon">SH</div>
                        <h3>Skin and Hair Treatments</h3>
                        <p>Acne, scars, wrinkle reduction, hair fall treatment, permanent hair reduction and more.</p>
                        <a href="<?php echo esc_url( home_url( '/services/skin-hair-treatments/' ) ); ?>">Learn More</a>
                    </article>
                </div>
            </div>
        </section>

        <section class="section" style="padding-top: 0;">
            <div class="container">
                <div class="trust-strip">
                    <div>
                        <h3>Why Families Trust ROSHNI</h3>
                        <p>Our approach combines empathy, structured routines and clinically guided treatment plans for real improvement.</p>
                    </div>
                    <ul>
                        <li>Highly trained therapists</li>
                        <li>Parent-inclusive support model</li>
                        <li>Integrated medical and therapy care</li>
                        <li>Convenient central location in Gohana</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="section" style="padding-top: 0;">
            <div class="container">
                <div class="section-title">
                    <h2>Parent Testimonials</h2>
                    <p>Real feedback from families who visit our centre.</p>
                </div>
                <div class="testimonial-row">
                    <article class="card testimonial-card">
                        <p>"The speech therapy sessions are very structured. We saw clear progress in communication within a few months."</p>
                        <strong>- Parent, Gohana</strong>
                    </article>
                    <article class="card testimonial-card">
                        <p>"Behaviour therapy guidance helped us both at home and school. The team is patient and supportive."</p>
                        <strong>- Parent, Sonipat Road</strong>
                    </article>
                    <article class="card testimonial-card">
                        <p>"Dental and therapy support at one place saves so much time. The environment is clean and child-friendly."</p>
                        <strong>- Family Feedback</strong>
                    </article>
                </div>
            </div>
        </section>

        <section class="section" style="padding-top: 0;">
            <div class="container">
                <div class="section-title">
                    <h2>Centre Gallery</h2>
                    <p>A glimpse of modern, safe and welcoming clinical spaces.</p>
                </div>
                <div class="gallery-grid">
                    <img src="<?php echo esc_url( $theme_uri . '/images/content-gallery/236fa3e0-5563-4d7b-864d-4e9448794848.jpg' ); ?>" alt="Dental clinic room">
                    <img src="<?php echo esc_url( $theme_uri . '/images/content-gallery/e451c189-6323-42f3-8fbd-16965618b651.jpg' ); ?>" alt="Doctors treating patient">
                    <img src="<?php echo esc_url( $theme_uri . '/images/content-gallery/e82298d1-a189-4815-9a00-081f3f1e7ede.jpg' ); ?>" alt="Dental procedure in progress">
                    <img src="<?php echo esc_url( $theme_uri . '/images/content-gallery/961d8156-a377-47ad-b015-92e57a1a1309.jpg' ); ?>" alt="Dental X-ray screen">
                </div>
            </div>
        </section>

        <section class="section" style="padding-top: 0;">
            <div class="container">
                <div class="section-title">
                    <h2>Latest Health Tips</h2>
                    <p>Child development and preventive care content from our team.</p>
                </div>
                <div class="blog-grid">
                    <?php
                    $latest_posts = get_posts( array(
                        'posts_per_page' => 3,
                        'post_status'    => 'publish',
                    ) );

                    if ( $latest_posts ) :
                        foreach ( $latest_posts as $post ) :
                            setup_postdata( $post );
                            $thumb = get_the_post_thumbnail_url( get_the_ID(), 'large' );
                            if ( ! $thumb ) {
                                $thumb = $theme_uri . '/images/post-fallback.svg';
                            }
                            ?>
                            <article class="card blog-card">
                                <img src="<?php echo esc_url( $thumb ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" loading="lazy">
                                <div class="blog-card-body">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 18 ) ); ?></p>
                                    <a href="<?php the_permalink(); ?>">Read Article</a>
                                </div>
                            </article>
                            <?php
                        endforeach;
                        wp_reset_postdata();
                    else :
                        ?>
                        <article class="card blog-card" style="grid-column: 1 / -1; padding: 1.3rem;">
                            <div class="blog-card-body">
                                <h3>Blog updates coming soon</h3>
                                <p>We are preparing detailed guidance on child therapies, dental health and skin care.</p>
                            </div>
                        </article>
                        <?php
                    endif;
                    ?>
                </div>
            </div>
        </section>
    </main>
    <?php
else :
    ?>
    <main class="site-main">
        <section class="section">
            <div class="container">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article class="page-content-shell">
                        <h1 style="margin-bottom: 1rem;"><?php the_title(); ?></h1>
                        <div class="ro-single-content"><?php the_content(); ?></div>
                    </article>
                <?php endwhile; endif; ?>
            </div>
        </section>
    </main>
    <?php
endif;

get_footer();
