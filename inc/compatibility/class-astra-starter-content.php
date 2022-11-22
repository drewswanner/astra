<?php
/**
 * Starter Content Compatibility.
 * @since x.x.x
 * @package Astra
 */

/**
 * Class Astre_Starter_Content
 */
class Astra_Starter_Content {
	const HOME_SLUG     = 'home';
	const ABOUT_SLUG    = '#about';
	const SERVICES_SLUG = '#services';
	const REVIEWS_SLUG  = '#reviews';
	const FAQ_SLUG      = '#faq';
	const CONTACT_SLUG  = '#contact';

	/**
	 * Constructor
	 */
	public function __construct() {
		$is_fresh_site = get_option( 'fresh_site' );

		if ( ! $is_fresh_site ) {
			return;
		}
		
		// Adding post meta and inserting post.
		add_action(
			'wp_insert_post',
			array(
				$this,
				'register_listener',
			),
			3,
			99
		);

		// Save astra settings into database.
		add_action(
			'customize_save_after',
			array(
				$this,
				'save_astra_settings',
			),
			10, 
			3 
		);

		if ( ! is_customize_preview() ) {
			return;
		}

		// preview customizer values.
		add_filter( 'astra_theme_defaults', array( $this, 'theme_defaults' ) );

		add_filter( 'astra_global_color_palette', array( $this, 'theme_color_palettes_defaults' ) );

	}

	/**
	 * Register listener to insert post.
	 * @since x.x.x
	 * @param int      $post_ID Post Id.
	 * @param \WP_Post $post Post object.
	 * @param bool     $update Is update.
	 */
	public function register_listener( $post_ID, $post, $update ) {
		
		if ( $update ) {
			return;
		}

		$custom_draft_post_name = get_post_meta( $post_ID, '_customize_draft_post_name', true );

		$is_from_starter_content = ! empty( $custom_draft_post_name );

		if ( ! $is_from_starter_content ) {
			return;
		}

		if ( 'page' === $post->post_type ) {
			update_post_meta( $post_ID, 'site-content-layout', 'plain-container' );
			update_post_meta( $post_ID, 'theme-transparent-header-meta', 'enabled' );
			update_post_meta( $post_ID, 'site-sidebar-layout', 'no-sidebar' );
			update_post_meta( $post_ID, 'site-post-title', 'disabled' );
		}
	}

	/**
	 *  Get customizer json
	 * @since x.x.x
	 *  @return mixed value.
	 */
	public function get_customizer_json() {
		try {
			$request = wp_remote_get( ASTRA_THEME_URI . 'inc/compatibility/starter-content/astra-settings-export.json' );
		} catch ( Exception $ex ) {
			$request = null;
		}

		if ( is_wp_error( $request ) ) {
			return false; // Bail early.
		}
		
		// @codingStandardsIgnoreStart
		/**
		 * @psalm-suppress PossiblyNullReference
		 * @psalm-suppress UndefinedMethod
		 * @psalm-suppress PossiblyNullArrayAccess
		 * @psalm-suppress PossiblyNullArgument
		 * @psalm-suppress InvalidScalarArgument
		 */
		return json_decode( $request['body'], 1 );
		// @codingStandardsIgnoreEnd
	}

	/**
	 *  Save Astra customizer settings into database.
	 * @since x.x.x
	 */
	public function save_astra_settings() {
		
		$settings = self::get_customizer_json();

		// Delete existing dynamic CSS cache.
		delete_option( 'astra-settings' );

		if ( ! empty( $settings['customizer-settings'] ) ) {
			foreach ( $settings['customizer-settings'] as $option => $value ) {
				update_option( $option, $value );
			}
		}
	}

	/**
	 * Load default astra settings.
	 *
	 * @param mixed $defaults defaults.
	 * @return mixed value.
	 */
	public function theme_defaults( $defaults ) {
		$json     = '';
		$settings = self::get_customizer_json();

		if ( ! empty( $settings['customizer-settings'] ) ) {
			$json = $settings['customizer-settings']['astra-settings'];
		}

		return $json ? $json : $defaults;
	}

	/**
	 * Load default color palettes.
	 *
	 * @param mixed $defaults defaults.
	 * @return mixed value.
	 */
	public function theme_color_palettes_defaults( $defaults ) {
		$json     = '';
		$settings = self::get_customizer_json();

		if ( ! empty( $settings['customizer-settings'] ) ) {
			$json = $settings['customizer-settings']['astra-color-palettes'];
		}

		return $json ? $json : $defaults;
	}
	

	/**
	 * Return starter content definition.
	 *
	 * @return mixed|void 
	 */
	public function get() {

		$nav_items_header = array(
			'home'     => array(
				'type'      => 'post_type',
				'object'    => 'page',
				'object_id' => '{{' . self::HOME_SLUG . '}}',
			),
			'about'    => array(
				'title' => __( 'About', 'astra' ),
				'type'  => 'custom',
				'url'   => '{{' . self::ABOUT_SLUG . '}}',
			),
			'services' => array(
				'title' => __( 'Services', 'astra' ),
				'type'  => 'custom',
				'url'   => '{{' . self::SERVICES_SLUG . '}}',
			),
			'reviews'  => array(
				'title' => __( 'Reviews', 'astra' ),
				'type'  => 'custom',
				'url'   => '{{' . self::REVIEWS_SLUG . '}}',
			),
			'faq'      => array(
				'title' => __( 'FAQ', 'astra' ),
				'type'  => 'custom',
				'url'   => '{{' . self::FAQ_SLUG . '}}',
			),
			'contact'  => array(
				'title' => __( 'Contact', 'astra' ),
				'type'  => 'custom',
				'url'   => '{{' . self::CONTACT_SLUG . '}}',
			),
		);

		$content = array(
			'attachments' => array(
				'logo' => array(
					'post_title' => _x( 'Logo', 'Theme starter content', 'astra' ),
					'file'       => 'inc/assets/images/starter-content/logo.png',
				),
			),
			'theme_mods'  => array(
				'custom_logo' => '{{logo}}',
			),

			'nav_menus'   => array(
				'primary'     => array(
					'name'  => esc_html__( 'Primary', 'astra' ),
					'items' => $nav_items_header,
				),
				'mobile_menu' => array(
					'name'  => esc_html__( 'Primary', 'astra' ),
					'items' => $nav_items_header,
				),
			),
			'options'     => array(
				'page_on_front' => '{{' . self::HOME_SLUG . '}}',
				'show_on_front' => 'page',
				'blogname'      => 'Astra',
			),
			'posts'       => array(
				self::HOME_SLUG => require ASTRA_THEME_DIR . 'inc/compatibility/starter-content/home.php', // PHPCS:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
			),
		);

		return apply_filters( 'astra_starter_content', $content );
	}
}
