<?php
/**
 * Roshni functions and definitions
 */

if ( ! function_exists( 'roshni_setup' ) ) :
	function roshni_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'custom-logo' );

		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'roshni' ),
		) );
	}
endif;
add_action( 'after_setup_theme', 'roshni_setup' );

function roshni_scripts() {
	$theme_version = wp_get_theme()->get( 'Version' );
	$style_version = file_exists( get_stylesheet_directory() . '/style.css' ) ? filemtime( get_stylesheet_directory() . '/style.css' ) : $theme_version;
	wp_enqueue_style( 'roshni-style', get_stylesheet_uri(), array(), $style_version );
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&family=Merriweather:wght@700;900&display=swap', array(), null );
}
add_action( 'wp_enqueue_scripts', 'roshni_scripts' );

function roshni_disable_wp_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'roshni_disable_wp_emojis' );

function roshni_register_inquiry_post_type() {
	register_post_type(
		'roshni_inquiry',
		array(
			'labels'       => array(
				'name'          => 'Inquiries',
				'singular_name' => 'Inquiry',
			),
			'public'       => false,
			'show_ui'      => true,
			'show_in_menu' => true,
			'menu_icon'    => 'dashicons-email',
			'menu_position'=> 24,
			'supports'     => array( 'title', 'editor' ),
		)
	);
}
add_action( 'init', 'roshni_register_inquiry_post_type' );

function roshni_inquiry_admin_columns( $columns ) {
	$updated = array();
	foreach ( $columns as $key => $label ) {
		$updated[ $key ] = $label;
		if ( 'title' === $key ) {
			$updated['roshni_phone']   = 'Phone';
			$updated['roshni_email']   = 'Email';
			$updated['roshni_service'] = 'Service';
		}
	}
	return $updated;
}
add_filter( 'manage_roshni_inquiry_posts_columns', 'roshni_inquiry_admin_columns' );

function roshni_inquiry_admin_column_content( $column, $post_id ) {
	if ( 'roshni_phone' === $column ) {
		echo esc_html( get_post_meta( $post_id, '_roshni_phone', true ) );
	}
	if ( 'roshni_email' === $column ) {
		echo esc_html( get_post_meta( $post_id, '_roshni_email', true ) );
	}
	if ( 'roshni_service' === $column ) {
		echo esc_html( get_post_meta( $post_id, '_roshni_service', true ) );
	}
}
add_action( 'manage_roshni_inquiry_posts_custom_column', 'roshni_inquiry_admin_column_content', 10, 2 );

function roshni_get_hero_image_by_slug( $slug = '' ) {
	$theme_uri = get_template_directory_uri();
	$map       = array(
		'about'                        => $theme_uri . '/images/about-hero.svg',
		'services'                     => $theme_uri . '/images/services-hero.svg',
		'contact'                      => $theme_uri . '/images/about-hero.svg',
		'blog'                         => $theme_uri . '/images/blog-hero.svg',
		'special-education-programs'   => $theme_uri . '/images/hero-special-education.svg',
		'speech-language-therapy'      => $theme_uri . '/images/hero-speech-therapy.svg',
		'occupational-therapy'         => $theme_uri . '/images/hero-occupational-therapy.svg',
		'aba-behaviour-therapy'        => $theme_uri . '/images/hero-aba-therapy.svg',
		'dental-care-services'         => $theme_uri . '/images/hero-dental-care.svg',
		'skin-hair-treatments'         => $theme_uri . '/images/hero-skin-hair.svg',
	);

	if ( isset( $map[ $slug ] ) ) {
		return $map[ $slug ];
	}

	return $theme_uri . '/images/services-hero.svg';
}

function roshni_get_current_hero_image( $post_id = 0 ) {
	$post_id = $post_id ? $post_id : get_the_ID();
	if ( $post_id && has_post_thumbnail( $post_id ) ) {
		return get_the_post_thumbnail_url( $post_id, 'full' );
	}

	$slug = '';
	if ( $post_id ) {
		$post = get_post( $post_id );
		if ( $post ) {
			$slug = $post->post_name;
		}
	}

	return roshni_get_hero_image_by_slug( $slug );
}

