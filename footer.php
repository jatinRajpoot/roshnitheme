<footer class="site-footer">
    <div class="container footer-grid">
        <div>
            <h3>ROSHNI Centre</h3>
            <p>Centre for Special Education with integrated Dental, Skin and Hair services in Gohana.</p>
        </div>
        <div>
            <h3>Therapy Services</h3>
            <ul>
                <li><a href="<?php echo esc_url( home_url( '/services/special-education-programs/' ) ); ?>">Special Education</a></li>
                <li><a href="<?php echo esc_url( home_url( '/services/speech-language-therapy/' ) ); ?>">Speech Therapy</a></li>
                <li><a href="<?php echo esc_url( home_url( '/services/occupational-therapy/' ) ); ?>">Occupational Therapy</a></li>
                <li><a href="<?php echo esc_url( home_url( '/services/aba-behaviour-therapy/' ) ); ?>">ABA Therapy</a></li>
            </ul>
        </div>
        <div>
            <h3>Medical Services</h3>
            <ul>
                <li><a href="<?php echo esc_url( home_url( '/services/dental-care-services/' ) ); ?>">Dental Care</a></li>
                <li><a href="<?php echo esc_url( home_url( '/services/skin-hair-treatments/' ) ); ?>">Skin & Hair</a></li>
                <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About Team</a></li>
                <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li>
            </ul>
        </div>
        <div>
            <h3>Contact</h3>
            <p>Sonepat Road, Gohana</p>
            <p><a href="tel:9588536580">+91 9588536580</a></p>
            <p><a href="mailto:roshnihealthcare@gmail.com">roshnihealthcare@gmail.com</a></p>
            <p>Dr. Amanpreet Chahal (Regd. No. 11317-A)</p>
        </div>
    </div>
    <div class="container footer-bottom">
        <p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> ROSHNI Centre for Special Education. All rights reserved.</p>
    </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var toggle = document.querySelector('.menu-toggle');
    var menu = document.getElementById('primary-menu');
    if (toggle && menu) {
        toggle.addEventListener('click', function () {
            var expanded = toggle.getAttribute('aria-expanded') === 'true';
            toggle.setAttribute('aria-expanded', expanded ? 'false' : 'true');
            menu.classList.toggle('is-open');
        });
    }

    var carousel = document.querySelector('[data-carousel]');
    if (!carousel) return;

    var slides = Array.prototype.slice.call(carousel.querySelectorAll('.hero-slide'));
    var dots = Array.prototype.slice.call(carousel.querySelectorAll('.hero-carousel-dot'));
    var prev = carousel.querySelector('.hero-carousel-prev');
    var next = carousel.querySelector('.hero-carousel-next');
    var current = 0;
    var autoplayTimer = null;
    var intervalMs = 5000;

    if (!slides.length) return;

    function render(index) {
        slides.forEach(function (slide, slideIndex) {
            slide.classList.toggle('is-active', slideIndex === index);
        });
        dots.forEach(function (dot, dotIndex) {
            var active = dotIndex === index;
            dot.classList.toggle('is-active', active);
            dot.setAttribute('aria-current', active ? 'true' : 'false');
        });
        current = index;
    }

    function go(step) {
        var nextIndex = (current + step + slides.length) % slides.length;
        render(nextIndex);
    }

    function stopAutoplay() {
        if (autoplayTimer) {
            clearInterval(autoplayTimer);
            autoplayTimer = null;
        }
    }

    function startAutoplay() {
        stopAutoplay();
        autoplayTimer = setInterval(function () {
            go(1);
        }, intervalMs);
    }

    if (prev) {
        prev.addEventListener('click', function () {
            go(-1);
            startAutoplay();
        });
    }

    if (next) {
        next.addEventListener('click', function () {
            go(1);
            startAutoplay();
        });
    }

    dots.forEach(function (dot, index) {
        dot.addEventListener('click', function () {
            render(index);
            startAutoplay();
        });
    });

    carousel.addEventListener('mouseenter', stopAutoplay);
    carousel.addEventListener('mouseleave', startAutoplay);

    render(0);
    startAutoplay();
});
</script>

<?php wp_footer(); ?>
</body>
</html>
