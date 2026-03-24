<?php
/**
 * Template Name: Contact Page
 */

get_header();
?>

<main class="site-main">
    <?php roshni_render_page_hero( array(
        'title'    => 'Book Appointment / Contact Us',
        'subtitle' => 'Reach ROSHNI Centre directly for therapies, dental care and skin-hair consultations.',
    ) ); ?>

    <section class="section">
        <div class="container contact-layout">
            <article class="card contact-card">
                <h3>Visit ROSHNI Centre</h3>
                <ul class="contact-list">
                    <li><strong>Address:</strong> Sonepat Road, Gohana</li>
                    <li><strong>Phone:</strong> <a href="tel:9588536580">+91 9588536580</a></li>
                    <li><strong>Email:</strong> <a href="mailto:roshnihealthcare@gmail.com">roshnihealthcare@gmail.com</a></li>
                    <li><strong>Doctor:</strong> Dr. Amanpreet Chahal (Regd. No. 11317-A)</li>
                    <li><strong>Hours:</strong> Monday - Saturday, 9:00 AM to 7:00 PM</li>
                </ul>
                <div class="map-shell" style="margin-top: 0.8rem;">
                    <iframe loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps?q=Sonepat+Road+Gohana&output=embed" title="ROSHNI Centre Location"></iframe>
                </div>
            </article>

            <article class="card contact-card">
                <h3>Send a Message</h3>
                <p style="color: var(--muted); margin-bottom: 0.7rem;">Fill the form below and our team will contact you soon.</p>
                <?php
                $status = isset( $_GET['status'] ) ? sanitize_key( wp_unslash( $_GET['status'] ) ) : '';
                if ( 'success' === $status ) :
                    ?>
                    <p style="margin-bottom: 0.8rem; padding: 0.65rem 0.8rem; border-radius: 10px; background: #e6ffed; color: #146c2e; border: 1px solid #b4e3c0;">Your inquiry has been submitted successfully.</p>
                <?php elseif ( 'saved_no_mail' === $status ) : ?>
                    <p style="margin-bottom: 0.8rem; padding: 0.65rem 0.8rem; border-radius: 10px; background: #e6ffed; color: #146c2e; border: 1px solid #b4e3c0;">Your inquiry is submitted and saved. Our team will contact you shortly.</p>
                <?php elseif ( in_array( $status, array( 'validation_error', 'invalid_nonce', 'mail_failed', 'invalid_request' ), true ) ) : ?>
                    <p style="margin-bottom: 0.8rem; padding: 0.65rem 0.8rem; border-radius: 10px; background: #fff4e5; color: #7b4f00; border: 1px solid #ffd59f;">Unable to submit right now. Please check details and try again.</p>
                <?php endif; ?>
                <form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
                    <?php wp_nonce_field( 'roshni_contact_submit', 'roshni_contact_nonce' ); ?>
                    <input type="hidden" name="action" value="roshni_submit_contact">
                    <div class="form-grid" style="margin-bottom: 0.75rem;">
                        <input type="text" name="name" class="form-field" placeholder="Your Name" required>
                        <input type="tel" name="phone" class="form-field" placeholder="Phone Number" required>
                    </div>
                    <div class="form-grid" style="margin-bottom: 0.75rem;">
                        <input type="email" name="email" class="form-field" placeholder="Email Address" required>
                        <input type="text" name="service" class="form-field" placeholder="Service Interested In">
                    </div>
                    <textarea rows="6" name="message" class="form-field" placeholder="Tell us about your requirement" style="margin-bottom: 0.75rem;" required></textarea>
                    <button type="submit" class="btn btn-primary" style="width: 100%;">Submit Inquiry</button>
                </form>
            </article>
        </div>
    </section>
</main>

<?php
get_footer();