function roshni_render_page_hero( $args = array() ) {
	$defaults = array(
		'title'    => get_the_title(),
		'subtitle' => '',
		'image'    => roshni_get_current_hero_image(),
	);

	$args = wp_parse_args( $args, $defaults );
	?>
	<section class="page-hero" style="background-image: linear-gradient(rgba(22, 44, 74, 0.75), rgba(22, 44, 74, 0.75)), url('<?php echo esc_url( $args['image'] ); ?>');">
		<div class="container">
			<h1><?php echo esc_html( $args['title'] ); ?></h1>
			<?php if ( ! empty( $args['subtitle'] ) ) : ?>
				<p><?php echo esc_html( $args['subtitle'] ); ?></p>
			<?php endif; ?>
		</div>
	</section>
	<?php
}

function roshni_handle_contact_form_submission() {
	if ( 'POST' !== $_SERVER['REQUEST_METHOD'] ) {
		wp_safe_redirect( home_url( '/contact/?status=invalid_request' ) );
		exit;
	}

	$redirect_url = home_url( '/contact/' );

	if ( ! isset( $_POST['roshni_contact_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['roshni_contact_nonce'] ) ), 'roshni_contact_submit' ) ) {
		wp_safe_redirect( add_query_arg( 'status', 'invalid_nonce', $redirect_url ) );
		exit;
	}

	$name    = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
	$phone   = isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '';
	$email   = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
	$service = isset( $_POST['service'] ) ? sanitize_text_field( wp_unslash( $_POST['service'] ) ) : '';
	$message = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

	if ( '' === $name || '' === $phone || '' === $message || ! is_email( $email ) ) {
		wp_safe_redirect( add_query_arg( 'status', 'validation_error', $redirect_url ) );
		exit;
	}

	$admin_email = 'roshnihealthcare@gmail.com';
	if ( ! is_email( $admin_email ) ) {
		$admin_email = get_option( 'admin_email' );
	}
	$subject     = sprintf( 'New Inquiry - %s', $name );
	$body        = "A new inquiry was submitted from the ROSHNI website.\n\n";
	$body       .= "Name: {$name}\n";
	$body       .= "Phone: {$phone}\n";
	$body       .= "Email: {$email}\n";
	$body       .= "Service: {$service}\n\n";
	$body       .= "Message:\n{$message}\n";

	$headers = array(
		'Content-Type: text/plain; charset=UTF-8',
		'Reply-To: ' . $name . ' <' . $email . '>',
	);

	$inquiry_id = wp_insert_post(
		array(
			'post_type'    => 'roshni_inquiry',
			'post_status'  => 'private',
			'post_title'   => sprintf( '%s - %s', $name, current_time( 'mysql' ) ),
			'post_content' => $message,
		),
		true
	);

	if ( ! is_wp_error( $inquiry_id ) ) {
		update_post_meta( $inquiry_id, '_roshni_name', $name );
		update_post_meta( $inquiry_id, '_roshni_phone', $phone );
		update_post_meta( $inquiry_id, '_roshni_email', $email );
		update_post_meta( $inquiry_id, '_roshni_service', $service );
	}

	$sent = wp_mail( $admin_email, $subject, $body, $headers );

	if ( $sent ) {
		wp_safe_redirect( add_query_arg( 'status', 'success', $redirect_url ) );
		exit;
	}

	if ( ! is_wp_error( $inquiry_id ) ) {
		wp_safe_redirect( add_query_arg( 'status', 'saved_no_mail', $redirect_url ) );
		exit;
	}

	wp_safe_redirect( add_query_arg( 'status', 'mail_failed', $redirect_url ) );
	exit;
}
add_action( 'admin_post_nopriv_roshni_submit_contact', 'roshni_handle_contact_form_submission' );
add_action( 'admin_post_roshni_submit_contact', 'roshni_handle_contact_form_submission' );
