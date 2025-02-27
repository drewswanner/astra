<?php

namespace {
    /**
     * Astra_Admin_Loader
     *
     * @since 4.0.0
     */
    class Astra_Admin_Loader
    {
        /**
         * Instance
         *
         * @access private
         * @var null $instance
         * @since 4.0.0
         */
        private static $instance;
        /**
         * Initiator
         *
         * @since 4.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         *
         * @since 4.0.0
         */
        public function __construct()
        {
        }
        /**
         * Include required classes.
         *
         * @since 4.0.0
         */
        public function includes()
        {
        }
    }
    /**
     * Class Astra_Admin_Ajax.
     *
     * @since 4.0.0
     */
    class Astra_Admin_Ajax
    {
        /**
         * Ajax action prefix.
         *
         * @var string
         * @since 4.0.0
         */
        private $prefix = 'astra';
        /**
         * Instance
         *
         * @access private
         * @var null $instance
         * @since 4.0.0
         */
        private static $instance;
        /**
         * Initiator
         *
         * @since 4.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Errors class instance.
         *
         * @var array
         * @since 4.0.0
         */
        private $errors = array();
        /**
         * Constructor
         *
         * @since 4.0.0
         */
        public function __construct()
        {
        }
        /**
         * Return boolean settings for admin dashboard app.
         *
         * @return array
         * @since 4.0.0
         */
        public function astra_admin_settings_typewise()
        {
        }
        /**
         * Disable pro upgrade notice from all over in Astra.
         *
         * @since 4.0.0
         */
        public function disable_astra_pro_notices()
        {
        }
        /**
         * Migrate to New Header Builder
         *
         * @since 4.0.0
         */
        public function migrate_to_builder()
        {
        }
        /**
         * Save settings.
         *
         * @return void
         * @since 4.0.0
         */
        public function astra_update_admin_setting()
        {
        }
        /**
         * Get ajax error message.
         *
         * @param string $type Message type.
         * @return string
         * @since 4.0.0
         */
        public function get_error_msg($type)
        {
        }
        /**
         * Required Plugin Activate
         *
         * @since 1.2.4
         */
        public function required_plugin_activate()
        {
        }
        /**
         * Required Plugin Activate
         *
         * @since 1.2.4
         */
        public function required_plugin_deactivate()
        {
        }
    }
    /**
     * Astra_API_Init.
     *
     * @since 4.1.0
     */
    class Astra_API_Init extends \WP_REST_Controller
    {
        /**
         * Instance
         *
         * @access private
         * @var null $instance
         * @since 4.0.0
         */
        private static $instance;
        /**
         * Initiator
         *
         * @since 4.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Namespace.
         *
         * @var string
         */
        protected $namespace = 'astra/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = '/admin/settings/';
        /**
         * Option name
         *
         * @access private
         * @var string $option_name DB option name.
         * @since 4.0.0
         */
        private static $option_name = 'astra_admin_settings';
        /**
         * Admin settings dataset
         *
         * @access private
         * @var array $astra_admin_settings Settings array.
         * @since 4.0.0
         */
        private static $astra_admin_settings = array();
        /**
         * Constructor
         *
         * @since 4.0.0
         */
        public function __construct()
        {
        }
        /**
         * Astra's REST knowledge base data.
         *
         * @since 4.0.0
         * @return mixed
         */
        public static function astra_get_knowledge_base_data()
        {
        }
        /**
         * Perform scheduler for Astra knowledge base data retriever for processing further in admin dashboard.
         *
         * @since 4.0.0
         * @return void
         */
        public function astra_kb_data_scheduler()
        {
        }
        /**
         * Run scheduled job for Astra knowledge base data.
         *
         * @since 4.0.0
         * @return void
         */
        public function astra_run_scheduled_docs_job()
        {
        }
        /**
         * Register API routes.
         *
         * @since 4.0.0
         */
        public function register_routes()
        {
        }
        /**
         * Get common settings.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return array $updated_option defaults + set DB option data.
         *
         * @since 4.0.0
         */
        public function get_admin_settings($request)
        {
        }
        /**
         * Check whether a given request has permission to read notes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         * @since 4.0.0
         */
        public function get_permissions_check($request)
        {
        }
        /**
         * Returns an value,
         * based on the settings database option for the admin settings page.
         *
         * @param  string $key     The sub-option key.
         * @param  mixed  $default Option default value if option is not available.
         * @return mixed            Return the option value based on provided key
         * @since 4.0.0
         */
        public static function get_admin_settings_option($key, $default = \false)
        {
        }
        /**
         * Update an value of a key,
         * from the settings database option for the admin settings page.
         *
         * @param string $key       The option key.
         * @param mixed  $value     The value to update.
         * @return mixed            Return the option value based on provided key
         * @since 4.0.0
         */
        public static function update_admin_settings_option($key, $value)
        {
        }
    }
    /**
     * Astra_Menu.
     *
     * @since 4.1.0
     */
    class Astra_Menu
    {
        /**
         * Instance
         *
         * @access private
         * @var null $instance
         * @since 4.0.0
         */
        private static $instance;
        /**
         * Initiator
         *
         * @since 4.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Page title
         *
         * @since 4.0.0
         * @var string $page_title
         */
        public static $page_title = 'Astra';
        /**
         * Plugin slug
         *
         * @since 4.0.0
         * @var string $plugin_slug
         */
        public static $plugin_slug = 'astra';
        /**
         * Constructor
         *
         * @since 4.0.0
         */
        public function __construct()
        {
        }
        /**
         * Init Hooks.
         *
         * @since 4.0.0
         * @return void
         */
        public function initialize_hooks()
        {
        }
        /**
         * Admin settings init.
         *
         * @since 4.0.0
         */
        public function init_admin_settings()
        {
        }
        /**
         * Add custom CSS for admin area sub menu icons.
         *
         * @since 4.0.0
         */
        public function admin_submenu_css()
        {
        }
        /**
         * Theme options page Slug getter including White Label string.
         *
         * @since 4.0.0
         * @return string Theme Options Page Slug.
         */
        public static function get_theme_page_slug()
        {
        }
        /**
         *  Initialize after Astra gets loaded.
         *
         * @since 4.0.0
         */
        public function settings_admin_scripts()
        {
        }
        /**
         * Add submenu to admin menu.
         *
         * @since 4.0.0
         */
        public function setup_menu()
        {
        }
		/**
		 * Provide the Spectra admin page URL.
		 *
		 * @since 4.1.1
		 * @return string url.
		 */
		public function get_spectra_page_admin_link()
		{
		}
        /**
         * Renders the admin settings.
         *
         * @since 4.0.0
         * @return void
         */
        public function render_admin_dashboard()
        {
        }
        /**
         * Enqueues the needed CSS/JS for the builder's admin settings page.
         *
         * @since 4.0.0
         */
        public function styles_scripts()
        {
        }
        /**
         * Get customizer quick links for easy navigation.
         *
         * @return array
         * @since 4.0.0
         */
        public static function astra_get_quick_links()
        {
        }
        /**
         * Get Starter Templates plugin data.
         *
         * @return array
         * @since 4.0.0
         */
        public static function get_starter_template_plugin_data()
        {
        }
        /**
         * Get plugin status
         *
         * @since 4.0.0
         *
         * @param  string $plugin_init_file Plguin init file.
         * @return mixed
         */
        public static function get_plugin_status($plugin_init_file)
        {
        }
        /**
         * Get Astra's pro extension list.
         *
         * @since 4.0.0
         * @return array
         * @access public
         */
        public static function astra_get_pro_extensions()
        {
        }
        /**
         * Get Astra's useful plugins.
         * Extend this in following way -
         *
         * //  array(
         * //         'title' => "Plugin Name",
         * //         'subtitle' => "Plugin description goes here.",
         * //         'path' => 'plugin-slug/plugin-slug.php',
         * //         'redirection' => admin_url( 'admin.php?page=sc-dashboard' ),
         * //         'status' => self::get_plugin_status( 'plugin-slug/plugin-slug.php' ),
         * //         'logoPath' => array(
         * //             'internal_icon' => true, // true = will take internal Astra's any icon. false = provide next custom icon link.
         * //             'icon_path' => "spectra", // If internal_icon false then - example custom SVG URL: ASTRA_THEME_URI . 'inc/assets/images/astra.svg'.
         * //         ),
         * //     ),
         *
         * @since 4.0.0
         * @return array
         * @access public
         */
        public static function astra_get_useful_plugins()
        {
        }
        /**
         * Get Astra's recommended integrations.
         * Extend this in following way -
         *
         * // array(
         * //    'title' => "Plugin Name",
         * //    'subtitle' => "Plugin description goes here.",
         * //     'isPro' => false,
         * //     'status' => self::get_plugin_status( 'plugin-slug/plugin-slug.php' ),
         * //     'path' => 'plugin-slug/plugin-slug.php',
         * //     'redirection' => admin_url( 'admin.php?page=sc-dashboard' ),
         * //     'logoPath' => array(
         * //         'internal_icon' => true, // true = will take internal Astra's any icon. false = provide next custom icon link.
         * //         'icon_path' => "spectra", // If internal_icon false then - example custom SVG URL: ASTRA_THEME_URI . 'inc/assets/images/astra.svg'.
         * //     ),
         * // ),
         *
         * @since 4.0.0
         * @return array
         * @access public
         */
        public static function astra_get_integrations()
        {
        }
        /**
         * Get Changelogs from API.
         *
         * @since 4.0.0
         * @return array $changelog_data Changelog Data.
         */
        public static function astra_get_theme_changelog_feed_data()
        {
        }
        /**
         * Settings app scripts
         *
         * @since 4.0.0
         * @param array $localize Variable names.
         */
        public function settings_app_scripts($localize)
        {
        }
        /**
         *  Add footer link.
         *
         * @since 4.0.0
         */
        public function astra_admin_footer_link()
        {
        }
    }
    /**
     * Creates a breadcrumbs menu for the site based on the current page that's being viewed by the user.
     *
     * @since  0.6.0
     * @access public
     */
    class Astra_Breadcrumb_Trail
    {
        /**
         * Array of items belonging to the current breadcrumb trail.
         *
         * @since  0.1.0
         * @access public
         * @var    array
         */
        public $items = array();
        /**
         * Arguments used to build the breadcrumb trail.
         *
         * @since  0.1.0
         * @access public
         * @var    array
         */
        public $args = array();
        /**
         * Array of text labels.
         *
         * @since  1.0.0
         * @access public
         * @var    array
         */
        public $labels = array();
        /**
         * Array of post types (key) and taxonomies (value) to use for single post views.
         *
         * @since  1.0.0
         * @access public
         * @var    array
         */
        public $post_taxonomy = array();
        /* ====== Magic Methods ====== */
        /**
         * Magic method to use in case someone tries to output the layout object as a string.
         * We'll just return the trail HTML.
         *
         * @since  1.0.0
         * @access public
         * @return string
         */
        public function __toString()
        {
        }
        /**
         * Sets up the breadcrumb trail properties.  Calls the `Breadcrumb_Trail::add_items()` method
         * to create the array of breadcrumb items.
         *
         * @since  0.6.0
         * @access public
         * @param  array   $args  {
         *     @type string    $container      Container HTML element. nav|div
         *     @type string    $before         String to output before breadcrumb menu.
         *     @type string    $after          String to output after breadcrumb menu.
         *     @type string    $browse_tag     The HTML tag to use to wrap the "Browse" header text.
         *     @type string    $list_tag       The HTML tag to use for the list wrapper.
         *     @type string    $item_tag       The HTML tag to use for the item wrapper.
         *     @type bool      $show_on_front  Whether to show when `is_front_page()`.
         *     @type bool      $network        Whether to link to the network main site (multisite only).
         *     @type bool      $show_title     Whether to show the title (last item) in the trail.
         *     @type bool      $show_browse    Whether to show the breadcrumb menu header.
         *     @type array     $labels         Text labels. @see Breadcrumb_Trail::set_labels()
         *     @type array     $post_taxonomy  Taxonomies to use for post types. @see Breadcrumb_Trail::set_post_taxonomy()
         *     @type bool      $echo           Whether to print or return the breadcrumbs.
         * }
         * @return void
         */
        public function __construct($args = array())
        {
        }
        /* ====== Public Methods ====== */
        /**
         * Formats the HTML output for the breadcrumb trail.
         *
         * @since  0.6.0
         * @access public
         * @return string
         */
        public function trail()
        {
        }
        /* ====== Protected Methods ====== */
        /**
         * Sets the labels property.  Parses the inputted labels array with the defaults.
         *
         * @since  1.0.0
         * @access protected
         * @return void
         */
        protected function set_labels()
        {
        }
        /**
         * Sets the `$post_taxonomy` property.  This is an array of post types (key) and taxonomies (value).
         * The taxonomy's terms are shown on the singular post view if set.
         *
         * @since  1.0.0
         * @access protected
         * @return void
         */
        protected function set_post_taxonomy()
        {
        }
        /**
         * Runs through the various WordPress conditional tags to check the current page being viewed.  Once
         * a condition is met, a specific method is launched to add items to the `$items` array.
         *
         * @since  1.0.0
         * @access protected
         * @return void
         */
        protected function add_items()
        {
        }
        /**
         * Gets front items based on $wp_rewrite->front.
         *
         * @since  1.0.0
         * @access protected
         * @return void
         */
        protected function add_rewrite_front_items()
        {
        }
        /**
         * Adds the page/paged number to the items array.
         *
         * @since  1.0.0
         * @access protected
         * @return void
         */
        protected function add_paged_items()
        {
        }
        /**
         * Adds the network (all sites) home page link to the items array.
         *
         * @since  1.0.0
         * @access protected
         * @return void
         */
        protected function add_network_home_link()
        {
        }
        /**
         * Adds the current site's home page link to the items array.
         *
         * @since  1.0.0
         * @access protected
         * @return void
         */
        protected function add_site_home_link()
        {
        }
        /**
         * Adds items for the front page to the items array.
         *
         * @since  1.0.0
         * @access protected
         * @return void
         */
        protected function add_front_page_items()
        {
        }
        /**
         * Adds items for the posts page (i.e., is_home()) to the items array.
         *
         * @since  1.0.0
         * @access protected
         * @return void
         */
        protected function add_blog_items()
        {
        }
        /**
         * Adds singular post items to the items array.
         *
         * @since  1.0.0
         * @access protected
         * @return void
         */
        protected function add_singular_items()
        {
        }
        /**
         * Adds the items to the trail items array for taxonomy term archives.
         *
         * @since  1.0.0
         * @access protected
         * @global object $wp_rewrite
         * @return void
         */
        protected function add_term_archive_items()
        {
        }
        /**
         * Adds the items to the trail items array for post type archives.
         *
         * @since  1.0.0
         * @access protected
         * @return void
         */
        protected function add_post_type_archive_items()
        {
        }
        /**
         * Adds the items to the trail items array for user (author) archives.
         *
         * @since  1.0.0
         * @access protected
         * @global object $wp_rewrite
         * @return void
         */
        protected function add_user_archive_items()
        {
        }
        /**
         * Adds the items to the trail items array for minute + hour archives.
         *
         * @since  1.0.0
         * @access protected
         * @return void
         */
        protected function add_minute_hour_archive_items()
        {
        }
        /**
         * Adds the items to the trail items array for minute archives.
         *
         * @since  1.0.0
         * @access protected
         * @return void
         */
        protected function add_minute_archive_items()
        {
        }
        /**
         * Adds the items to the trail items array for hour archives.
         *
         * @since  1.0.0
         * @access protected
         * @return void
         */
        protected function add_hour_archive_items()
        {
        }
        /**
         * Adds the items to the trail items array for day archives.
         *
         * @since  1.0.0
         * @access protected
         * @return void
         */
        protected function add_day_archive_items()
        {
        }
        /**
         * Adds the items to the trail items array for week archives.
         *
         * @since  1.0.0
         * @access protected
         * @return void
         */
        protected function add_week_archive_items()
        {
        }
        /**
         * Adds the items to the trail items array for month archives.
         *
         * @since  1.0.0
         * @access protected
         * @return void
         */
        protected function add_month_archive_items()
        {
        }
        /**
         * Adds the items to the trail items array for year archives.
         *
         * @since  1.0.0
         * @access protected
         * @return void
         */
        protected function add_year_archive_items()
        {
        }
        /**
         * Adds the items to the trail items array for archives that don't have a more specific method
         * defined in this class.
         *
         * @since  1.0.0
         * @access protected
         * @return void
         */
        protected function add_default_archive_items()
        {
        }
        /**
         * Adds the items to the trail items array for search results.
         *
         * @since  1.0.0
         * @access protected
         * @return void
         */
        protected function add_search_items()
        {
        }
        /**
         * Adds the items to the trail items array for 404 pages.
         *
         * @since  1.0.0
         * @access protected
         * @return void
         */
        protected function add_404_items()
        {
        }
        /**
         * Adds a specific post's parents to the items array.
         *
         * @since  1.0.0
         * @access protected
         * @param  int    $post_id
         * @return void
         */
        protected function add_post_parents($post_id)
        {
        }
        /**
         * Adds a specific post's hierarchy to the items array.  The hierarchy is determined by post type's
         * rewrite arguments and whether it has an archive page.
         *
         * @since  1.0.0
         * @access protected
         * @param  int    $post_id
         * @return void
         */
        protected function add_post_hierarchy($post_id)
        {
        }
        /**
         * Gets post types by slug.  This is needed because the get_post_types() function doesn't exactly
         * match the 'has_archive' argument when it's set as a string instead of a boolean.
         *
         * @since  0.6.0
         * @access protected
         * @param  int    $slug  The post type archive slug to search for.
         * @return void
         */
        protected function get_post_types_by_slug($slug)
        {
        }
        /**
         * Adds a post's terms from a specific taxonomy to the items array.
         *
         * @since  1.0.0
         * @access protected
         * @param  int     $post_id  The ID of the post to get the terms for.
         * @param  string  $taxonomy The taxonomy to get the terms from.
         * @return void
         */
        protected function add_post_terms($post_id, $taxonomy)
        {
        }
        /**
         * Get parent posts by path.  Currently, this method only supports getting parents of the 'page'
         * post type.  The goal of this function is to create a clear path back to home given what would
         * normally be a "ghost" directory.  If any page matches the given path, it'll be added.
         *
         * @since  1.0.0
         * @access protected
         * @param  string $path The path (slug) to search for posts by.
         * @return void
         */
        function add_path_parents($path)
        {
        }
        /**
         * Searches for term parents of hierarchical taxonomies.  This function is similar to the WordPress
         * function get_category_parents() but handles any type of taxonomy.
         *
         * @since  1.0.0
         * @param  int    $term_id  ID of the term to get the parents of.
         * @param  string $taxonomy Name of the taxonomy for the given term.
         * @return void
         */
        function add_term_parents($term_id, $taxonomy)
        {
        }
        /**
         * Turns %tag% from permalink structures into usable links for the breadcrumb trail.  This feels kind of
         * hackish for now because we're checking for specific %tag% examples and only doing it for the 'post'
         * post type.  In the future, maybe it'll handle a wider variety of possibilities, especially for custom post
         * types.
         *
         * @since  0.6.0
         * @access protected
         * @param  int    $post_id ID of the post whose parents we want.
         * @param  string $path    Path of a potential parent page.
         * @param  array  $args    Mixed arguments for the menu.
         * @return array
         */
        protected function map_rewrite_tags($post_id, $path)
        {
        }
    }
    /**
     * Customizer Initialization
     *
     * @since 1.7.0
     */
    class Astra_Breadcrumbs_Loader
    {
        /**
         * Member Variable
         *
         * @var instance
         */
        private static $instance;
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Enqueue google fonts.
         *
         * @return void
         */
        public function add_fonts()
        {
        }
        /**
         * Set Options Default Values
         *
         * @param  array $defaults  Astra options default value array.
         * @return array
         */
        public function theme_defaults($defaults)
        {
        }
        /**
         * Add postMessage support for site title and description for the Theme Customizer.
         *
         * @param WP_Customize_Manager $wp_customize Theme Customizer object.
         */
        public function customize_register($wp_customize)
        {
        }
        /**
         * Customizer Preview
         */
        public function preview_scripts()
        {
        }
    }
    /**
     * Breadcrumbs Markup Initial Setup
     *
     * @since 1.8.0
     */
    class Astra_Breadcrumbs_Markup
    {
        /**
         * Member Variable
         *
         * @var object instance
         */
        private static $instance;
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Astra Breadcrumbs Template
         *
         * Loads template based on the style option selected in options panel for Breadcrumbs.
         *
         * @since 1.8.0
         *
         * @return void
         */
        public function astra_breadcumb_template()
        {
        }
        /**
         * Astra Hook Breadcrumb Position
         *
         * Hook breadcrumb to position of selected option
         *
         * @since 1.8.0
         *
         * @return void
         */
        public function astra_hook_breadcrumb_position()
        {
        }
        /**
         * Astra Breadcrumbs Rules
         *
         * Checks the rules defined for displaying Breadcrumb on different pages.
         *
         * @since 1.8.0
         *
         * @return boolean
         */
        public static function astra_breadcrumb_rules()
        {
        }
    }
    /**
     * Breadcrumbs Initial Setup
     *
     * @since 1.7.0
     */
    class Astra_Breadcrumbs
    {
        /**
         * Member Variable
         *
         * @var instance
         */
        private static $instance;
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
        /**
         * Third Party Breadcrumb option
         *
         * @param Array $options breadcrumb options array.
         *
         * @return Array breadcrumb options array.
         * @since 1.0.0
         */
        public function astra_breadcrumb_source_list_items($options)
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     */
    class Astra_Customizer_Config_Base
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Base Method for Registering Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
        /**
         * Section Description
         *
         * @since 1.4.3
         *
         * @param  array $args Description arguments.
         * @return mixed       Markup of the section description.
         */
        public function section_get_description($args)
        {
        }
    }
    /**
     * Register Colors and Background - Breadcrumbs Options Customizer Configurations.
     */
    class Astra_Breadcrumbs_Color_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Colors and Background - Breadcrumbs Options Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.7.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     */
    class Astra_Breadcrumbs_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Astra-Breadcrumbs Settings.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.7.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
        /**
         * Is third-party breadcrumb active.
         * Decide if the Source option should be visible depending on third party plugins.
         *
         * @return boolean  True - If the option should be displayed, False - If the option should be hidden.
         */
        public function is_third_party_breadcrumb_active()
        {
        }
        /**
         * Is selected third-party breadcrumb active.
         * Decide if the Separator option should be visible depending on third party plugins.
         *
         * @return boolean  True - If the option should be displayed, False - If the option should be hidden.
         */
        public function is_selected_breadcrumb_active()
        {
        }
    }
    /**
     * Register Colors and Background - Breadcrumbs Options Customizer Configurations.
     */
    class Astra_Breadcrumbs_Typo_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Colors and Background - Breadcrumbs Options Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.7.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Customizer Initialization
     *
     * @since 2.2.0
     */
    class Astra_Heading_Colors_Loader
    {
        /**
         * Constructor
         *
         * @since 2.2.0
         */
        public function __construct()
        {
        }
        /**
         * Enqueue google fonts.
         *
         * @since 2.2.0
         */
        public function add_fonts()
        {
        }
        /**
         * Set Options Default Values
         *
         * @param  array $defaults  Astra options default value array.
         * @return array
         *
         * @since 2.2.0
         */
        public function theme_defaults($defaults)
        {
        }
        /**
         * Load color configs for the Heading Colors.
         *
         * @param WP_Customize_Manager $wp_customize Theme Customizer object.
         *
         * @since 2.2.0
         */
        public function customize_register($wp_customize)
        {
        }
        /**
         * Customizer Preview
         *
         * @since 2.2.0
         */
        public function preview_scripts()
        {
        }
    }
    /**
     * Heading Initial Setup
     *
     * @since 2.1.4
     */
    class Astra_Heading_Colors
    {
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     */
    class Astra_Heading_Colors_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Astra Heading Colors Settings.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 2.1.4
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Scroll To Top Initial Setup
     *
     * @since 4.0.0
     */
    class Astra_Scroll_To_Top
    {
        /**
         * Member Variable
         *
         * @var null $instance
         */
        private static $instance;
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
    }
    /**
     * Scroll to Top - Customizer.
     *
     * @package Astra
     * @since 4.0.0
     */
    /**
     * Customizer Initialization
     *
     * @since 4.0.0
     */
    class Astra_Scroll_To_Top_Loader
    {
        /**
         * Member Variable
         *
         * @var null $instance
         */
        private static $instance;
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         *
         * @since 4.0.0
         */
        public function __construct()
        {
        }
        /**
         * Set Options Default Values
         *
         * @param  array $defaults  Astra options default value array.
         * @return array
         * @since 4.0.0
         */
        public function theme_defaults($defaults)
        {
        }
        /**
         * Add customizer configs for scroll to top in the Theme Customizer.
         *
         * @param WP_Customize_Manager $wp_customize Theme Customizer object.
         * @since 4.0.0
         */
        public function new_customize_register($wp_customize)
        {
        }
        /**
         * Customizer Preview
         *
         * @since 4.0.0
         */
        public function preview_scripts()
        {
        }
        /**
         * Scroll to Top addon markup loader
         *
         * Loads appropriate template file based on the style option selected in options panel.
         *
         * @since 4.0.0
         */
        public function html_markup_loader()
        {
        }
    }
    /**
     * Register Scroll To Top Customizer Configurations.
     */
    class Astra_Scroll_To_Top_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Scroll To Top Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 4.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Sticky Header Initial Setup
     *
     * @since 1.0.0
     */
    class Astra_Ext_Transparent_Header
    {
        /**
         * Member Variable
         *
         * @var instance
         */
        private static $instance;
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
    }
    /**
     * Customizer Initialization
     *
     * @since 1.0.0
     */
    class Astra_Ext_Transparent_Header_Loader
    {
        /**
         * Member Variable
         *
         * @var instance
         */
        private static $instance;
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Set Options Default Values
         *
         * @param  array $defaults  Astra options default value array.
         * @return array
         */
        public function theme_defaults($defaults)
        {
        }
        /**
         * Add postMessage support for site title and description for the Theme Customizer.
         *
         * @param WP_Customize_Manager $wp_customize Theme Customizer object.
         */
        public function customize_register($wp_customize)
        {
        }
        /**
         * Customizer Preview
         */
        public function preview_scripts()
        {
        }
    }
    /**
     * Transparent Header Markup Initial Setup
     *
     * @since 1.0.0
     */
    class Astra_Ext_Transparent_Header_Markup
    {
        /**
         * Member Variable
         *
         * @var object instance
         */
        private static $instance;
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Add Body Classes
         *
         * @param array $classes Body Class Array.
         * @return array
         */
        public function add_body_class($classes)
        {
        }
        /**
         * Astra check if transparent header is enabled.
         *
         * @return boolean true/false.
         */
        public static function is_transparent_header()
        {
        }
        /**
         * Site Header - <header>
         *
         * @since 1.0.0
         */
        public function transparent_header_logo()
        {
        }
        /**
         * Replace transparent header logo.
         *
         * @param sting $html Size name.
         * @param int   $blog_id Icon.
         *
         * @return string html markup of logo.
         */
        public function transparent_custom_logo($html, $blog_id)
        {
        }
        /**
         * Replace transparent header logo.
         *
         * @param array  $attr Image.
         * @param object $attachment Image obj.
         * @param sting  $size Size name.
         *
         * @return array Image attr.
         */
        public function replace_trans_header_attr($attr, $attachment, $size)
        {
        }
        /**
         * Add Meta Options
         *
         * @param array $meta_option Page Meta.
         * @return array
         */
        public function add_options($meta_option)
        {
        }
        /**
         * Transparent Header Meta Field markup
         *
         * Loads appropriate template file based on the style option selected in options panel.
         *
         * @param array $meta Page Meta.
         * @since 1.0.0
         */
        public function add_options_markup($meta)
        {
        }
        /**
         * Add Styles Callback
         */
        public function customizer_save()
        {
        }
        /**
         * Add logo image sizes in filter.
         *
         * @since 1.0.0
         * @param array $sizes Sizes.
         * @param array $metadata attachment data.
         *
         * @return array
         */
        public function transparent_logo_image_sizes($sizes, $metadata)
        {
        }
    }
    /**
     * Register Transparent Header Customizer Configurations.
     */
    class Astra_Transparent_Header_Panels_And_Sections extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Transparent Header Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Colors and Background - Header Options Customizer Configurations.
     */
    class Astra_Customizer_Colors_Transparent_Header_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Colors and Background - Header Options Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Transparent Header Customizer Configurations.
     */
    class Astra_Customizer_Transparent_Header_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Transparent Header Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Class Astra_Builder_Loader.
     */
    final class Astra_Builder_Loader
    {
        /**
         * Member Variable
         *
         * @var instance
         */
        private static $instance = \null;
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Update Quick Settings links.
         *
         * @param array $quick_settings Links to the Quick Settings in Astra.
         * @since 3.0.0
         */
        public function quick_settings($quick_settings)
        {
        }
        /**
         * Advanced Hooks markup loader
         *
         * Loads appropriate template file based on the style option selected in options panel.
         *
         * @since 3.0.0
         */
        public function load_markup()
        {
        }
    }
    /**
     * Class Astra_Builder_UI_Controller.
     */
    final class Astra_Builder_UI_Controller
    {
        /**
         * Astra SVGs.
         *
         * @var ast_svgs
         */
        private static $ast_svgs = \null;
        /**
         * Get an SVG Icon
         *
         * @param string $icon the icon name.
         * @param bool   $base if the baseline class should be added.
         */
        public static function fetch_svg_icon($icon = '', $base = \true)
        {
        }
        /**
         * Prepare Social Icon HTML.
         *
         * @param string $index The Index of the social icon.
         * @param string $builder_type the type of the builder.
         */
        public static function render_social_icon($index, $builder_type = 'header')
        {
        }
        /**
         * Prepare HTML Markup.
         *
         * @param string $index Key of the HTML Control.
         */
        public static function render_html_markup($index = 'header-html-1')
        {
        }
        /**
         * Prepare Edit icon inside customizer.
         *
         * @param string $class custom class.
         * @since 3.9.4
         */
        public static function render_customizer_edit_button($class = '')
        {
        }
        /**
         * Prepare Special Edit navigatory trigger for Builder Grid Rows in customizer.
         *
         * @param string $type Header / Footer row type.
         * @param string $row_position Above / Primary / Below.
         *
         * @since 3.0.0
         */
        public static function render_grid_row_customizer_edit_button($type, $row_position)
        {
        }
        /**
         * Prepare Edit navigatory trigger for Banner Section in customizer.
         *
         * @since 3.9.0
         */
        public static function render_banner_customizer_edit_button()
        {
        }
        /**
         * Render Trigger Markup.
         *
         * @since 3.0.0
         */
        public static function render_mobile_trigger()
        {
        }
        /**
         * Prepare Button HTML.
         *
         * @param string $index The Index of the button.
         * @param string $builder_type the type of the builder.
         */
        public static function render_button($index, $builder_type = 'header')
        {
        }
        /**
         * Site Identity.
         *
         * @param  string $device   Device name.
         */
        public static function render_site_identity($device)
        {
        }
        /**
         * Render Mobile Cart Flyout Markup.
         *
         * @since 3.1.0
         */
        public static function render_mobile_cart_flyout_markup()
        {
        }
        /**
         * Account HTML.
         */
        public static function render_account()
        {
        }
    }
    /**
     * Class Astra_Builder_Widget_Controller.
     */
    final class Astra_Builder_Widget_Controller
    {
        /**
         * Member Variable
         *
         * @var instance
         */
        private static $instance = \null;
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Display sidebar as section.
         *
         * @param bool   $active ios active.
         * @param object $section section.
         * @return bool
         */
        public function display_sidebar($active, $section)
        {
        }
        /**
         * Initiate Astra Widgets.
         */
        public function widget_init()
        {
        }
        /**
         * Register widget for the builder.
         *
         * @param integer $index index of widget.
         * @param string  $builder_type builder type.
         */
        public function register_sidebar($index, $builder_type = 'header')
        {
        }
    }
    /**
     * Class Astra_Builder_Footer.
     */
    final class Astra_Builder_Footer
    {
        /**
         * Member Variable
         *
         * @var instance
         */
        private static $instance = \null;
        /**
         * Dynamic Methods.
         *
         * @var dynamic methods
         */
        private static $methods = array();
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Callback when method not exists.
         *
         * @param  string $func function name.
         * @param array  $params function parameters.
         */
        public function __call($func, $params)
        {
        }
        /**
         * Remove existing Footer to load Footer Builder.
         *
         * @since 3.0.0
         * @return void
         */
        public function remove_existing_actions()
        {
        }
        /**
         * Astra Footer Markup.
         */
        public function footer_markup()
        {
        }
        /**
         *  Call above footer UI.
         */
        public function above_footer()
        {
        }
        /**
         *  Call primary footer UI.
         */
        public function primary_footer()
        {
        }
        /**
         *  Call below footer UI.
         */
        public function below_footer()
        {
        }
        /**
         * Call component footer UI.
         *
         * @param string $row row.
         * @param string $column column.
         */
        public function render_column($row, $column)
        {
        }
        /**
         * Render Footer Copyright Markup!
         */
        public function footer_copyright()
        {
        }
        /**
         * Render HTML 1.
         */
        public function footer_html_1()
        {
        }
        /**
         * Render HTML 2.
         */
        public function footer_html_2()
        {
        }
        /**
         * Render HTML 3.
         */
        public function footer_html_3()
        {
        }
        /**
         * Render HTML 4.
         */
        public function footer_html_4()
        {
        }
        /**
         * Render Menu.
         */
        public function footer_menu()
        {
        }
    }
    /**
     * Class Astra_Builder_Header.
     */
    final class Astra_Builder_Header
    {
        /**
         * Member Variable
         *
         * @var instance
         */
        private static $instance = \null;
        /**
         * Dynamic Methods.
         *
         * @var dynamic methods
         */
        private static $methods = array();
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Callback when method not exists.
         *
         * @param  string $func function name.
         * @param array  $params function parameters.
         */
        public function __call($func, $params)
        {
        }
        /**
         * Remove complete header Support on basis of meta option.
         *
         * @since 3.8.0
         * @return void
         */
        public function global_astra_header()
        {
        }
        /**
         * Inherit Header base layout.
         * Do all actions for header.
         */
        public function header_builder_markup()
        {
        }
        /**
         * Remove existing Header to load Header Builder.
         *
         * @since 3.0.0
         * @return void
         */
        public function remove_existing_actions()
        {
        }
        /**
         * Header Mobile trigger
         */
        public function header_mobile_trigger()
        {
        }
        /**
         * Render WooCommerce Cart.
         */
        public function header_woo_cart()
        {
        }
        /**
         * Render EDD Cart.
         */
        public function header_edd_cart()
        {
        }
        /**
         * Render account icon.
         */
        public function header_account()
        {
        }
        /**
         * Render Search icon.
         *
         * @param  string $device   Device name.
         */
        public function header_search($device = 'desktop')
        {
        }
        /**
         * Render site logo.
         *
         * @param  string $device   Device name.
         */
        public static function site_identity($device = 'desktop')
        {
        }
        /**
         * Call component header UI.
         *
         * @param string $row row.
         * @param string $column column.
         */
        public function render_column($row, $column)
        {
        }
        /**
         * Render desktop header layout.
         */
        public function desktop_header()
        {
        }
        /**
         *  Call above header UI.
         */
        public function above_header()
        {
        }
        /**
         *  Call primary header UI.
         */
        public function primary_header()
        {
        }
        /**
         *  Call below header UI.
         */
        public function below_header()
        {
        }
        /**
         * Call mobile component header UI.
         *
         * @param string $row row.
         * @param string $column column.
         */
        public function render_mobile_column($row, $column)
        {
        }
        /**
         * Render Mobile header layout.
         */
        public function mobile_header()
        {
        }
        /**
         *  Call Mobile above header UI.
         */
        public function mobile_above_header()
        {
        }
        /**
         *  Call Mobile primary header UI.
         */
        public function mobile_primary_header()
        {
        }
        /**
         *  Call Mobile below header UI.
         */
        public function mobile_below_header()
        {
        }
        /**
         *  Call Mobile Popup UI.
         */
        public function mobile_popup()
        {
        }
        /**
         *  Call Mobile Menu Markup.
         *
         * @param string $device Checking where mobile-menu is dropped.
         */
        public function header_mobile_menu_markup($device = '')
        {
        }
        /**
         *  Call Mobile Cart Flyout UI.
         */
        public function mobile_cart_flyout()
        {
        }
        /**
         * Add Body Classes
         *
         * @param array $classes Body Class Array.
         * @return array
         */
        public function add_body_class($classes)
        {
        }
    }
    /**
     * Register Builder Dynamic CSS.
     *
     * @since 3.0.0
     */
    class Astra_Button_Component_Dynamic_CSS
    {
        /**
         * Dynamic CSS
         *
         * @param string $builder_type Builder Type.
         * @return String Generated dynamic CSS for Heading Colors.
         *
         * @since 3.0.0
         */
        public static function astra_button_dynamic_css($builder_type = 'header')
        {
        }
    }
    /**
     * Register Builder Dynamic CSS.
     *
     * @since 3.0.0
     */
    class Astra_Html_Component_Dynamic_CSS
    {
        /**
         * Dynamic CSS
         *
         * @param string $builder_type Builder Type.
         * @return String Generated dynamic CSS for Heading Colors.
         *
         * @since 3.0.0
         */
        public static function astra_html_dynamic_css($builder_type = 'header')
        {
        }
    }
    /**
     * Register Builder Dynamic CSS.
     *
     * @since 3.0.0
     */
    class Astra_Social_Component_Dynamic_CSS
    {
        /**
         * Dynamic CSS
         *
         * @param string $builder_type Builder Type.
         * @return String Generated dynamic CSS for Heading Colors.
         *
         * @since 3.0.0
         */
        public static function astra_social_dynamic_css($builder_type = 'header')
        {
        }
        /**
         * Load Social default css.
         *
         * @since 3.0.0
         */
        public static function get_social_static_css()
        {
        }
    }
    /**
     * Register Builder Dynamic CSS.
     *
     * @since 3.0.0
     */
    class Astra_Widget_Component_Dynamic_CSS
    {
        /**
         * Dynamic CSS
         *
         * @param string $builder_type Builder Type.
         * @return String Generated dynamic CSS for Heading Colors.
         *
         * @since 3.0.0
         */
        public static function astra_widget_dynamic_css($builder_type = 'header')
        {
        }
    }
    /**
     * Class Astra_Builder_Base_Dynamic_CSS.
     */
    final class Astra_Builder_Base_Dynamic_CSS
    {
        /**
         * Member Variable
         *
         * @var instance
         */
        private static $instance = \null;
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Prepare Advanced Margin / Padding Dynamic CSS.
         *
         * @param string $section_id section id.
         * @param string $selector selector.
         * @return string
         */
        public static function prepare_advanced_margin_padding_css($section_id, $selector)
        {
        }
        /**
         * Prepare Advanced Margin / Padding Dynamic CSS.
         *
         * @param string $section_id section id.
         * @param string $selector selector.
         * @return array
         */
        public static function prepare_advanced_typography_css($section_id, $selector)
        {
        }
        /**
         * Prepare Footer Dynamic CSS.
         *
         * @param string $dynamic_css Appended dynamic CSS.
         * @param string $dynamic_css_filtered Filtered dynamic CSS.
         * @return array
         */
        public static function footer_dynamic_css($dynamic_css, $dynamic_css_filtered = '')
        {
        }
        /**
         * Different logo for mobile static CSS.
         *
         * @param string $dynamic_css Appended dynamic CSS.
         * @since 3.5.0
         * @return string
         */
        public static function mobile_header_logo_css($dynamic_css)
        {
        }
        /**
         * Prepare Element visibility Dynamic CSS.
         *
         * @param string $section_id section id.
         * @param string $selector selector.
         * @param string $default_property Section default CSS property.
         * @param string $mobile_tablet_default Mobile/Tabled display property.
         * @return array
         */
        public static function prepare_visibility_css($section_id, $selector, $default_property = 'flex', $mobile_tablet_default = '')
        {
        }
    }
    /**
     * Above Footer Initialization
     *
     * @since 3.0.0
     */
    class Astra_Above_Footer_Component_Loader
    {
        /**
         * Constructor
         *
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Customizer Preview
         *
         * @since 3.0.0
         */
        public function preview_scripts()
        {
        }
    }
    /**
     * Above Footer Initial Setup
     *
     * @since 3.0.0
     */
    class Astra_Above_Footer
    {
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
    }
    /**
     * Below Footer Initialization
     *
     * @since 3.0.0
     */
    class Astra_Below_Footer_Component_Loader
    {
        /**
         * Constructor
         *
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Customizer Preview
         *
         * @since 3.0.0
         */
        public function preview_scripts()
        {
        }
    }
    /**
     * Below Footer Initial Setup
     *
     * @since 3.0.0
     */
    class Astra_Below_Footer
    {
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
    }
    /**
     * Customizer Initialization
     *
     * @since 3.0.0
     */
    class Astra_Footer_Button_Component_Loader
    {
        /**
         * Constructor
         *
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Add Font Family Callback
         *
         * @return void
         */
        public function add_fonts()
        {
        }
        /**
         * Customizer Preview
         *
         * @since 3.0.0
         */
        public function preview_scripts()
        {
        }
    }
    /**
     * Heading Initial Setup
     *
     * @since 3.0.0
     */
    class Astra_Footer_Button_Component
    {
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
    }
    /**
     * Customizer Initialization
     *
     * @since 3.0.0
     */
    class Astra_Footer_Copyright_Component_Loader
    {
        /**
         * Constructor
         *
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Customizer Preview
         *
         * @since 3.0.0
         */
        public function preview_scripts()
        {
        }
    }
    /**
     * Astra_Footer_Copyright_Component
     *
     * @since 3.0.0
     */
    class Astra_Footer_Copyright_Component
    {
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
    }
    /**
     * Customizer Initialization
     *
     * @since 3.0.0
     */
    class Astra_Footer_Html_Component_Loader
    {
        /**
         * Constructor
         *
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Customizer Preview
         *
         * @since 3.0.0
         */
        public function preview_scripts()
        {
        }
    }
    /**
     * Heading Initial Setup
     *
     * @since 3.0.0
     */
    class Astra_Footer_Html_Component
    {
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
    }
    /**
     * Footer Navigation Menu Initialization
     *
     * @since 3.0.0
     */
    class Astra_Footer_Menu_Component_Loader
    {
        /**
         * Constructor
         *
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Customizer Preview
         *
         * @since 3.0.0
         */
        public function preview_scripts()
        {
        }
    }
    /**
     * Footer Navigation Menu Initial Setup
     *
     * @since 3.0.0
     */
    class Astra_Footer_Menu_Component
    {
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
        /**
         * Secondary navigation markup
         *
         * @since 3.0.0.
         */
        public static function menu_markup()
        {
        }
    }
    /**
     * Primary Footer Initialization
     *
     * @since 3.0.0
     */
    class Astra_Primary_Footer_Component_Loader
    {
        /**
         * Constructor
         *
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Customizer Preview
         *
         * @since 3.0.0
         */
        public function preview_scripts()
        {
        }
    }
    /**
     * Primary Footer Initial Setup
     *
     * @since 3.0.0
     */
    class Astra_Primary_Footer
    {
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
    }
    /**
     * Social Icons Initialization
     *
     * @since 3.0.0
     */
    class Astra_Footer_Social_Icons_Component_Loader
    {
        /**
         * Constructor
         *
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Customizer Preview
         *
         * @since 3.0.0
         */
        public function preview_scripts()
        {
        }
    }
    /**
     * Social Icons Initial Setup
     *
     * @since 3.0.0
     */
    class Astra_Footer_Social_Icons_Component
    {
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
    }
    /**
     * Customizer Initialization
     *
     * @since 3.0.0
     */
    class Astra_Footer_Widget_Component_Loader
    {
        /**
         * Constructor
         *
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Customizer Preview
         *
         * @since 3.0.0
         */
        public function preview_scripts()
        {
        }
    }
    /**
     * Heading Initial Setup
     *
     * @since 3.0.0
     */
    class Astra_Footer_Widget_Component
    {
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
    }
    /**
     * Class Astra_Above_Header_Loader
     *
     * Loads config files.
     *
     * @since 3.0.0
     */
    class Astra_Above_Header_Loader
    {
        /**
         * Constructor
         *
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Customizer Preview
         *
         * @since 3.0.0
         */
        public function preview_scripts()
        {
        }
    }
    /**
     * Above Header Initial Setup
     *
     * @since 3.0.0
     */
    class Astra_Above_Header
    {
        /**
         * Constructor function that initializes required actions and hooks.
         */
        public function __construct()
        {
        }
    }
    /**
     * Customizer Initialization
     *
     * @since 3.0.0
     */
    class Astra_Header_Account_Component_Loader
    {
        /**
         * Constructor
         *
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Customizer Preview
         *
         * @since 3.0.0
         */
        public function preview_scripts()
        {
        }
    }
    /**
     * Heading Initial Setup
     *
     * @since 3.0.0
     */
    class Astra_Header_Account_Component
    {
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
        /**
         * Account navigation markup
         */
        public static function account_menu_markup()
        {
        }
    }
    /**
     * Class Astra_Below_Header_Loader
     *
     * Loads config files.
     *
     * @since 3.0.0
     */
    class Astra_Below_Header_Loader
    {
        /**
         * Constructor
         *
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Customizer Preview
         *
         * @since 3.0.0
         */
        public function preview_scripts()
        {
        }
    }
    /**
     * Below Header Initial Setup
     *
     * @since 3.0.0
     */
    class Astra_Below_Header
    {
        /**
         * Constructor function that initializes required actions and hooks.
         */
        public function __construct()
        {
        }
    }
    /**
     * Customizer Initialization
     *
     * @since 3.0.0
     */
    class Astra_Header_Button_Component_Loader
    {
        /**
         * Constructor
         *
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Add Font Family Callback
         *
         * @return void
         */
        public function add_fonts()
        {
        }
        /**
         * Customizer Preview
         *
         * @since 3.0.0
         */
        public function preview_scripts()
        {
        }
    }
    /**
     * Heading Initial Setup
     *
     * @since 2.1.4
     */
    class Astra_Header_Button_Component
    {
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
    }
    /**
     * Heading Initial Setup
     *
     * @since 3.0.0
     */
    class Astra_Header_Edd_Cart_Component
    {
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
    }
    /**
     * Customizer Initialization
     *
     * @since 3.0.0
     */
    class Astra_Header_Edd_Cart_Loader
    {
        /**
         * Constructor
         *
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Customizer Preview
         *
         * @since 3.0.0
         */
        public function preview_scripts()
        {
        }
    }
    /**
     * Customizer Initialization
     *
     * @since 3.0.0
     */
    class Astra_Header_Html_Component_Loader
    {
        /**
         * Constructor
         *
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Customizer Preview
         *
         * @since 3.0.0
         */
        public function preview_scripts()
        {
        }
    }
    /**
     * Heading Initial Setup
     *
     * @since 3.0.0
     */
    class Astra_Header_Html_Component
    {
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
    }
    /**
     * Customizer Initialization
     *
     * @since 3.0.0
     */
    class Astra_Header_Menu_Component_Loader
    {
        /**
         * Constructor
         *
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Enqueue google fonts.
         *
         * @since 3.0.0
         */
        public function add_fonts()
        {
        }
        /**
         * Customizer Preview
         *
         * @since 3.0.0
         */
        public function preview_scripts()
        {
        }
    }
    /**
     * Heading Initial Setup
     *
     * @since 3.0.0
     */
    class Astra_Header_Menu_Component
    {
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
        /**
         * Secondary navigation markup
         *
         * @param int    $index index.
         * @param string $device device.
         */
        public static function menu_markup($index, $device = 'desktop')
        {
        }
    }
    /**
     * Mobile Navigation Menu Initialization
     *
     * @since 3.0.0
     */
    class Astra_Mobile_Menu_Component_Loader
    {
        /**
         * Constructor
         *
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Customizer Preview
         *
         * @since 3.0.0
         */
        public function preview_scripts()
        {
        }
    }
    /**
     * Header Navigation Menu Initial Setup
     *
     * @since 3.0.0
     */
    class Astra_Mobile_Menu_Component
    {
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
        /**
         * Secondary navigation markup
         *
         * @param string $device Checking where mobile-menu is dropped.
         *
         * @since 3.0.0.
         */
        public static function menu_markup($device = 'mobile')
        {
        }
    }
    /**
     * Class Mobile Trigger Loader.
     *
     * Loads config files.
     *
     * @since 3.0.0
     */
    class Astra_Mobile_Trigger_Loader
    {
        /**
         * Constructor
         *
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Customizer Preview
         *
         * @since 3.0.0
         */
        public function preview_scripts()
        {
        }
    }
    /**
     * Mobile Trigger Initial Setup
     *
     * @since 3.0.0
     */
    class Astra_Mobile_Trigger
    {
        /**
         * Constructor function that initializes required actions and hooks.
         */
        public function __construct()
        {
        }
    }
    /**
     * Class Astra_Off_Canvas_Loader
     *
     * Loads config files.
     *
     * @since 3.0.0
     */
    class Astra_Off_Canvas_Loader
    {
        /**
         * Constructor
         *
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Customizer Preview
         *
         * @since 3.0.0
         */
        public function preview_scripts()
        {
        }
    }
    /**
     * Off Canvas Initial Setup
     *
     * @since 3.0.0
     */
    class Astra_Off_Canvas
    {
        /**
         * Constructor function that initializes required actions and hooks.
         */
        public function __construct()
        {
        }
    }
    /**
     * Customizer Initialization
     *
     * @since 3.0.0
     */
    class Astra_Primary_Header_Loader
    {
        /**
         * Constructor
         *
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Adds custom classes to the array of body classes.
         *
         * @since 1.0.0
         * @param array $classes Classes for the body element.
         * @return array
         */
        public function astra_body_header_classes($classes)
        {
        }
        /**
         * Customizer Preview
         *
         * @since 3.0.0
         */
        public function preview_scripts()
        {
        }
    }
    /**
     * Heading Initial Setup
     *
     * @since 3.0.0
     */
    class Astra_Primary_Header
    {
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
    }
    /**
     * Customizer Initialization
     *
     * @since 3.0.0
     */
    class Astra_Header_Search_Component_Loader
    {
        /**
         * Constructor
         *
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Customizer Preview
         *
         * @since 3.0.0
         */
        public function preview_scripts()
        {
        }
        /**
         * Adding Wrapper for Search Form.
         *
         * @since 3.0.0
         *
         * @param string $search_markup   Search Form Content.
         * @param string $option    Search Form Options.
         * @param string $device    Device Desktop/Tablet/Mobile.
         * @return Search HTML structure created.
         */
        public static function get_search_markup($search_markup, $option = '', $device = '')
        {
        }
    }
    /**
     * Heading Initial Setup
     *
     * @since 3.0.0
     */
    class Astra_Header_Search_Component
    {
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
    }
    /**
     * Customizer Initialization
     *
     * @since 3.0.0
     */
    class Astra_Header_Site_Identity_Component_Loader
    {
        /**
         * Constructor
         *
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Customizer Preview
         *
         * @since 3.0.0
         */
        public function preview_scripts()
        {
        }
    }
    /**
     * Heading Initial Setup
     *
     * @since 3.0.0
     */
    class Astra_Header_Site_Identity_Component
    {
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
    }
    /**
     * Customizer Initialization
     *
     * @since 3.0.0s
     */
    class Astra_Header_Social_Icon_Component_Loader
    {
        /**
         * Constructor
         *
         * @since 3.0.0s
         */
        public function __construct()
        {
        }
        /**
         * Customizer Preview
         *
         * @since 3.0.0s
         */
        public function preview_scripts()
        {
        }
    }
    /**
     * Heading Initial Setup
     *
     * @since 3.0.0
     */
    class Astra_Header_Social_Icon_Component
    {
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
    }
    /**
     * Customizer Initialization
     *
     * @since 3.0.0
     */
    class Astra_Header_Widget_Component_Loader
    {
        /**
         * Constructor
         *
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Customizer Preview
         *
         * @since 3.0.0
         */
        public function preview_scripts()
        {
        }
    }
    /**
     * Heading Initial Setup
     *
     * @since 3.0.0
     */
    class Astra_Header_Widget_Component
    {
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
    }
    /**
     * Heading Initial Setup
     *
     * @since 3.0.0
     */
    class Astra_Header_Woo_Cart_Component
    {
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
    }
    /**
     * Customizer Initialization
     *
     * @since 3.0.0
     */
    class Astra_Header_Woo_Cart_Loader
    {
        /**
         * Constructor
         *
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Customizer Preview
         *
         * @since 3.0.0
         */
        public function preview_scripts()
        {
        }
    }
    /**
     * Astra_After_Setup_Theme initial setup
     */
    class Astra_After_Setup_Theme
    {
        /**
         * Instance
         *
         * @var $instance
         */
        private static $instance;
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Setup theme
         *
         * @since 1.0.0
         */
        public function setup_theme()
        {
        }
        /**
         * Set the $content_width global variable used by WordPress to set image dimennsions.
         *
         * @since 1.5.5
         * @return void
         */
        public function setup_content_width()
        {
        }
        /**
         * Adds a responsive embed wrapper around oEmbed content
         *
         * @param  string $html The oEmbed markup.
         * @param  string $url The URL being embedded.
         * @param  array  $attr An array of attributes.
         *
         * @return string       Updated embed markup.
         */
        public function responsive_oembed_wrapper($html, $url, $attr)
        {
        }
    }
    /**
     * Dynamic CSS
     */
    class Astra_Dynamic_CSS
    {
        /**
         * Return CSS Output
         *
         * @param  string $dynamic_css          Astra Dynamic CSS.
         * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
         * @return string Generated CSS.
         */
        public static function return_output($dynamic_css, $dynamic_css_filtered = '')
        {
        }
        /**
         * Return post meta CSS
         *
         * @param  string $dynamic_css          Astra Dynamic CSS.
         * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
         * @return mixed              Return the CSS.
         */
        public static function return_meta_output($dynamic_css, $dynamic_css_filtered = '')
        {
        }
        /**
         * Conditionally iclude CSS Selectors with anchors in the typography settings.
         *
         * Historically Astra adds Colors/Typography CSS for headings and anchors for headings but this causes irregularities with the expected output.
         * For eg Link color does not work for the links inside headings.
         *
         * If filter `astra_include_achors_in_headings_typography` is set to true or Astra Option `include-headings-in-typography` is set to true, This will return selectors with anchors. Else This will return selectors without anchors.
         *
         * @access Private.
         *
         * @since 1.4.9
         * @param String $selectors_with_achors CSS Selectors with anchors.
         * @param String $selectors_without_achors CSS Selectors withour annchors.
         *
         * @return String CSS Selectors based on the condition of filters.
         */
        private static function conditional_headings_css_selectors($selectors_with_achors, $selectors_without_achors)
        {
        }
        /**
         * Check if CSS selectors in Headings should use anchors.
         *
         * @since 1.4.9
         * @return boolean true if it should include anchors, False if not.
         */
        public static function anchors_in_css_selectors_heading()
        {
        }
        /**
         * Check backwards compatibility CSS for loading submenu below the header needs to be added.
         *
         * @since 1.5.0
         * @return boolean true if CSS should be included, False if not.
         */
        public static function astra_submenu_below_header_fix()
        {
        }
        /**
         * Check backwards compatibility CSS for loading submenu below the header needs to be added.
         *
         * @since 2.1.3
         * @return boolean true if submenu below header fix is to be loaded, False if not.
         */
        public static function astra_submenu_open_below_header_fix()
        {
        }
        /**
         * Check backwards compatibility to not load default CSS for the button styling of Page Builders.
         *
         * @since 2.2.0
         * @return boolean true if button style CSS should be loaded, False if not.
         */
        public static function page_builder_button_style_css()
        {
        }
        /**
         * Elementor Theme Style - Button Text Color compatibility. This should be looked in the future for proper solution.
         *
         * Reference: https://github.com/elementor/elementor/issues/10733
         * Reference: https://github.com/elementor/elementor/issues/10739
         *
         * @since 2.3.3
         *
         * @return mixed
         */
        public static function is_elementor_kit_button_color_set()
        {
        }
        /**
         * Check if Elementor - Disable Default Colors or Disable Default Fonts checked or unchecked.
         *
         * @since  2.3.3
         *
         * @return mixed String if any of the settings are enabled. False if no settings are enabled.
         */
        public static function elementor_default_color_font_setting()
        {
        }
        /**
         * For existing users, do not reflect direct change.
         *
         * @since 3.6.5
         * @return boolean true if WordPress-5.8 compatibility enabled, False if not.
         */
        public static function is_block_editor_support_enabled()
        {
        }
        /**
         * For existing users, do not provide Elementor Default Color Typo settings compatibility by default.
         *
         * @since 2.3.3
         * @return boolean true if elementor default color and typo setting should work with theme, False if not.
         */
        public static function is_elementor_default_color_font_comp()
        {
        }
        /**
         * For existing users, do not load the wide/full width image CSS by default.
         *
         * @since 2.4.4
         * @return boolean false if it is an existing user , true if not.
         */
        public static function gtn_image_group_css_comp()
        {
        }
        /**
         * Do not apply new wide/full Group and Cover block CSS for existing users.
         *
         * @since 2.5.0
         * @return boolean false if it is an existing user , true if not.
         */
        public static function gtn_group_cover_css_comp()
        {
        }
        /**
         * Do not apply new Group, Column and Media & Text block CSS for existing users.
         *
         * @since 2.6.0
         * @return boolean false if it is an existing user , true if not.
         */
        public static function gutenberg_core_blocks_css_comp()
        {
        }
        /**
         * Do not apply new Group, Column and Media & Text block CSS for existing users.
         *
         * CSS for adding spacing|padding support to Gutenberg Media-&-Text Block
         *
         * @since 2.6.1
         * @return boolean false if it is an existing user , true if not.
         */
        public static function gutenberg_media_text_block_css_compat()
        {
        }
        /**
         * Gutenberg pattern compatibility changes.
         *
         * @since 3.3.0
         * @return boolean false if it is an existing user , true if not.
         */
        public static function gutenberg_core_patterns_compat()
        {
        }
        /**
         * Font CSS support for widget-title heading fonts & fonts which are not working in editor.
         *
         * 1. Adding Font-weight support to widget titles.
         * 2. Customizer font CSS not supporting in editor.
         *
         * @since 3.6.0
         * @return boolean false if it is an existing user, true if not.
         */
        public static function support_font_css_to_widget_and_in_editor()
        {
        }
        /**
         * Whether to remove or not following CSS which restricts logo size on responsive devices.
         *
         * @see https://github.com/brainstormforce/astra/commit/d09f63336b73d58c8f8951726edbc90671d7f419
         *
         * @since 3.6.0
         * @return boolean false if it is an existing user, true if not.
         */
        public static function remove_logo_max_width_mobile_static_css()
        {
        }
        /**
         * Remove text-decoration: underline; CSS for builder specific elements to maintain their UI/UX better.
         *
         * 1. UAG : Marketing Button, Info Box CTA, MultiButtons, Tabs.
         * 2. UABB : Button, Slide Box CTA, Flip box CTA, Info Banner, Posts, Info Circle, Call to Action, Subscribe Form.
         *
         * @since 3.6.9
         */
        public static function unset_builder_elements_underline()
        {
        }
        /**
         * Block editor experience improvements css introduced with v4.0.0.
         *
         * @since 4.0.0
         * @return boolean false if it is an existing user , true if not.
         */
        public static function v4_block_editor_compat()
        {
        }
        /**
         * Load sidebar static CSS when it is enabled.
         *
         * @since 3.0.0
         */
        public static function load_sidebar_static_css()
        {
        }
        /**
         * Astra Spectra Gutenberg Compatibility CSS.
         *
         * @since 3.9.4
         * @return boolean false if it is an existing user , true if not.
         */
        public static function spectra_gutenberg_compat_css()
        {
        }
        /**
         * Load static card(EDD/Woo) CSS.
         *
         * @since 3.0.0
         * @return string static css for Woocommerce and EDD card.
         */
        public static function load_cart_static_css()
        {
        }
        /**
         * Check is new structural things are updated.
         *
         * @return bool true|false.
         * @since 4.0.0
         */
        public static function astra_check_default_color_typo()
        {
        }
    }
    /**
     * Global palette class
     */
    class Astra_Global_Palette
    {
        /**
         * Constructor
         *
         * @since 3.7.0
         */
        public function __construct()
        {
        }
        /**
         * Modify color palette from Gutenberg.
         *
         * @since 3.7.0
         * @return void
         */
        public function support_editor_color_palette()
        {
        }
        /**
         * Format color palette data required to pass for Gutenberg palette.
         *
         * @since 3.7.0
         * @param array $global_palette global palette data.
         * @return array
         */
        public function format_global_palette($global_palette)
        {
        }
        /**
         * Get CSS variable prefix used for styling.
         *
         * @since 3.7.0
         * @return string variable prefix
         */
        public static function get_css_variable_prefix()
        {
        }
        /**
         * Localize variables used in the customizer.
         *
         * @since 3.7.0
         * @param array $object localize object.
         * @return array<array-key, mixed> $object localize object.
         */
        public function localize_variables($object)
        {
        }
        /**
         * Default global palette options.
         *
         * @since 3.7.0
         * @return array Palette options.
         */
        public static function get_default_color_palette()
        {
        }
        /**
         * Get labels for palette colors.
         *
         * @since 3.7.0
         * @return array Palette labels.
         */
        public static function get_palette_labels()
        {
        }
        /**
         * Get slugs for palette colors.
         *
         * @since 3.7.0
         * @return array Palette slugs.
         */
        public static function get_palette_slugs()
        {
        }
        /**
         * Include required files.
         *
         * @since 3.7.0
         */
        public function includes()
        {
        }
        /**
         * Generate palette CSS required to display on front end.
         *
         * @since 3.7.0
         * @return array palette style array.
         */
        public static function generate_global_palette_style()
        {
        }
        /**
         * Pass hex value for global palette to process forground color.
         *
         * @since 3.7.0
         * @param string $color hex color / css variable.
         * @return string
         */
        public function get_color_by_palette_variable($color)
        {
        }
        /**
         * Add dynamic CSS for the global border color.
         *
         * @since 3.9.0
         *
         * @param  string $dynamic_css          Astra Dynamic CSS.
         *
         * @return String Generated dynamic CSS for global border.
         */
        public function global_border_compatibility($dynamic_css)
        {
        }
    }
    /**
     * Astra_Loop
     *
     * @since 1.2.7
     */
    class Astra_Loop
    {
        /**
         * Instance
         *
         * @since 1.2.7
         *
         * @access private
         * @var object Class object.
         */
        private static $instance;
        /**
         * Initiator
         *
         * @since 1.2.7
         *
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         *
         * @since 1.2.7
         */
        public function __construct()
        {
        }
        /**
         * Template part none
         *
         * @since 1.2.7
         * @return void
         */
        public function template_parts_none()
        {
        }
        /**
         * Template part 404
         *
         * @since 1.2.7
         * @return void
         */
        public function template_parts_404()
        {
        }
        /**
         * Template part page
         *
         * @since 1.2.7
         * @return void
         */
        public function template_parts_page()
        {
        }
        /**
         * Template part single
         *
         * @since 1.2.7
         * @return void
         */
        public function template_parts_post()
        {
        }
        /**
         * Template part search
         *
         * @since 1.2.7
         * @return void
         */
        public function template_parts_search()
        {
        }
        /**
         * Template part comments
         *
         * @since 1.2.7
         * @return void
         */
        public function template_parts_comments()
        {
        }
        /**
         * Template part default
         *
         * @since 1.2.7
         * @return void
         */
        public function template_parts_default()
        {
        }
        /**
         * Loop Markup for content page
         *
         * @since 1.3.1
         */
        public function loop_markup_page()
        {
        }
        /**
         * Template part loop
         *
         * @param  boolean $is_page Loop outputs different content action for content page and default content.
         *         if is_page is set to true - do_action( 'astra_page_template_parts_content' ); is added
         *         if is_page is false - do_action( 'astra_template_parts_content' ); is added.
         * @since 1.2.7
         * @return void
         */
        public function loop_markup($is_page = \false)
        {
        }
        /**
         * Template part content top
         *
         * @since 1.2.7
         * @return void
         */
        public function template_parts_content_top()
        {
        }
        /**
         * Template part content bottom
         *
         * @since 1.2.7
         * @return void
         */
        public function template_parts_content_bottom()
        {
        }
        /**
         * Add wrapper div 'ast-row' for Astra template part.
         *
         * @since  1.2.7
         * @return void
         */
        public function astra_templat_part_wrap_open()
        {
        }
        /**
         * Add closing wrapper div for 'ast-row' after Astra template part.
         *
         * @since  1.2.7
         * @return void
         */
        public function astra_templat_part_wrap_close()
        {
        }
    }
    /**
     * Astra_Mobile_Header
     *
     * @since 1.4.0
     */
    class Astra_Mobile_Header
    {
        /**
         * Instance
         *
         * @since 1.4.0
         *
         * @access private
         * @var object Class object.
         */
        private static $instance;
        /**
         * Initiator
         *
         * @since 1.4.0
         *
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         *
         * @since 1.4.0
         */
        public function __construct()
        {
        }
        /**
         * Add submenu toggle button used for mobile devices.
         *
         * @since 1.6.9
         *
         * @param string   $item_output The menu item's starting HTML output.
         * @param WP_Post  $item        Menu item data object.
         * @param int      $depth       Depth of menu item. Used for padding.
         * @param stdClass $args        An object of wp_nav_menu() arguments.
         *
         * @return String Menu item's starting markup.
         */
        public function toggle_button($item_output, $item, $depth, $args)
        {
        }
        /**
         * Get Menu Arrow Button Mark up
         *
         * @param string  $item_output The menu item's starting HTML output.
         * @param WP_Post $item        Menu item data object.
         *
         * @since 1.7.2
         * @return string Menu item arrow button markup.
         */
        public function menu_arrow_button_markup($item_output, $item)
        {
        }
        /**
         * Header Cart Icon Class
         *
         * @param array $classes Default argument array.
         *
         * @since 1.4.0
         * @return array;
         */
        public function menu_toggle_classes($classes)
        {
        }
        /**
         * Mobile Header Markup
         *
         * @return void
         */
        public function mobile_header_markup()
        {
        }
        /**
         * Replace logo with Mobile Header logo.
         *
         * @param sting $html Size name.
         * @param int   $blog_id Icon.
         * @since 1.4.0
         * @return string html markup of logo.
         */
        public function astra_mobile_header_custom_logo($html, $blog_id)
        {
        }
        /**
         * Add svg class to mobile logo.
         *
         * @param bool  $is_logo_attachment is attachment is logo image?.
         * @param array $attachment attachment data.
         * @since 2.1.0
         * @return bool return if attachment is mobile logo image.
         */
        public function add_mobile_logo_svg_class($is_logo_attachment, $attachment)
        {
        }
        /**
         * Add Body Classes
         *
         * @param array $classes Body Class Array.
         * @return array
         */
        public function add_body_class($classes)
        {
        }
    }
    /**
     * Class Astra_AMP
     */
    class Astra_AMP
    {
        /**
         * Member Variable
         *
         * @var object instance
         */
        private static $instance;
        /**
         * Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Init Astra Amp Compatibility.
         * This adds required actions and filters only if AMP endpoinnt is detected.
         *
         * @since 1.7.0
         * @return void
         */
        public function astra_amp_init()
        {
        }
        /**
         * Add ID to body to toggleClasses on AMP actions.
         *
         * @since 1.7.0
         * @param String $schema markup returned from theme.
         * @return String
         */
        public function body_id($schema)
        {
        }
        /**
         * Dynamic CSS used for AMP pages.
         * This should be changed to main CSS in next versions, replacing JavaScript based interactions with pure CSS alternatives.
         *
         * @since 1.7.0
         * @param String $compiled_css Dynamic CSS received to  be enqueued on page.
         *
         * @return String Updated dynamic CSS with AMP specific changes.
         */
        public function dynamic_css($compiled_css)
        {
        }
        /**
         * Add AMP attributes to the nav menu wrapper.
         *
         * @since 1.7.0
         * @param Array $attr HTML attributes to be added to the nav menu wrapper.
         *
         * @return Array updated HTML attributes.
         */
        public function nav_menu_wrapper($attr)
        {
        }
        /**
         * Set AMP State for eeach sub menu toggle.
         *
         * @since 1.7.0
         * @param String  $item_output HTML markup for the menu item.
         * @param  WP_Post $item Post object for the navigation menu.
         *
         * @return String HTML MArkup for the menu including the AML State.
         */
        public function toggle_button_markup($item_output, $item)
        {
        }
        /**
         * Add AMP attribites to the toggle button to add `.ast-submenu-expanded` class to parent li.
         *
         * @since 1.7.0
         * @param array  $attr Optional. Extra attributes to merge with defaults.
         * @param string $context    The context, to build filter name.
         * @param array  $args       Optional. Custom data to pass to filter.
         *
         * @return Array updated HTML attributes.
         */
        public function menu_toggle_button($attr, $context, $args)
        {
        }
        /**
         * Add amp states to the dom.
         */
        public function render_amp_states()
        {
        }
        /**
         * Add search slide data attributes.
         *
         * @param string $input the data attrs already existing in the nav.
         *
         * @return string
         */
        public function add_search_slide_toggle_attrs($input)
        {
        }
        /**
         * Add search slide data attributes.
         *
         * @param string $input the data attrs already existing in the nav.
         *
         * @return string
         */
        public function add_search_field_toggle_attrs($input)
        {
        }
        /**
         * Add the nav toggle data attributes.
         *
         * @param string $input the data attrs already existing in nav toggle.
         *
         * @return string
         */
        public function add_nav_toggle_attrs($input)
        {
        }
    }
    /**
     * Astra BB Ultimate Addon Compatibility
     *
     * @since 1.0.0
     */
    class Astra_BB_Ultimate_Addon
    {
        /**
         * Member Variable
         *
         * @var object instance
         */
        private static $instance;
        /**
         * Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Remove UABB Global Setting Option
         */
        public function remove_uabb_global_setting()
        {
        }
        /**
         * Theme Color
         */
        public function theme_color()
        {
        }
        /**
         * Text Color
         */
        public function text_color()
        {
        }
        /**
         * Link Color
         */
        public function link_color()
        {
        }
        /**
         * Link Hover Color
         */
        public function link_hover_color()
        {
        }
        /**
         * Button Font Family
         */
        public function button_font_family()
        {
        }
        /**
         * Button Font Size
         */
        public function button_font_size()
        {
        }
        /**
         * Button Line Height
         */
        public function button_line_height()
        {
        }
        /**
         * Default type : Button Font Size
         *
         * @since 2.2.0
         */
        public function default_type_button_font_size()
        {
        }
        /**
         * Default type : Button Line Height
         *
         * @since 2.2.0
         */
        public function default_type_button_line_height()
        {
        }
        /**
         * Button Letter Spacing
         */
        public function button_letter_spacing()
        {
        }
        /**
         * Default type : Button Letter Spacing
         *
         * @since 2.2.0
         */
        public function default_type_button_letter_spacing()
        {
        }
        /**
         * Button Text Transform
         */
        public function button_text_transform()
        {
        }
        /**
         * Default type : Button Text Transform
         *
         * @since 2.2.0
         */
        public function default_type_button_text_transform()
        {
        }
        /**
         * Button Text Color
         */
        public function button_text_color()
        {
        }
        /**
         * Default type : Button Text Color
         *
         * @since 2.2.0
         */
        public function default_type_button_text_color()
        {
        }
        /**
         * Button Text Hover Color
         */
        public function button_text_hover_color()
        {
        }
        /**
         * Default type : Button Text Hover Color
         *
         * @since 2.2.0
         */
        public function default_type_button_text_hover_color()
        {
        }
        /**
         * Button Background Color
         */
        public function button_bg_color()
        {
        }
        /**
         * Default type : Button Background Color
         *
         * @since 2.2.0
         */
        public function default_type_button_bg_color()
        {
        }
        /**
         * Button Background Color
         */
        public function button_bg_hover_color()
        {
        }
        /**
         * Default type : Button Background Color
         *
         * @since 2.2.0
         */
        public function default_type_button_bg_hover_color()
        {
        }
        /**
         * Button Border Radius
         */
        public function button_border_radius()
        {
        }
        /**
         * Button Padding
         */
        public function button_padding()
        {
        }
        /**
         * Default type : Button Padding
         *
         * @since 2.2.0
         */
        public function default_type_button_padding()
        {
        }
        /**
         * Button Border Width
         */
        public function button_border_width()
        {
        }
        /**
         * Button Border Color
         */
        public function button_border_color()
        {
        }
        /**
         * Button Border Hover Color
         */
        public function button_border_hover_color()
        {
        }
        /**
         * Button Vertical Padding.
         *
         * @deprecated 2.2.0
         */
        public function button_vertical_padding()
        {
        }
        /**
         * Button Horizontal Padding.
         *
         * @deprecated 2.2.0
         */
        public function button_horizontal_padding()
        {
        }
    }
    /**
     * Astra Beaver Builder Compatibility
     *
     * @since 1.0.0
     */
    class Astra_Beaver_Builder
    {
        /**
         * Member Variable
         *
         * @var object instance
         */
        private static $instance;
        /**
         * Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Disable Astra's block editor attr which applied for further block layout CSS.
         *
         * @param bool $flag Flag to enable/disable entry content attr.
         * @param int  $post_id Post ID.
         *
         * @since  3.8.1
         * @return bool true|false
         */
        public function remove_astra_block_editor_attr($flag, $post_id)
        {
        }
        /**
         * Builder Template Content layout set as Full Width / Stretched
         *
         * @since  1.0.13
         * @return void
         */
        public function beaver_builder_default_setting()
        {
        }
        /**
         * Add assets in theme
         *
         * @param array $assets list of theme assets (JS & CSS).
         * @return array List of updated assets.
         * @since 3.5.0
         */
        public function add_styles($assets)
        {
        }
    }
    /**
     * Astra Beaver Themer Compatibility
     *
     * @since 1.0.0
     */
    class Astra_Beaver_Themer
    {
        /**
         * Member Variable
         *
         * @var object instance
         */
        private static $instance;
        /**
         * Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Builder Template Content layout set as Full Width / Stretched
         *
         * @param  string $layout Content Layout.
         * @return string
         * @since  1.0.2
         */
        public function builder_template_content_layout($layout)
        {
        }
        /**
         * Remove theme post's default classes
         *
         * @param  array $classes Post Classes.
         * @return array
         * @since  1.0.2
         */
        public function render_post_class($classes)
        {
        }
        /**
         * Function to add Theme Support
         *
         * @since 1.0.0
         */
        public function header_footer_support()
        {
        }
        /**
         * Function to update Atra header/footer with Beaver template
         *
         * @since 1.0.0
         */
        public function theme_header_footer_render()
        {
        }
        /**
         * Function to Astra theme parts
         *
         * @since 1.0.0
         */
        public function register_part_hooks()
        {
        }
        /**
         * Function to theme before render content
         *
         * @param int $post_id Post ID.
         * @since 1.0.28
         */
        public function builder_before_render_content($post_id)
        {
        }
        /**
         * Function to theme after render content
         *
         * @param int $post_id Post ID.
         * @since 1.0.28
         */
        public function builder_after_render_content($post_id)
        {
        }
    }
    /**
     * Astra BNE Flyout Compatibility
     *
     * @since 1.0.0
     */
    class Astra_BNE_Flyout
    {
        /**
         * Member Variable
         *
         * @var object instance
         */
        private static $instance;
        /**
         * Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Add assets in theme
         *
         * @param array $assets list of theme assets (JS & CSS).
         * @return array List of updated assets.
         * @since 1.0.0
         */
        public function add_styles($assets)
        {
        }
    }
    /**
     * Astra Contact Form 7 Compatibility
     *
     * @since 1.0.0
     */
    class Astra_Contact_Form_7
    {
        /**
         * Member Variable
         *
         * @var object instance
         */
        private static $instance;
        /**
         * Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Add assets in theme
         *
         * @since 1.0.0
         */
        public function add_styles()
        {
        }
    }
    /**
     * Astra Divi Builder
     *
     * @since 1.4.0
     */
    class Astra_Divi_Builder
    {
        /**
         * Member Variable
         *
         * @var object instance
         */
        private static $instance;
        /**
         * Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Add assets in theme
         *
         * @param array $assets list of theme assets (JS & CSS).
         * @return array List of updated assets.
         * @since 1.4.0
         */
        public function add_styles($assets)
        {
        }
    }
}
namespace ElementorPro\Modules\ThemeBuilder\ThemeSupport {
    /**
     * Astra Elementor Compatibility
     *
     * @since 1.2.7
     */
    class Astra_Elementor_Pro
    {
        /**
         * Member Variable
         *
         * @var object instance
         */
        private static $instance;
        /**
         * Initiator
         *
         * @since 1.2.7
         * @return object Class object.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         *
         * @since 1.2.7
         */
        public function __construct()
        {
        }
        /**
         * Check if Elementor Editor is open.
         *
         * @since  3.8.0
         *
         * @return boolean true iF Elementor Editor is loaded, false If Elementor Editor is not loaded.
         */
        public function is_elementor_editor()
        {
        }
        /**
         * Remove actions of WooCommerce for shipping form fields, as it needs only in 'col-1'.
         *
         * Case: Theme's 'woocommerce_checkout' action conflicting with Elementor Pro's checkout widget. On frontend billing + shipping details wrapper comes under col-1 div because of theme's above action. But in Elementor editor, billing + shipping wrappers comes in two different cols, i.e. col-1 & col-2. Due to this, styling looks inappropriate in editor only.
         *
         * @since 3.8.0
         * @return void
         */
        public function update_woocommerce_checkout()
        {
        }
        /**
         * Compatibility CSS for Elementor Pro's WooCommerce widgets releasing in their v3.6.0
         *
         * @param  string $css_output CSS stylesheet.
         * @return string $css_output CSS stylesheet.
         *
         * @since  3.7.5
         */
        public function elementor_wc_widgets_compatibility_styles($css_output)
        {
        }
        /**
         * Register Locations
         *
         * @since 1.2.7
         * @param object $manager Location manager.
         * @return void
         */
        public function register_locations($manager)
        {
        }
        /**
         * Template Parts Support
         *
         * @since 1.2.7
         * @return void
         */
        public function do_template_parts()
        {
        }
        /**
         * Override 404 page
         *
         * @since 1.2.7
         * @return void
         */
        public function do_template_part_404()
        {
        }
        /**
         * Override sidebar, title etc with post meta
         *
         * @since 1.2.7
         * @return void
         */
        public function override_meta()
        {
        }
        /**
         * Override sidebar, title etc with post meta
         *
         * @since 1.2.7
         * @param  integer $post_id  Post ID.
         * @return void
         */
        public function override_with_post_meta($post_id = 0)
        {
        }
        /**
         * Header Support
         *
         * @since 1.2.7
         * @return void
         */
        public function do_header()
        {
        }
        /**
         * Footer Support
         *
         * @since 1.2.7
         * @return void
         */
        public function do_footer()
        {
        }
        /**
         * Remove theme post's default classes when Elementor's template builder is activated.
         *
         * @param  array $classes Post Classes.
         * @return array
         * @since  1.4.9
         */
        public function render_post_class($classes)
        {
        }
    }
}
namespace Elementor {
    /**
     * Astra Elementor Compatibility
     *
     * @since 1.0.0
     */
    class Astra_Elementor
    {
        /**
         * Member Variable
         *
         * @var object instance
         */
        private static $instance;
        /**
         * Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Hide elementor title.
         *
         * @param array $classes Array of elementor edit mode check.
         *
         * @since 4.1.0
         */
        function astra_entry_header_class_custom($classes)
        {
        }
        /**
         * Compatibility CSS for Elementor Headings after Elementor-v2.9.9
         *
         * In v2.9.9 Elementor has removed [ .elementor-widget-heading .elementor-heading-title { margin: 0 } ] this CSS.
         * Again in v2.9.10 Elementor added this as .elementor-heading-title { margin: 0 } but still our [ .entry-content heading { margin-bottom: 20px } ] CSS overrding their fix.
         *
         * That's why adding this CSS fix to headings by setting bottom-margin to 0.
         *
         * @param  string $dynamic_css Astra Dynamic CSS.
         * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
         * @return string $dynamic_css Generated CSS.
         *
         * @since  2.4.5
         */
        public function enqueue_elementor_compatibility_styles($dynamic_css, $dynamic_css_filtered = '')
        {
        }
        /**
         * Elementor Content layout set as Page Builder
         *
         * @return void
         * @since  1.0.2
         */
        public function elementor_default_setting()
        {
        }
        /**
         * Add z-index CSS for elementor's drag drop
         *
         * @return void
         * @since  1.4.0
         */
        public function elementor_overlay_zindex()
        {
        }
        /**
         * Check is elementor activated.
         *
         * @param int $id Post/Page Id.
         * @return boolean
         */
        public function is_elementor_activated($id)
        {
        }
        /**
         * Check if Elementor Editor is open.
         *
         * @since  1.2.7
         *
         * @return boolean True IF Elementor Editor is loaded, False If Elementor Editor is not loaded.
         */
        private function is_elementor_editor()
        {
        }
        /**
         * Display theme global colors to Elementor Global colors
         *
         * @since 3.7.0
         * @param object          $response rest request response.
         * @param array           $handler Route handler used for the request.
         * @param WP_REST_Request $request Request used to generate the response.
         * @return object
         */
        public function elementor_add_theme_colors($response, $handler, $request)
        {
        }
        /**
         * Display global paltte colors on Elementor front end Page.
         *
         * @since 3.7.0
         * @param object          $response rest request response.
         * @param array           $handler Route handler used for the request.
         * @param WP_REST_Request $request Request used to generate the response.
         * @return object
         */
        public function display_global_colors_front_end($response, $handler, $request)
        {
        }
        /**
         * Generate CSS variable style for Elementor.
         *
         * @since 3.7.0
         * @param string $dynamic_css Dynamic CSS.
         * @return object
         */
        public function generate_global_elementor_style($dynamic_css)
        {
        }
        /**
         * Load style inside Elementor editor.
         *
         * @since 3.7.0
         * @return void
         */
        public function elementor_add_scripts()
        {
        }
    }
}
namespace {
    /**
     * Astra Gravity Forms
     *
     * @since 1.0.0
     */
    class Astra_Gravity_Forms
    {
        /**
         * Member Variable
         *
         * @var object instance
         */
        private static $instance;
        /**
         * Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Add assets in theme
         *
         * @since 1.0.0
         */
        public function add_styles()
        {
        }
    }
    /**
     * Gutenberg Compatibility File.
     *
     * @since 3.7.1
     * @package Astra
     */
    /**
     * Astra Gutenberg Compatibility
     *
     * @since 3.7.1
     */
    class Astra_Gutenberg
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Check if blocks has been used on the layout. Adding it for making moder compatibility CSS target specific.
         *
         * @since 3.8.0
         * @return void
         */
        public function is_layout_with_blocks()
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function add_ast_block_container($attr)
        {
        }
        /**
         * Add Group block inner container when theme.json is added
         * to avoid the group block width from changing to full width.
         *
         * @since 3.7.1
         * @access public
         *
         * @param string $block_content Rendered block content.
         * @param array  $block         Block object.
         *
         * @return string Filtered block content.
         */
        public function restore_group_inner_container($block_content, $block)
        {
        }
        /**
         * Add Group block custom class when "Inherit default layout" toggle enabled.
         *
         * @since 3.8.3
         * @access public
         *
         * @param string $block_content Rendered block content.
         * @param array  $block         Block object.
         *
         * @return string Filtered block content.
         */
        public function add_inherit_width_group_class($block_content, $block)
        {
        }
        /**
         * Update the block content with inner div.
         *
         * @since 3.7.1
         * @access public
         *
         * @param mixed $matches block content.
         *
         * @return string New block content.
         */
        public function group_block_replace_regex($matches)
        {
        }
    }
    /**
     * Astra Jetpack Compatibility
     *
     * @since 1.0.0
     */
    class Astra_Jetpack
    {
        /**
         * Member Variable
         *
         * @var object instance
         */
        private static $instance;
        /**
         * Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Add theme support for Infinite Scroll.
         * See: https://jetpack.me/support/infinite-scroll/
         */
        public function jetpack_setup()
        {
        }
        // end function jetpack_setup
        /**
         * Custom render function for Infinite Scroll.
         */
        public function infinite_scroll_render()
        {
        }
        // end function infinite_scroll_render
    }
    /**
     * Astra Site Origin Compatibility
     *
     * @since 1.0.0
     */
    class Astra_Site_Origin
    {
        /**
         * Member Variable
         *
         * @var object instance
         */
        private static $instance;
        /**
         * Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Add assets in theme
         *
         * @param array $assets list of theme assets (JS & CSS).
         * @return array List of updated assets.
         * @since 1.0.0
         */
        public function add_styles($assets)
        {
        }
    }
    /**
     * Starter Content Compatibility.
     *
     * @since 4.0.0
     * @package Astra
     */
    /**
     * Class Astre_Starter_Content
     */
    class Astra_Starter_Content
    {
        const HOME_SLUG = 'home';
        const ABOUT_SLUG = '#about';
        const SERVICES_SLUG = '#services';
        const REVIEWS_SLUG = '#reviews';
        const WHY_US_SLUG = '#whyus';
        const CONTACT_SLUG = '#contact';
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Load default starter meta.
         *
         * @since 4.0.2
         * @param mixed  $value Value.
         * @param int    $post_id Post id.
         * @param string $meta_key Meta key.
         *
         * @return string Meta value.
         */
        public function starter_meta($value, $post_id, $meta_key)
        {
        }
        /**
         * Register listener to insert post.
         *
         * @since 4.0.0
         * @param int      $post_ID Post Id.
         * @param \WP_Post $post Post object.
         * @param bool     $update Is update.
         */
        public function register_listener($post_ID, $post, $update)
        {
        }
        /**
         *  Get customizer json
         *
         * @since 4.0.0
         *  @return mixed value.
         */
        public function get_customizer_json()
        {
        }
        /**
         *  Save Astra customizer settings into database.
         *
         * @since 4.0.0
         */
        public function save_astra_settings()
        {
        }
        /**
         * Load default astra settings.
         *
         * @since 4.0.0
         * @param mixed $defaults defaults.
         * @return mixed value.
         */
        public function theme_defaults($defaults)
        {
        }
        /**
         * Load default color palettes.
         *
         * @since 4.0.0
         * @param mixed $defaults defaults.
         * @return mixed value.
         */
        public function theme_color_palettes_defaults($defaults)
        {
        }
        /**
         * Return starter content definition.
         *
         * @return mixed|void
         * @since 4.0.0
         */
        public function get()
        {
        }
    }
    /**
     * Astra Ubermenu Compatibility
     *
     * @since 1.0.0
     */
    class Astra_Ubermeu
    {
        /**
         * Member Variable
         *
         * @var object instance
         */
        private static $instance;
        /**
         * Initiator
         *
         * @since  1.1.7
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         *
         * @since  1.1.7
         */
        public function __construct()
        {
        }
        /**
         * Disable the Mobile Menu toggles from Astra if Uber Menu is used.
         *
         * @since  1.1.7
         * @param  bool $status Status if the mobile menu toggels are enaled or disaled.
         * @return bool         False If ubermenu is configured on this location. Unchanged if it is not configured.
         */
        public function disable_primary_menu_toggle($status)
        {
        }
    }
    /**
     * Astra Visual Composer Compatibility
     *
     * @since 1.0.0
     */
    class Astra_Visual_Composer
    {
        /**
         * Member Variable
         *
         * @var object instance
         */
        private static $instance;
        /**
         * Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * VC Updated meta settings
         *
         * @since 1.0.13
         * @param int $id Post id.
         * @return void
         */
        public function vc_update_meta_setting($id)
        {
        }
        /**
         * Set frontend default setting.
         *
         * @since 1.0.13
         * @return void
         */
        public function vc_frontend_default_setting()
        {
        }
        /**
         * Set default setting.
         *
         * @since 1.0.13
         * @return void
         */
        public function vc_default_setting()
        {
        }
        /**
         * Add assets in theme
         *
         * @param array $assets list of theme assets (JS & CSS).
         * @return array List of updated assets.
         * @since 3.5.0
         */
        public function add_styles($assets)
        {
        }
    }
    /**
     * Astra Web_Stories Compatibility
     *
     * @since 3.2.0
     */
    class Astra_Web_Stories
    {
        /**
         * Constructor
         *
         * @since 3.2.0
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Add theme support for Web Stories.
         *
         * @since 3.2.0
         * @return void
         */
        public function web_stories_setup()
        {
        }
        /**
         * Custom render function for Web Stories Embedding.
         *
         * @since 3.2.0
         * @return void
         */
        public function web_stories_embed()
        {
        }
        /**
         * Add dynamic CSS for the webstories.
         *
         * @since 3.2.0
         *
         * @param  string $dynamic_css          Astra Dynamic CSS.
         * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
         *
         * @return String Generated dynamic CSS for Heading Colors.
         */
        public function web_stories_css($dynamic_css, $dynamic_css_filtered = '')
        {
        }
    }
    /**
     * Yoast SEO Compatibility File.
     *
     * @package Astra
     */
    /**
     * Astra Yoast SEO Compatibility
     *
     * @since 2.1.2
     */
    class Astra_Yoast_SEO
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Exclude One Content Type From Yoast SEO Sitemap
         *
         * @param  string $value value.
         * @param  string $post_type Post Type.
         * @since 2.1.2
         */
        public function sitemap_exclude_post_type($value, $post_type)
        {
        }
    }
    /**
     * Astra Easy Digital Downloads Compatibility
     *
     * @since 1.5.5
     */
    class Astra_Edd
    {
        /**
         * Member Variable
         *
         * @var object instance
         */
        private static $instance;
        /**
         * Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Header Cart Extra Icons markup
         *
         * @return void;
         */
        public function header_cart_icon_markup()
        {
        }
        /**
         * Header Cart Icon Class
         *
         * @param array $classes Default argument array.
         *
         * @return array;
         */
        public function header_cart_icon_class($classes)
        {
        }
        /**
         * Disable EDD style only for the first time
         *
         * @return void
         */
        public function edd_set_defaults_initialization()
        {
        }
        /**
         * Single Product Navigation
         *
         * @param array $args single products navigation arguments.
         *
         * @return array $args single products navigation arguments.
         */
        public function edd_single_post_navigation($args)
        {
        }
        /**
         * EDD Initialization
         *
         * @return void
         */
        public function edd_initialization()
        {
        }
        /**
         * Add wrapper for edd archive pages
         *
         * @return void
         */
        public function astra_edd_templat_part_wrap_open()
        {
        }
        /**
         * Add end of wrapper for edd archive pages
         */
        public function astra_edd_templat_part_wrap_close()
        {
        }
        /**
         * Edd Single Product template
         */
        public function edd_single_template()
        {
        }
        /**
         * Add Cart icon markup
         *
         * @param Array $options header options array.
         *
         * @return Array header options array.
         * @since 1.5.5
         */
        public function header_section_elements($options)
        {
        }
        /**
         * Add wrapper to the edd archive content template
         *
         * @return void
         */
        public function edd_content_loop()
        {
        }
        /**
         * Remove theme post's default classes when EDD archive.
         *
         * @param  array $classes Post Classes.
         * @return array
         * @since  1.5.5
         */
        public function render_post_class($classes)
        {
        }
        /**
         * Add Cart icon markup
         *
         * @param String $output Markup.
         * @param String $section Section name.
         * @param String $section_type Section selected option.
         * @return Markup String.
         *
         * @since 1.5.5
         */
        public function astra_header_cart($output, $section, $section_type)
        {
        }
        /**
         * Easy Digital DOwnloads mini cart markup markup
         *
         * @since 1.5.5
         * @return html
         */
        public function edd_mini_cart_markup()
        {
        }
        /**
         * Cart Link
         * Displayed a link to the cart including the number of items present and the cart total
         *
         * @return void
         * @since  1.5.5
         */
        public function astra_get_edd_cart()
        {
        }
        /**
         * Add assets in theme
         *
         * @param array $assets list of theme assets (JS & CSS).
         * @return array List of updated assets.
         * @since 1.5.5
         */
        public function add_styles($assets)
        {
        }
        /**
         * Add inline style
         *
         * @since 1.5.5
         */
        public function add_inline_scripts()
        {
        }
        /**
         * Dynamic CSS
         *
         * @param  string $dynamic_css          Astra Dynamic CSS.
         * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
         * @since 1.5.5
         * @return string $dynamic_css
         */
        public function add_inline_styles($dynamic_css, $dynamic_css_filtered = '')
        {
        }
        /**
         * Theme Defaults.
         *
         * @param array $defaults Array of options value.
         * @return array
         */
        public function theme_defaults($defaults)
        {
        }
        /**
         * Add products item class to the body
         *
         * @param Array $classes product classes.
         *
         * @return array.
         */
        public function edd_products_item_class($classes = '')
        {
        }
        /**
         * Add class on single product page
         *
         * @param Array $classes product classes.
         *
         * @return array.
         */
        public function edd_single_product_class($classes)
        {
        }
        /**
         * Store widgets init.
         */
        public function store_widgets_init()
        {
        }
        /**
         * Assign shop sidebar for store page.
         *
         * @param String $sidebar Sidebar.
         *
         * @return String $sidebar Sidebar.
         */
        public function replace_store_sidebar($sidebar)
        {
        }
        /**
         * Easy Digital Downloads Container
         *
         * @param String $sidebar_layout Layout type.
         *
         * @return String $sidebar_layout Layout type.
         */
        public function store_sidebar_layout($sidebar_layout)
        {
        }
        /**
         * Easy Digital Downloads Container
         *
         * @param String $layout Layout type.
         *
         * @return String $layout Layout type.
         */
        public function store_content_layout($layout)
        {
        }
        /**
         * Register Customizer sections and panel for Easy Digital Downloads.
         *
         * @since 1.5.5
         * @param WP_Customize_Manager $wp_customize Theme Customizer object.
         */
        public function customize_register($wp_customize)
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     */
    class Astra_Customizer_Register_Edd_Section extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Panels and Sections for Customizer.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.5.5
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     */
    class Astra_Edd_Container_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Astra-Easy Digital Downloads Shop Container Settings.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.5.5
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     */
    class Astra_Edd_Sidebar_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Astra Easy Digital Downloads Sidebar Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.5.5
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     */
    class Astra_Edd_Archive_Layout_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Astra-Easy Digital Downloads Shop Layout Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.5.5
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     */
    class Astra_Edd_Single_Product_Layout_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Astra-Easy Digital Downloads Shop Cart Layout Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.5.5
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Astra LearnDash Compatibility
     *
     * @since 1.3.0
     */
    class Astra_LearnDash
    {
        /**
         * Member Variable
         *
         * @var object instance
         */
        private static $instance;
        /**
         * Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Enqueue styles
         *
         * @param  String $dynamic_css          Astra Dynamic CSS.
         * @param  String $dynamic_css_filtered Astra Dynamic CSS Filters.
         * @since 1.3.0
         * @return String Dynamic CSS.
         */
        public function add_dynamic_styles($dynamic_css, $dynamic_css_filtered = '')
        {
        }
        /**
         * Register Customizer sections and panel for learndash.
         *
         * @since 1.3.0
         * @param WP_Customize_Manager $wp_customize Theme Customizer object.
         */
        public function customize_register($wp_customize)
        {
        }
        /**
         * Theme Defaults.
         *
         * @since 1.3.0
         * @param array $defaults Array of options value.
         * @return array
         */
        public function theme_defaults($defaults)
        {
        }
        /**
         * Add assets in theme
         *
         * @since 1.3.0
         * @param array $assets list of theme assets (JS & CSS).
         * @return array List of updated assets.
         */
        public function add_styles($assets)
        {
        }
        /**
         * LeanDash Sidebar
         *
         * @since 1.3.0
         * @param string $layout Layout type.
         * @return string $layout Layout type.
         */
        public function sidebar_layout($layout)
        {
        }
        /**
         * LeanDash Container
         *
         * @since 1.3.0
         * @param string $layout Layout type.
         * @return string $layout Layout type.
         */
        public function content_layout($layout)
        {
        }
        /**
         * LearnDash Static CSS.
         *
         * @since 3.3.0
         * @return string
         */
        public static function ld_static_css()
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     */
    class Astra_Customizer_Register_Learndash_Section extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Panels and Sections for Customizer.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.2.0
         * @since 1.4.6 Chnaged to using Astra_Customizer API
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     */
    class Astra_Learndash_Container_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register LearnDash Container settings.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     */
    class Astra_Learndash_Sidebar_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register LearnDash Sidebar settings.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     */
    class Astra_Learndash_General_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register LearnDash General Layout settings.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Astra Lifter LMS Compatibility
     *
     * @since 1.2.0
     */
    class Astra_LifterLMS
    {
        /**
         * Member Variable
         *
         * @var object instance
         */
        private static $instance;
        /**
         * Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Remove LifterLMS Default actions
         *
         * @since 1.2.0
         */
        public function lifterlms_init()
        {
        }
        /**
         * Register Customizer sections and panel for lifterlms
         *
         * @since 1.2.0
         * @param WP_Customize_Manager $wp_customize Theme Customizer object.
         */
        public function customize_register($wp_customize)
        {
        }
        /**
         * Theme Defaults.
         *
         * @since 1.2.0
         * @param array $defaults Array of options value.
         * @return array
         */
        public function theme_defaults($defaults)
        {
        }
        /**
         * This function handles the HTML output of the reviews and review form.
         * If the option is enabled, the review form will be output,
         * if not, nothing will happen. This function also checks to
         * see if a user is allowed to review more than once.
         *
         * @since 1.2.0
         */
        public function single_reviews()
        {
        }
        /**
         * LLMS Grid.
         *
         * @since 1.2.0
         * @param  number $grid Number of grid for course.
         * @return number
         */
        public function course_grid($grid)
        {
        }
        /**
         * LLMS Resposive grid class.
         *
         * @since 1.2.0
         * @param  array $classes Classes.
         * @return array
         */
        public function course_responsive_grid($classes)
        {
        }
        /**
         * Enqueue styles
         *
         * @since 1.2.0
         * @return void
         */
        public function add_dynamic_styles()
        {
        }
        /**
         * Add start of wrapper
         *
         * @since 1.2.0
         * @return void
         */
        public function before_main_content_start()
        {
        }
        /**
         * Add end of wrapper
         *
         * @since 1.2.0
         * @return void
         */
        public function before_main_content_end()
        {
        }
        /**
         * Display LifterLMS Course and Lesson sidebars
         * on courses and lessons in place of the sidebar returned by
         * this function
         *
         * @since 1.2.0
         * @param    string $id    default sidebar id (an empty string).
         * @return   string
         */
        public function add_sidebar($id)
        {
        }
        /**
         * Declare explicit theme support for LifterLMS course and lesson sidebars
         *
         * @since 1.2.0
         * @return   void
         */
        public function add_theme_support()
        {
        }
        /**
         * Add assets in theme
         *
         * @since 1.2.0
         * @param array $assets list of theme assets (JS & CSS).
         * @return array List of updated assets.
         */
        public function add_styles($assets)
        {
        }
        /**
         * LifterLMS Sidebar
         *
         * @since 1.2.0
         * @param string $layout Layout type.
         * @return string $layout Layout type.
         */
        public function sidebar_layout($layout)
        {
        }
        /**
         * LifterLMS Container
         *
         * @since 1.2.0
         * @param string $layout Layout type.
         * @return string $layout Layout type.
         */
        public function content_layout($layout)
        {
        }
        /**
         * Register theme postmeta fields with the LifterLMS Builder
         *
         * @since 1.3.3
         * @param string $default_fields Default custom field definitions.
         * @return string $default_fields Updated custom field definitions.
         */
        public function register_builder_fields($default_fields)
        {
        }
        /**
         * Llms single lesson static CSS move to dynamic to load conditionally.
         *
         * @since 3.3.0
         * @return string
         */
        public function llms_single_lesson_css()
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     */
    class Astra_Liferlms_Section_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register LearnDash Container settings.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     *
     * @since 1.4.3
     */
    class Astra_Lifter_Container_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register LifterLMS Container Settings.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     */
    class Astra_Lifter_Sidebar_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Astra-LifterLMS Sidebar Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     */
    class Astra_Lifter_General_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Astra-LifterLMS General Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Astra WooCommerce Compatibility
     *
     * @since 1.0.0
     */
    class Astra_Woocommerce
    {
        /**
         * Member Variable
         *
         * @var object instance
         */
        private static $instance;
        /**
         * Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Add active filter widget class when "chip" toggle enabled.
         *
         * @since 3.9.4
         * @access public
         *
         * @param string $block_content Rendered block content.
         * @param array  $block         Block object.
         *
         * @return string Active filter block content.
         */
        public function add_active_filter_widget_class($block_content, $block)
        {
        }
        /**
         * As WooCommerce-Astra pro options moved to theme, decide here to load from theme's end after 3.9.2 version.
         *
         * @since 3.9.2
         * @return bool true|false.
         */
        public static function load_theme_side_woocommerce_strcture()
        {
        }
        /**
         * Post Class
         *
         * @param array $classes Default argument array.
         * @return array
         */
        public function post_class($classes)
        {
        }
        /**
         * Modern Design Add to cart Markup
         *
         * @since 3.9.2
         * @return mixed HTML markup.
         */
        public function modern_add_to_cart()
        {
        }
        /**
         * Modern shop page's triggers on product image.
         *
         * @since 3.9.2
         */
        public function add_modern_triggers_on_image()
        {
        }
        /**
         * Astra Sale flash markup.
         *
         * @param string $sale_notification sale bubble type.
         * @param string $product Product.
         * @since 3.9.2
         * @return mixed HTML markup.
         */
        public function get_sale_flash_markup($sale_notification, $product)
        {
        }
        /**
         * Sale bubble flash
         *
         * @param  mixed  $markup  HTML markup of the the sale bubble / flash.
         * @param  string $post Post.
         * @param  string $product Product.
         * @since 3.9.2
         * @return string bubble markup.
         */
        public function sale_flash($markup, $post, $product)
        {
        }
        /**
         * Change cart close icon.
         *
         * @since 3.9.0
         *
         * @param  string $string Close button html.
         *
         * @return string $string Close button html.
         */
        public function change_cart_close_icon($string)
        {
        }
        /**
         * Dynamic Store widgets.
         */
        public function store_widgets_dynamic()
        {
        }
        /**
         * Update WooCommerce store notice. Extending this function to add custom data-attr as per Astra's configuration.
         *
         * @since 3.9.0
         *
         * @param  string $notice Store notice markup.
         * @return string $notice Store notice markup.
         */
        public function astra_woocommerce_update_store_notice_atts($notice)
        {
        }
        /**
         * Adds shipping text after price.
         *
         * @since 3.9.0
         */
        public function woocommerce_shipping_text()
        {
        }
        /**
         * Dynamic CSS for store notice config.
         *
         * @since 3.9.0
         *
         * @param  string $dynamic_css          Astra Dynamic CSS.
         * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
         *
         * @return string $dynamic_css Generated dynamic CSS for WooCommerce store.
         */
        public function astra_woocommerce_store_dynamic_css($dynamic_css, $dynamic_css_filtered = '')
        {
        }
        /**
         * Header Cart icon
         *
         * @param  string $cart_total_label_position  Cart total label position.
         * @param  string $cart_label_markup          Cart label markup.
         * @param  string $cart_info_markup           Cart info markup.
         * @param  string $cart_icon                  Cart icon.
         * @return void
         */
        public function svg_cart_icon($cart_total_label_position, $cart_label_markup, $cart_info_markup, $cart_icon)
        {
        }
        /**
         * Header Cart Extra Icons markup
         *
         * @return void;
         */
        public function header_cart_icon_markup()
        {
        }
        /**
         * Header Cart Icon Class
         *
         * @param array $classes Default argument array.
         *
         * @return array;
         */
        public function header_cart_icon_class($classes)
        {
        }
        /**
         * Remove body schema when using WooCommerce template.
         * WooCommerce adds it's own product schema hence schema data from Astra should be disabled here.
         *
         * @since 1.8.0
         * @param String $schema Schema markup.
         * @return String
         */
        public function remove_body_schema($schema)
        {
        }
        /**
         * Rating Markup
         *
         * @since 1.2.2
         * @param  string $html  Rating Markup.
         * @param  float  $rating Rating being shown.
         * @param  int    $count  Total number of ratings.
         * @return string
         */
        public function rating_markup($html, $rating, $count)
        {
        }
        /**
         * Cart Page Upselles products.
         *
         * @return void
         */
        public function cart_page_upselles()
        {
        }
        /**
         * Subcategory Count Markup
         *
         * @param  array $styles  Css files.
         *
         * @return array
         */
        public function woo_filter_style($styles)
        {
        }
        /**
         * Subcategory Count Markup
         *
         * @param  mixed  $content  Count Markup.
         * @param  object $category Object of Category.
         * @return mixed
         */
        public function subcategory_count_markup($content, $category)
        {
        }
        /**
         * Product Flip Image
         */
        public function product_flip_image()
        {
        }
        /**
         * Theme Defaults.
         *
         * @param array $defaults Array of options value.
         * @return array
         */
        public function theme_defaults($defaults)
        {
        }
        /**
         * Update Shop page grid
         *
         * @param  int $col Shop Column.
         * @return int
         */
        public function shop_columns($col)
        {
        }
        /**
         * Check if the current page is a Product Subcategory page or not.
         *
         * @param integer $category_id Current page Category ID.
         * @return boolean
         */
        public function astra_woo_is_subcategory($category_id = \null)
        {
        }
        /**
         * Update Shop page grid
         *
         * @return int
         */
        public function shop_no_of_products()
        {
        }
        /**
         * Add products item class on shop page
         *
         * @param Array $classes product classes.
         *
         * @return array.
         */
        public function shop_page_products_item_class($classes = '')
        {
        }
        /**
         * Get grid columns for either Archive|Single product.
         * Introducing this function to reduce lot of CSS we write for 'grid-template-columns' for every count (till 6).
         *
         * @param string $type - WooCommerce page type Archive/Single.
         * @param string $device - Device specific grid option.
         * @param int    $default - Default grid count (fallback basically).
         *
         * @return int grid count.
         * @since 3.4.3
         */
        public function get_grid_column_count($type = 'archive', $device = 'desktop', $default = 2)
        {
        }
        /**
         * Add class on single product page
         *
         * @param Array $classes product classes.
         *
         * @return array.
         */
        public function single_product_class($classes)
        {
        }
        /**
         * Update woocommerce related product numbers
         *
         * @param  array $args Related products array.
         * @return array
         */
        public function related_products_args($args)
        {
        }
        /**
         * Setup theme
         *
         * @since 1.0.3
         */
        public function setup_theme()
        {
        }
        /**
         * Store widgets init.
         */
        public function store_widgets_init()
        {
        }
        /**
         * Assign shop sidebar for store page.
         *
         * @param String $sidebar Sidebar.
         *
         * @return String $sidebar Sidebar.
         */
        public function replace_store_sidebar($sidebar)
        {
        }
        /**
         * WooCommerce Container
         *
         * @param String $sidebar_layout Layout type.
         *
         * @return String $sidebar_layout Layout type.
         */
        public function store_sidebar_layout($sidebar_layout)
        {
        }
        /**
         * WooCommerce Container
         *
         * @param String $layout Layout type.
         *
         * @return String $layout Layout type.
         */
        public function store_content_layout($layout)
        {
        }
        /**
         * Shop Page Meta
         *
         * @return void
         */
        public function shop_meta_option()
        {
        }
        /**
         * Shop customization.
         *
         * @return void
         */
        public function shop_customization()
        {
        }
        /**
         * Checkout customization.
         *
         * @return void
         */
        public function woocommerce_checkout()
        {
        }
        /**
         * Single product customization.
         *
         * @return void
         */
        public function single_product_customization()
        {
        }
        /**
         * Remove Woo-Commerce Default actions
         */
        public function woocommerce_init()
        {
        }
        /**
         * Add start of wrapper
         */
        public function before_main_content_start()
        {
        }
        /**
         * Add end of wrapper
         */
        public function before_main_content_end()
        {
        }
        /**
         * Enqueue styles
         *
         * @since 1.0.31
         */
        public function add_styles()
        {
        }
        /**
         * Shop summary box wrapper alignment.
         *
         * @since 3.9.2
         * @return string
         */
        public function astra_shop_summary_box_alignment()
        {
        }
        /**
         * Register Customizer sections and panel for woocommerce
         *
         * @since 1.0.0
         * @param WP_Customize_Manager $wp_customize Theme Customizer object.
         */
        public function customize_register($wp_customize)
        {
        }
        /**
         * Add Cart icon markup
         *
         * @param String $output Markup.
         * @param String $section Section name.
         * @param String $section_type Section selected option.
         * @return Markup String.
         *
         * @since 1.0.0
         */
        public function astra_header_cart($output, $section, $section_type)
        {
        }
        /**
         * Woocommerce mini cart markup markup
         *
         * @since 1.2.2
         * @return html
         */
        public function woo_mini_cart_markup()
        {
        }
        /**
         * Add Cart icon markup
         *
         * @param Array $options header options array.
         *
         * @return Array header options array.
         * @since 1.0.0
         */
        public function header_section_elements($options)
        {
        }
        /**
         * Cart Link
         * Displayed a link to the cart including the number of items present and the cart total
         *
         * @return void
         * @since  1.0.0
         */
        public function astra_get_cart_link()
        {
        }
        /**
         * Cart Fragments
         * Ensure cart contents update when products are added to the cart via AJAX
         *
         * @param  array $fragments Fragments to refresh via AJAX.
         * @return array            Fragments to refresh via AJAX
         */
        public function cart_link_fragment($fragments)
        {
        }
        /**
         * Add shopping CTA in cart flyout.
         *
         * @since 3.9.0
         */
        public function astra_update_flyout_cart_layout()
        {
        }
        /**
         * Woocommerce Cart button html
         *
         * @since 3.9.0
         * @return void
         */
        public function woocommerce_proceed_to_checkout_button_html()
        {
        }
        /**
         * Woocommerce Cart button text
         *
         * @since 3.9.0
         * @return void
         */
        public function woocommerce_proceed_to_checkout_button()
        {
        }
        /**
         * Update the "Customize" link to the Toolbar.
         *
         * @since 3.9.2
         *
         * @param WP_Admin_Bar $wp_admin_bar The WP_Admin_Bar instance.
         */
        public function astra_update_customize_admin_bar_link($wp_admin_bar)
        {
        }
        /**
         * For existing users, do not load the wide/full width image CSS by default.
         *
         * @since 2.5.0
         * @return boolean false if it is an existing user , true if not.
         */
        public static function astra_global_btn_woo_comp()
        {
        }
        /**
         * Show the product title in the product loop.
         *
         * @param string $product_type product type.
         */
        public function astra_woo_woocommerce_template_product_title($product_type)
        {
        }
        /**
         * Show the product catagories in the product loop.
         */
        public function single_product_category()
        {
        }
        /**
         * Single Product Payments.
         *
         * @since  3.9.2
         * @return void
         */
        public function woocommerce_product_single_payments()
        {
        }
        /**
         * Show the product title in the product loop. By default this is an H2.
         *
         * @param string $product_type product type.
         */
        public function single_product_content_structure($product_type = '')
        {
        }
        /**
         * Single product sticky add to cart.
         *
         * @return void
         * @since 3.9.0
         */
        public function single_product_sticky_add_to_cart()
        {
        }
        /**
         * Enable ajax add to cart for shop page.
         *
         * @param string $value ajax add to cart value.
         * @return string yes | no  enable / disable ajax add to cart.
         * @since 4.1.0
         */
        public function option_woocommerce_enable_ajax_add_to_cart($value)
        {
        }
        /**
         * Enable ajax add to cart redirect.
         *
         * @param string $value cart redirect after add value.
         * @return string yes | no enable / disable cart redirect after add.
         * @since 4.1.0
         */
        public function option_woocommerce_cart_redirect_after_add($value)
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     */
    class Astra_Customizer_Register_Woo_Section extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Panels and Sections for Customizer.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     */
    class Astra_Woo_Shop_Container_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Astra-WooCommerce Shop Container Settings.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     */
    class Astra_Woo_Shop_Sidebar_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Astra-WooCommerce Shop Sidebar Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Customizer WooCommerece store notice - customizer config initial setup.
     */
    class Astra_Woo_Store_Notice_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Astra-WooCommerce Shop Cart Layout Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.9.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     */
    class Astra_Woo_Shop_Cart_Layout_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Astra-WooCommerce Shop Cart Layout Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     */
    class Astra_Woo_Shop_Layout_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Astra-WooCommerce Shop Layout Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     */
    class Astra_Woo_Shop_Misc_Layout_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Astra-WooCommerce Misc Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.9.2
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     */
    class Astra_Woo_Shop_Single_Layout_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Astra-WooCommerce Shop Single Layout Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Class Astra_Builder_Admin.
     */
    final class Astra_Builder_Admin
    {
        /**
         * Member Variable
         *
         * @var instance
         */
        private static $instance = \null;
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Update Customizer Header Footer quick links from options page.
         *
         * @since 3.0.0
         * @param array $args default Header Footer quick links.
         * @return array updated Header Footer quick links.
         */
        public function update_customizer_header_footer_link($args)
        {
        }
        /**
         * Migrate to New Header Builder
         */
        public function migrate_to_builder()
        {
        }
        /**
         * Disable pro upgrade notice from all over in Astra.
         *
         * @since 3.9.4
         */
        public function disable_astra_pro_notices()
        {
        }
    }
    /**
     * Class Astra_Builder_Helper.
     */
    final class Astra_Builder_Helper
    {
        /**
         * Config context general tab.
         *
         * @var string[][]
         */
        public static $general_tab = array(array('setting' => 'ast_selected_tab', 'value' => 'general'));
        /**
         * Config context general tab config.
         *
         * @var string[][]
         */
        public static $general_tab_config = array('setting' => 'ast_selected_tab', 'value' => 'general');
        /**
         * Config context design tab.
         *
         * @var string[][]
         */
        public static $design_tab = array(array('setting' => 'ast_selected_tab', 'value' => 'design'));
        /**
         * Config context design tab.
         *
         * @var string[][]
         */
        public static $design_tab_config = array('setting' => 'ast_selected_tab', 'value' => 'design');
        /**
         * Config Tablet device context.
         *
         * @var string[][]
         */
        public static $tablet_device = array(array('setting' => 'ast_selected_device', 'operator' => 'in', 'value' => array('tablet')));
        /**
         * Config Mobile device context.
         *
         * @var string[][]
         */
        public static $mobile_device = array(array('setting' => 'ast_selected_device', 'operator' => 'in', 'value' => array('mobile')));
        /**
         * Config Mobile device context.
         *
         * @var string[][]
         */
        public static $responsive_devices = array(array('setting' => 'ast_selected_device', 'operator' => 'in', 'value' => array('tablet', 'mobile')));
        /**
         * Config Mobile device context.
         *
         * @var string[][]
         */
        public static $responsive_general_tab = array(array('setting' => 'ast_selected_tab', 'value' => 'general'), array('setting' => 'ast_selected_device', 'operator' => 'in', 'value' => array('tablet', 'mobile')));
        /**
         * Config Desktop device context.
         *
         * @var string[][]
         */
        public static $desktop_general_tab = array(array('setting' => 'ast_selected_tab', 'value' => 'general'), array('setting' => 'ast_selected_device', 'operator' => '==', 'value' => 'desktop'));
        /**
         * Default responsive spacing control value.
         *
         * @var string[][]
         */
        public static $default_responsive_spacing = array('desktop' => array('top' => '', 'right' => '', 'bottom' => '', 'left' => ''), 'tablet' => array('top' => '', 'right' => '', 'bottom' => '', 'left' => ''), 'mobile' => array('top' => '', 'right' => '', 'bottom' => '', 'left' => ''), 'desktop-unit' => 'px', 'tablet-unit' => 'px', 'mobile-unit' => 'px');
        /**
         * Default button responsive spacing control value.
         *
         * @var string[][]
         */
        public static $default_button_responsive_spacing = array('desktop' => array('top' => '12', 'right' => '20', 'bottom' => '12', 'left' => '20'), 'tablet' => array('top' => '', 'right' => '', 'bottom' => '', 'left' => ''), 'mobile' => array('top' => '', 'right' => '', 'bottom' => '', 'left' => ''), 'desktop-unit' => 'px', 'tablet-unit' => 'px', 'mobile-unit' => 'px');
        /**
         * Config Tablet device context.
         *
         * @var string[][]
         */
        public static $tablet_general_tab = array(array('setting' => 'ast_selected_tab', 'value' => 'general'), array('setting' => 'ast_selected_device', 'operator' => '==', 'value' => 'tablet'));
        /**
         * Config Mobile device context.
         *
         * @var string[][]
         */
        public static $mobile_general_tab = array(array('setting' => 'ast_selected_tab', 'value' => 'general'), array('setting' => 'ast_selected_device', 'operator' => '==', 'value' => 'mobile'));
        /**
         *  No. Of. Component Limit.
         *
         * @var int
         */
        public static $component_limit = 10;
        /**
         *  No. Of. Component count array.
         *
         * @var int
         */
        public static $component_count_array = array();
        /**
         *  No. Of. Footer Widgets.
         *
         * @var int
         */
        public static $num_of_footer_widgets;
        /**
         *  No. Of. Footer HTML.
         *
         * @var int
         */
        public static $num_of_footer_html;
        /**
         *  No. Of. Header Widgets.
         *
         * @var int
         */
        public static $num_of_header_widgets;
        /**
         *  No. Of. Header Menu.
         *
         * @var int
         */
        public static $num_of_header_menu;
        /**
         *  No. Of. Header Buttons.
         *
         * @var int
         */
        public static $num_of_header_button;
        /**
         *  No. Of. Footer Buttons.
         *
         * @var int
         */
        public static $num_of_footer_button;
        /**
         *  No. Of. Header HTML.
         *
         * @var int
         */
        public static $num_of_header_html;
        /**
         *  No. Of. Footer Columns.
         *
         * @var int
         */
        public static $num_of_footer_columns;
        /**
         *  No. Of. Header Social Icons.
         *
         * @var int
         */
        public static $num_of_header_social_icons;
        /**
         *  No. Of. Footer Social Icons.
         *
         * @var int
         */
        public static $num_of_footer_social_icons;
        /**
         * No. Of. Header Dividers.
         *
         * @since 3.0.0
         * @var int
         */
        public static $num_of_header_divider;
        /**
         * No. Of. Footer Dividers.
         *
         * @since 3.0.0
         * @var int
         */
        public static $num_of_footer_divider;
        /**
         *  Check if migrated to new HFB.
         *
         * @var int|bool
         */
        public static $is_header_footer_builder_active;
        /**
         * Footer Row layout
         *
         * @var array
         */
        public static $footer_row_layouts;
        /**
         * Header Desktop Items
         *
         * @var array
         */
        public static $header_desktop_items = \null;
        /**
         * Footer Desktop Items
         *
         * @var array
         */
        public static $footer_desktop_items = \null;
        /**
         * Header Mobile Items
         *
         * @var array
         */
        public static $header_mobile_items = \null;
        /**
         * Member Variable
         *
         * @var instance
         */
        public static $loaded_grid = \null;
        /**
         * Member Variable
         *
         * @var instance
         */
        private static $instance = \null;
        /**
         * Member Variable
         *
         * @var grid_size_mapping
         */
        public static $grid_size_mapping = array('6-equal' => 'repeat( 6, 1fr )', '5-equal' => 'repeat( 5, 1fr )', '4-equal' => 'repeat( 4, 1fr )', '4-lheavy' => '2fr 1fr 1fr 1fr', '4-rheavy' => '1fr 1fr 1fr 2fr', '3-equal' => 'repeat( 3, 1fr )', '3-lheavy' => '2fr 1fr 1fr', '3-rheavy' => '1fr 1fr 2fr', '3-cheavy' => '1fr 2fr 1fr', '3-cwide' => '1fr 3fr 1fr', '3-firstrow' => '1fr 1fr', '3-lastrow' => '1fr 1fr', '2-equal' => 'repeat( 2, 1fr )', '2-lheavy' => '2fr 1fr', '2-rheavy' => '1fr 2fr', '2-full' => '2fr', 'full' => '1fr');
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Get count of all components.
         *
         * @since 3.0.0
         *
         * @return int Number of all components.
         */
        public static function get_component_count()
        {
        }
        /**
         * Deprecate Header Sections, Mobile Headers, Footer Widgets for new users and migrated users.
         *
         * @since 3.0.0
         * @param array $args The arguments as per the filter.
         * @return array $args Updated arguments as per the filter.
         */
        public function deprecate_old_header_and_footer($args)
        {
        }
        /**
         * For existing users, do not load the wide/full width image CSS by default.
         *
         * @since 3.0.0
         * @return boolean false if it is an existing user , true if not.
         */
        public static function is_header_footer_builder_active()
        {
        }
        /**
         *  Check if Migrated to new Astra Builder.
         */
        public static function is_new_user()
        {
        }
        /**
         * Adds a check to see if the side columns should run.
         *
         * @param string $row the name of the row.
         */
        public static function has_mobile_side_columns($row = 'primary')
        {
        }
        /**
         * Adds a check to see if the center column should run.
         *
         * @param string $row the name of the row.
         */
        public static function has_mobile_center_column($row = 'primary')
        {
        }
        /**
         * Adds support to render header columns.
         *
         * @param string $row the name of the row.
         * @param string $column the name of the column.
         * @param string $header the name of the header.
         * @param string $builder the name of the builder.
         */
        public static function render_builder_markup($row = 'primary', $column = 'left', $header = 'desktop', $builder = 'header')
        {
        }
        /**
         * Adds support to render Mobile Popup Markup.
         */
        public static function render_mobile_popup_markup()
        {
        }
        /**
         * Check if Center column element exists.
         *
         * @param string $row the name of the row.
         * @param string $builder_type the type of the builder.
         * @param string $device Device.
         */
        public static function has_center_column($row = 'main', $builder_type = 'header', $device = 'desktop')
        {
        }
        /**
         * Check if Side column element exists.
         *
         * @param string $row row.
         * @param string $builder_type the type of the builder.
         * @param string $device Device.
         * @return bool
         */
        public static function has_side_columns($row = 'primary', $builder_type = 'header', $device = 'desktop')
        {
        }
        /**
         * Check if Footer Zone is empty.
         *
         * @param string $row row.
         * @return bool
         */
        public static function is_footer_row_empty($row = 'primary')
        {
        }
        /**
         * Check if row is empty.
         *
         * @param string $row row.
         * @param string $builder_type the type of the builder.
         * @param string $device Device.
         * @return bool
         */
        public static function is_row_empty($row = 'primary', $builder_type = 'header', $device = 'desktop')
        {
        }
        /**
         * Check if component placed on the builder.
         *
         * @param string $component_id component id.
         * @param string $builder_type builder type.
         * @param string $device Device type (mobile, desktop and both).
         * @return bool
         */
        public static function is_component_loaded($component_id, $builder_type = 'header', $device = 'both')
        {
        }
        /**
         * For existing users, do not apply dynamic CSS chages.
         *
         * @since 3.3.0
         * @return boolean true if it is an existing user , false if not.
         */
        public static function apply_flex_based_css()
        {
        }
    }
    /**
     * Admin Helper
     */
    final class Astra_Admin_Helper
    {
        /**
         * Returns an option from the database for
         * the admin settings page.
         *
         * @param  string  $key     The option key.
         * @param  boolean $network Whether to allow the network admin setting to be overridden on subsites.
         * @return string           Return the option value
         */
        public static function get_admin_settings_option($key, $network = \false)
        {
        }
        /**
         * Updates an option from the admin settings page.
         *
         * @param string $key       The option key.
         * @param mixed  $value     The value to update.
         * @param bool   $network   Whether to allow the network admin setting to be overridden on subsites.
         * @return mixed
         */
        public static function update_admin_settings_option($key, $value, $network = \false)
        {
        }
        /**
         * Returns an option from the database for
         * the admin settings page.
         *
         * @param string $key The option key.
         * @param bool   $network Whether to allow the network admin setting to be overridden on subsites.
         * @return mixed
         */
        public static function delete_admin_settings_option($key, $network = \false)
        {
        }
    }
    /**
     * Astra Admin Settings
     */
    class Astra_Admin_Settings
    {
        /**
         * Current Slug
         *
         * @since 1.0
         * @var array $current_slug
         */
        public static $current_slug = 'general';
        /**
         * Starter Templates Slug
         *
         * @since 2.3.2
         * @var array $starter_templates_slug
         */
        public static $starter_templates_slug = 'astra-sites';
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Admin settings init
         */
        public static function init_admin_settings()
        {
        }
        /**
         * Add custom megamenu fields data to the menu.
         *
         * @access public
         * @param int    $id menu item id.
         * @param object $item A single menu item.
         * @param int    $depth menu item depth.
         * @param array  $args menu item arguments.
         * @return void
         *
         * @since 3.9.4
         */
        public static function add_custom_fields($id, $item, $depth, $args)
        {
        }
        /**
         * Get register & enqueue astra-admin scripts.
         *
         * @since 3.6.6
         */
        public static function load_astra_admin_script()
        {
        }
        /**
         * Ask Theme Rating
         *
         * @since 1.4.0
         */
        public static function register_notices()
        {
        }
        /**
         * Upgrade to Pro notice for Astra on WooCommerce pages.
         *
         * @since 3.9.4
         */
        public static function upgrade_to_pro_wc_notice()
        {
        }
        /**
         * Display notice for minimun version for Astra addon.
         *
         * @since 2.0.0
         */
        public static function minimum_addon_version_notice()
        {
        }
        /**
         * Enqueue Astra Notices CSS.
         *
         * @since 2.0.0
         *
         * @return void
         */
        public static function notice_assets()
        {
        }
        /**
         * Render button for Astra Site notices
         *
         * @since 1.6.5
         * @return array $ast_sites_notice_btn Rendered button
         */
        public static function astra_sites_notice_button()
        {
        }
        /**
         * Check if installed Starter Sites plugin is new.
         *
         * @since 2.3.2
         */
        public static function get_starter_templates_slug()
        {
        }
        /**
         * Load the scripts and styles in the customizer controls.
         *
         * @since 1.2.1
         */
        public static function customizer_scripts()
        {
        }
        /**
         * Register admin scripts.
         *
         * @param String $hook Screen name where the hook is fired.
         * @return void
         */
        public static function register_scripts($hook)
        {
        }
        /**
         * Add custom CSS for admin area sub menu icons.
         *
         * @since 2.5.4
         */
        public static function admin_submenu_css()
        {
        }
        /**
         * Get and return page URL
         *
         * @param string $menu_slug Menu name.
         * @since 1.0
         * @return  string page url
         */
        public static function get_page_url($menu_slug)
        {
        }
    }
    /**
     * Class Astra_Attr
     */
    class Astra_Attr
    {
        /**
         * Store Instance on Current Class.
         *
         * @var object instance
         */
        private static $instance;
        /**
         * Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Initialuze the Class.
         *
         * @since 1.6.2
         */
        private function __construct()
        {
        }
        /**
         * Build list of attributes into a string and apply contextual filter on string.
         *
         * The contextual filter is of the form `astra_attr_{context}_output`.
         *
         * @since 1.6.2
         *
         * @param string $context    The context, to build filter name.
         * @param array  $attributes Optional. Extra attributes to merge with defaults.
         * @param array  $args       Optional. Custom data to pass to filter.
         * @return string String of HTML attributes and values.
         */
        public function astra_attr($context, $attributes = array(), $args = array())
        {
        }
        /**
         * Merge array of attributes with defaults, and apply contextual filter on array.
         *
         * The contextual filter is of the form `astra_attr_{context}`.
         *
         * @since 1.6.2
         *
         * @param string $context    The context, to build filter name.
         * @param array  $attributes Optional. Extra attributes to merge with defaults.
         * @param array  $args       Optional. Custom data to pass to filter.
         * @return array Merged and filtered attributes.
         */
        public function astra_parse_attr($context, $attributes = array(), $args = array())
        {
        }
    }
    /**
     * Theme Enqueue Scripts
     */
    class Astra_Enqueue_Scripts
    {
        /**
         * Class styles.
         *
         * @access public
         * @var $styles Enqueued styles.
         */
        public static $styles;
        /**
         * Class scripts.
         *
         * @access public
         * @var $scripts Enqueued scripts.
         */
        public static $scripts;
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Fix skip link focus in IE11.
         *
         * This does not enqueue the script because it is tiny and because it is only for IE11,
         * thus it does not warrant having an entire dedicated blocking script being loaded.
         *
         * @link https://git.io/vWdr2
         * @link https://github.com/WordPress/twentynineteen/pull/47/files
         * @link https://github.com/ampproject/amphtml/issues/18671
         */
        public function astra_skip_link_focus_fix()
        {
        }
        /**
         * Admin body classes.
         *
         * Body classes to be added to <body> tag in admin page
         *
         * @param String $classes body classes returned from the filter.
         * @return String body classes to be added to <body> tag in admin page
         */
        public function admin_body_class($classes)
        {
        }
        /**
         * List of all assets.
         *
         * @return array assets array.
         */
        public static function theme_assets()
        {
        }
        /**
         * Add Fonts
         */
        public function add_fonts()
        {
        }
        /**
         * Enqueue Scripts
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Trim CSS
         *
         * @since 1.0.0
         * @param string $css CSS content to trim.
         * @return string
         */
        public static function trim_css($css = '')
        {
        }
        /**
         * Enqueue Gutenberg assets.
         *
         * @since 1.5.2
         *
         * @return void
         */
        public function gutenberg_assets()
        {
        }
        /**
         * Function to check if enqueuing of Astra assets are disabled.
         *
         * @since 2.1.0
         * @return boolean
         */
        public static function enqueue_theme_assets()
        {
        }
        /**
         * Enqueue galleries relates CSS on gallery_style filter.
         *
         * @param string $gallery_style gallery style and div.
         * @since 3.5.0
         * @return string
         */
        public function enqueue_galleries_style($gallery_style)
        {
        }
    }
    /**
     * Icons for Astra theme.
     *
     * @package     Astra
     * @author      Brainstorm Force
     * @copyright   Copyright (c) 2020, Brainstorm Force
     * @link        https://www.brainstormforce.com
     * @since       Astra 3.3.0
     */
    /**
     * Icons Initial Setup
     *
     * @since 3.3.0
     */
    class Astra_Icons
    {
        /**
         * Constructor function that initializes required actions and hooks
         */
        public function __construct()
        {
        }
        /**
         * Check if we need to load icons as SVG or fonts.
         * Returns true if SVG false if font.
         *
         * @since 3.3.0
         *
         * @return boolean should be svg or font.
         */
        public static function is_svg_icons()
        {
        }
        /**
         * Get SVG icons.
         * Returns the SVG icon you want to display.
         *
         * @since 3.3.0
         *
         * @param string  $icon Key for the SVG you want to load.
         * @param boolean $is_echo whether to echo the output or return.
         * @param boolean $replace load close markup for SVG.
         * @param string  $menu_location Creates dynamic filter for passed parameter.
         *
         * @return string SVG for passed key.
         */
        public static function get_icons($icon, $is_echo = \false, $replace = \false, $menu_location = 'main')
        {
        }
    }
    /**
     * Theme Options
     */
    class Astra_Theme_Options
    {
        /**
         * Class instance.
         *
         * @access private
         * @var $instance Class instance.
         */
        private static $instance;
        /**
         * Customizer defaults.
         *
         * @access Private
         * @since 1.4.3
         * @var Array
         */
        private static $defaults;
        /**
         * Post id.
         *
         * @var $instance Post id.
         */
        public static $post_id = \null;
        /**
         * A static option variable.
         *
         * @since 1.0.0
         * @access private
         * @var mixed $db_options
         */
        private static $db_options;
        /**
         * A static option variable.
         *
         * @since 1.0.0
         * @access private
         * @var mixed $db_options
         */
        private static $db_options_no_defaults;
        /**
         * A static theme astra-options variable.
         *
         * @since 4.0.2
         * @access public
         * @var mixed $astra_options
         */
        public static $astra_options = \null;
        /**
         * Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Set default theme option values
         *
         * @since 1.0.0
         * @return default values of the theme.
         */
        public static function defaults()
        {
        }
        /**
         * Get astra-options DB values.
         *
         * @return array Return array of theme options from database.
         *
         * @since 4.0.0
         */
        public static function get_astra_options()
        {
        }
        /**
         * Get theme options from static array()
         *
         * @return array    Return array of theme options.
         */
        public static function get_options()
        {
        }
        /**
         * Update theme static option array.
         */
        public static function refresh()
        {
        }
        /**
         * Get theme options from static array() from database
         *
         * @return array    Return array of theme options from database.
         */
        public static function get_db_options()
        {
        }
    }
    /**
     * Astra custom navigation walker.
     *
     * @since 1.5.4
     */
    class Astra_Walker_Page extends \Walker_Page
    {
        /**
         * Outputs the beginning of the current level in the tree before elements are output.
         *
         * @since 1.5.4
         *
         * @see Walker::start_lvl()
         *
         * @param string $output Used to append additional content (passed by reference).
         * @param int    $depth  Optional. Depth of page. Used for padding. Default 0.
         * @param array  $args   Optional. Arguments for outputting the next level.
         *                       Default empty array.
         */
        public function start_lvl(&$output, $depth = 0, $args = array())
        {
        }
        /**
         * Outputs the beginning of the current element in the tree.
         *
         * @see Walker::start_el()
         * @since 1.7.2
         *
         * @param string  $output       Used to append additional content. Passed by reference.
         * @param WP_Post $page         Page data object.
         * @param int     $depth        Optional. Depth of page. Used for padding. Default 0.
         * @param array   $args         Optional. Array of arguments. Default empty array.
         * @param int     $current_page Optional. Page ID. Default 0.
         */
        public function start_el(&$output, $page, $depth = 0, $args = array(), $current_page = 0)
        {
        }
    }
    /**
     * New modern WP-Block editor experience.
     */
    class Astra_WP_Editor_CSS
    {
        /**
         * Astra block editor block editor - padding preset CSS.
         *
         * @return array Devices specific padding spacings.
         *
         * @since 3.8.3
         */
        public static function astra_get_block_spacings()
        {
        }
        /**
         * Get dynamic CSS  required for the block editor to make editing experience similar to how it looks on frontend.
         *
         * @return String CSS to be loaded in the editor interface.
         */
        public static function get_css()
        {
        }
    }
    /**
     * Admin Helper
     */
    // @codingStandardsIgnoreStart WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedClassFound
    class Gutenberg_Editor_CSS
    {
        // @codingStandardsIgnoreEnd WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedClassFound
        /**
         * Get dynamic CSS  required for the block editor to make editing experience similar to how it looks on frontend.
         *
         * @return String CSS to be loaded in the editor interface.
         */
        public static function get_css()
        {
        }
    }
    /**
     * Class Astra_Attr
     */
    class Astra_Markup
    {
        /**
         * Initialuze the Class.
         *
         * @since 3.3.0
         */
        public function __construct()
        {
        }
        /**
         * Comment count wrapper opening div.
         *
         * @param array $args markup arguments.
         * @since 3.3.0
         * @return array.
         */
        public function comment_count_wrapper_open($args)
        {
        }
        /**
         * Comment count wrapper closing div.
         *
         * @param array $args markup arguments.
         * @since 3.3.0
         * @return array.
         */
        public function comment_count_wrapper_close($args)
        {
        }
        /**
         * Comment data wrapper opening div.
         *
         * @param array $args markup arguments.
         * @since 3.3.0
         * @return array.
         */
        public function ast_comment_data_wrap_open($args)
        {
        }
        /**
         * Comment data wrapper closing div.
         *
         * @param array $args markup arguments.
         * @since 3.3.0
         * @return array.
         */
        public function ast_comment_data_wrap_close($args)
        {
        }
        /**
         * Comment meta wrapper opening div.
         *
         * @param array $args markup arguments.
         * @since 3.3.0
         * @return array.
         */
        public function ast_comment_meta_wrap_open($args)
        {
        }
        /**
         * Comment meta wrapper closing div.
         *
         * @param array $args markup arguments.
         * @since 3.3.0
         * @return array.
         */
        public function ast_comment_meta_wrap_close($args)
        {
        }
        /**
         * Comment time div attributes.
         *
         * @since 3.3.0
         * @return string.
         */
        public function ast_comment_time_attr()
        {
        }
        /**
         * Comment cite wrapper div attributes.
         *
         * @since 3.3.0
         * @return string.
         */
        public function ast_comment_cite_wrap_attr()
        {
        }
        /**
         * We have removed grid css and make common css for grid style.
         *
         * @since 3.3.0
         * @return string.
         */
        public function ast_grid_common_css()
        {
        }
        /**
         * Blog content Grid CSS.
         *
         * @since 3.3.0
         * @return string.
         */
        public function ast_grid_blog_col()
        {
        }
        /**
         * We have removed grid css and make common css for grid style.
         *
         * @since 3.3.0
         * @return string.
         */
        public function ast_blog_common_css()
        {
        }
        /**
         * Removed grid layout classes and make common class for same style.
         *
         * @since 3.3.0
         * @return string.
         */
        public function ast_grid_col_6()
        {
        }
        /**
         * Comment form grid classes.
         *
         * @since 3.3.0
         * @return string.
         */
        public function comment_form_grid_class()
        {
        }
        /**
         * Removed grid layout classes and make common class for same style
         *
         * @since 3.3.0
         * @return string.
         */
        public function ast_grid_lg_12()
        {
        }
        /**
         * Layout-4 grid css backward comaptibility.
         *
         * @return string.
         */
        public function ast_layout_4_grid()
        {
        }
        /**
         * Layout-2 grid css backward comaptibility.
         *
         * @return string.
         */
        public function ast_layout_2_grid()
        {
        }
        /**
         * Layout-1 grid css backward comaptibility.
         *
         * @return string.
         */
        public function ast_layout_1_grid()
        {
        }
        /**
         * Layout-3 grid css backward comaptibility.
         *
         * @return string.
         */
        public function ast_layout_3_grid()
        {
        }
        /**
         * Layout-5 grid css backward comaptibility.
         *
         * @return string.
         */
        public function ast_layout_5_grid()
        {
        }
        /**
         * Layout-6 grid css backward comaptibility.
         *
         * @return string.
         */
        public function ast_layout_6_grid()
        {
        }
        /**
         * Footer widget opening div.
         *
         * @since 3.3.0
         * @param array $args div attributes.
         * @return array.
         */
        public function footer_widget_div_open($args)
        {
        }
        /**
         * Footer widget closing div.
         *
         * @since 3.3.0
         * @param array $args div attributes.
         * @return array.
         */
        public function footer_widget_div_close($args)
        {
        }
        /**
         * Footer widget inner class.
         *
         * @param array $args attributes.
         * @since 3.3.0
         * @return string.
         */
        public function footer_widget_area_inner($args)
        {
        }
        /**
         * Header widget inner class.
         *
         * @param array $args Attributes.
         * @since 3.3.0
         * @return string.
         */
        public function header_widget_area_inner($args)
        {
        }
        /**
         * Footer widget opening div.
         *
         * @since 3.3.0
         * @param array $args div attributes.
         * @return array.
         */
        public function header_widget_div_open($args)
        {
        }
    }
    /**
     * Astra_Pro_Customizer Initial setup
     */
    class Astra_Pro_Customizer extends \WP_Customize_Section
    {
        /**
         * The type of customize section being rendered.
         *
         * @since  1.0.10
         * @access public
         * @var    string
         */
        public $type = 'astra-pro';
        /**
         * Custom pro button URL.
         *
         * @since  1.0.10
         * @access public
         * @var    string
         */
        public $pro_url = '';
        /**
         * Add custom parameters to pass to the JS via JSON.
         *
         * @since  1.0.10
         * @access public
         * @return string
         */
        public function json()
        {
        }
        /**
         * Outputs the Underscore.js template.
         *
         * @since  1.0.10
         * @access public
         * @return void
         */
        protected function render_template()
        {
        }
    }
    /**
     * Register Button Customizer Configurations.
     */
    class Astra_Pro_Upgrade_Link_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Button Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Class Astra_Builder_Customizer.
     *
     * Customizer Configuration for Header Footer Builder.
     *
     * @since 3.0.0
     */
    final class Astra_Builder_Customizer
    {
        /**
         * Constructor
         *
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Update default WP configs.
         *
         * @param object $wp_customize customizer object.
         */
        public function update_default_wp_configs($wp_customize)
        {
        }
        /**
         * Function to remove old Header and Footer Menu location and widgets.
         *
         * @since 3.0.0
         * @return void
         */
        public function deregister_menu_locations_widgets()
        {
        }
        /**
         * Attach customize_controls_print_footer_scripts preview styles conditionally.
         *
         * @since 3.0.0
         */
        public function builder_customizer_preview_styles()
        {
        }
        /**
         * Add Customizer preview script.
         *
         * @since 3.0.0
         */
        public function enqueue_customizer_preview_scripts()
        {
        }
        /**
         * Register Base Components for Builder.
         */
        public function load_base_components()
        {
        }
        /**
         * Register Components for Header Builder.
         *
         * @since 3.0.0
         */
        public function load_header_components()
        {
        }
        /**
         * Register Components for Footer Builder.
         *
         * @since 3.0.0
         */
        public function load_footer_components()
        {
        }
        /**
         * Register controls for Header/Footer Builder.
         *
         * @param WP_Customize_Manager $wp_customize Theme Customizer object.
         * @since 3.0.0
         */
        public function builder_configs($wp_customize)
        {
        }
        /**
         * Register controls for Header Builder.
         *
         * @param WP_Customize_Manager $wp_customize Theme Customizer object.
         * @since 3.0.0
         */
        public function header_configs($wp_customize)
        {
        }
        /**
         * Register controls for Footer Builder.
         *
         * @param WP_Customize_Manager $wp_customize Theme Customizer object.
         * @since 3.0.0
         */
        public function footer_configs($wp_customize)
        {
        }
        /**
         * Register Woocommerce controls for new and old Header Builder.
         *
         * @param WP_Customize_Manager $wp_customize Theme Customizer object.
         * @since 3.0.0
         */
        public function woo_header_configs($wp_customize)
        {
        }
    }
    /**
     * Customizer Callback
     */
    class Astra_Customizer_Callback
    {
        /**
         * Sidebar Archive
         *
         * @return boolean Return the sidebar status for Home, Archive & Search pages.
         */
        public static function _sidebar_archive()
        {
        }
        /**
         * Sidebar Single
         *
         * @return boolean Return the sidebar status for Single Post.
         */
        public static function _sidebar_single()
        {
        }
        /**
         * Sidebar Page
         *
         * @return boolean Return the sidebar status for Single Page / Custom post type & 404.
         */
        public static function _sidebar_page()
        {
        }
    }
    /**
     * Customizer Partials initial setup
     */
    class Astra_Customizer_Partials
    {
        /**
         * Constructor
         *
         * @since 1.0.0
         *
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Render Partial Site Tagline
         *
         * @since 1.0.0
         *
         * @return mixed
         */
        public static function render_partial_site_tagline()
        {
        }
        /**
         * Render Partial Site Tagline
         *
         * @since 1.0.0
         *
         * @return mixed
         */
        public static function render_partial_site_title()
        {
        }
        /**
         * Render Partial Header Right Section HTML
         *
         * @since 1.0.0
         *
         * @return mixed
         */
        public static function render_header_main_rt_section_html()
        {
        }
        /**
         * Render Partial Text Custom Menu Item
         *
         * @since 1.0.0
         *
         * @return mixed
         */
        public static function render_header_main_rt_section_button_text()
        {
        }
        /**
         * Render Partial Text Header Site Title & Tagline
         *
         * @since 2.2.0
         *
         * @return mixed
         */
        public static function render_header_site_title_tagline()
        {
        }
        /**
         * Render Partial Footer Section 1 Credit
         *
         * @since 1.0.0
         *
         * @return mixed
         */
        public static function render_footer_sml_section_1_credit()
        {
        }
        /**
         * Render Partial Footer Section 2 Credit
         *
         * @since 1.0.0
         *
         * @return mixed
         */
        public static function render_footer_sml_section_2_credit()
        {
        }
        /**
         * Render Partial text for the mobile toggle menu
         *
         * @since 2.6.0
         *
         * @return mixed
         */
        public static function mobile_toggle_menu()
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     */
    class Astra_Customizer_Register_Sections_Panels extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Panels and Sections for Customizer.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     */
    class Astra_Customizer_Sanitizes
    {
        /**
         * Instance
         *
         * @access private
         * @var object
         */
        private static $instance;
        /**
         * Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Sanitize Integer
         *
         * @param  number $input Customizer setting input number.
         * @return number        Absolute number.
         */
        public static function sanitize_integer($input)
        {
        }
        /**
         * Sanitize Integer
         *
         * @param  number $val      Customizer setting input number.
         * @param  object $setting  Setting object.
         * @return number           Return number.
         */
        public static function sanitize_number($val, $setting)
        {
        }
        /**
         * Sanitize Integer
         *
         * @param  number $val Customizer setting input number.
         * @return number        Return number.
         */
        public static function sanitize_number_n_blank($val)
        {
        }
        /**
         * Sanitize Spacing
         *
         * @param  number $val Customizer setting input number.
         * @return number        Return number.
         * @since  1.0.6
         */
        public static function sanitize_spacing($val)
        {
        }
        /**
         * Sanitize link
         *
         * @param  array $val Customizer setting link.
         * @return array        Return array.
         * @since  2.3.0
         */
        public static function sanitize_link($val)
        {
        }
        /**
         * Sanitize responsive  Spacing
         *
         * @param  number $val Customizer setting input number.
         * @return number        Return number.
         * @since  1.2.1
         */
        public static function sanitize_responsive_spacing($val)
        {
        }
        /**
         * Check numeric values.
         *
         * @param  int|string $value Value of variable.
         * @return string|int Return empty if $value is not integer.
         *
         * @since 2.5.4
         */
        public static function check_numberic_values($value)
        {
        }
        /**
         * Sanitize Responsive Slider
         *
         * @param  array|number $val Customizer setting input number.
         * @param  object       $setting Setting Onject.
         * @return array        Return number.
         */
        public static function sanitize_responsive_slider($val, $setting)
        {
        }
        /**
         * Sanitize Responsive Typography
         *
         * @param  array|number $val Customizer setting input number.
         * @return array        Return number.
         */
        public static function sanitize_responsive_typo($val)
        {
        }
        /**
         * Validate Email
         *
         * @param  object $validity setting input validity.
         * @param  string $value    setting input value.
         * @return object           Return the validity object.
         */
        public static function validate_email($validity, $value)
        {
        }
        /**
         * Validate Sidebar Content Width
         *
         * @param  number $value Sidebar content width.
         * @return number        Sidebar content width value.
         */
        public static function validate_sidebar_content_width($value)
        {
        }
        /**
         * Validate Site width
         *
         * @param  number $value Site width.
         * @return number        Site width value.
         */
        public static function validate_site_width($value)
        {
        }
        /**
         * Validate Site padding
         *
         * @param  number $value Site padding.
         * @return number        Site padding value.
         */
        public static function validate_site_padding($value)
        {
        }
        /**
         * Validate Site margin
         *
         * @param  number $value Site margin.
         * @return number        Site margin value.
         */
        public static function validate_site_margin($value)
        {
        }
        /**
         * Sanitize checkbox
         *
         * @param  mixed $input setting input.
         * @return number        setting input value.
         */
        public static function sanitize_checkbox($input)
        {
        }
        /**
         * Sanitize HEX color
         *
         * @param  string $color setting input.
         * @return string        setting input value.
         */
        public static function sanitize_hex_color($color)
        {
        }
        /**
         * Sanitize Alpha color
         *
         * @param  string $color setting input.
         * @return string        setting input value.
         */
        public static function sanitize_alpha_color($color)
        {
        }
        /**
         * Sanitize html
         *
         * @param  string $input    setting input.
         * @return mixed            setting input value.
         */
        public static function sanitize_html($input)
        {
        }
        /**
         * Sanitize Select choices
         *
         * @param  string $input    setting input.
         * @param  object $setting  setting object.
         * @return mixed            setting input value.
         */
        public static function sanitize_multi_choices($input, $setting)
        {
        }
        /**
         * Sanitize Select choices
         *
         * @param  string $input    setting input.
         * @param  object $setting  setting object.
         * @return mixed            setting input value.
         */
        public static function sanitize_choices($input, $setting)
        {
        }
        /**
         * Sanitize Font weight
         *
         * @param  mixed $input setting input.
         * @return mixed        setting input value.
         */
        public static function sanitize_font_weight($input)
        {
        }
        /**
         * Sanitize Font variant
         *
         * @param  mixed $input setting input.
         * @return mixed        setting input value.
         */
        public static function sanitize_font_variant($input)
        {
        }
        /**
         * Sanitize Background Obj
         *
         * @param  mixed $bg_obj setting input.
         * @return array        setting input value.
         */
        public static function sanitize_background_obj($bg_obj)
        {
        }
        /**
         * Sanitize Border Typography
         *
         * @since 1.4.0
         * @param  array|number $val Customizer setting input number.
         * @return array        Return number.
         */
        public static function sanitize_border($val)
        {
        }
        /**
         * Sanitize Customizer Link param.
         *
         * @param Array $val array(
         *      linked : Linked Customizer Section,
         *      link_text : Link Text.
         * ).
         *
         * @since 1.6.0
         *
         * @return Array
         */
        public static function sanitize_customizer_links($val)
        {
        }
        /**
         * Sanitize Responsive Background Image
         *
         * @param  array $bg_obj Background object.
         * @return array         Background object.
         */
        public static function sanitize_responsive_background($bg_obj)
        {
        }
        /**
         * Sanitize Toggle Control param.
         *
         * @param bool $val for True|False.
         *
         * @since 3.1.0
         *
         * @return bool True|False
         */
        public static function sanitize_toggle_control($val)
        {
        }
    }
    /**
     * Customizer Loader
     *
     * @since 1.0.0
     */
    class Astra_Customizer
    {
        /**
         * Contexts.
         *
         * @access private
         * @var object
         */
        private static $contexts;
        /**
         * Dynamic options.
         *
         * @since 3.1.0
         * @access private
         * @var object
         */
        private static $dynamic_options = array();
        /**
         * Tabful sections.
         *
         * @access private
         * @var array
         */
        private static $tabbed_sections = array();
        /**
         * Choices.
         *
         * @access private
         * @var object
         */
        private static $choices;
        /**
         * JS Configs.
         *
         * @access private
         * @var object
         */
        private static $js_configs;
        /**
         * Instance
         *
         * @access private
         * @var object
         */
        private static $instance;
        /**
         * Customizer Configurations.
         *
         * @access Private
         * @since 1.4.3
         * @var Array
         */
        private static $configuration;
        /**
         * All groups parent-child relation array data.
         *
         * @access Public
         * @since 2.0.0
         * @var Array
         */
        public static $group_configs = array();
        /**
         * Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Add site icon control in the site identity panel.
         *
         * @access public
         * @param WP_Customize_Manager $wp_customize Theme Customizer object.
         * @return void
         *
         * @since 3.6.9
         */
        public function customize_register_site_icon($wp_customize)
        {
        }
        /**
         * Reset font folder
         *
         * @access public
         * @return void
         *
         * @since 3.6.0
         */
        public function regenerate_astra_fonts_folder()
        {
        }
        /**
         *  Delete the cached partial configs.
         */
        public function delete_cached_partials()
        {
        }
        /**
         * Add dynamic control partial refresh.
         *
         * @since 3.1.0
         * @param array  $partial_args partial configs.
         * @param string $partial_id partial id.
         * @return array|mixed
         */
        public function filter_dynamic_partial_args($partial_args, $partial_id)
        {
        }
        /**
         * Add dynamic control settings.
         *
         * @since 3.1.0
         * @param array  $setting_args setting configs.
         * @param string $setting_id setting id.
         * @return mixed
         */
        public function filter_dynamic_setting_args($setting_args, $setting_id)
        {
        }
        /**
         * Prepare Contexts and choices.
         *
         * @since 3.0.0
         */
        public function prepare_customizer_javascript_configs()
        {
        }
        /**
         * Get control default.
         *
         * @param string $setting_key setting key.
         * @param array  $default_values default value array.
         * @return mixed|string
         */
        private function get_default_value($setting_key, $default_values)
        {
        }
        /**
         * Prepare tabbed sections for dynamic controls to optimize frontend JS calls.
         */
        private static function prepare_tabbed_sections()
        {
        }
        /**
         * Print Footer Scripts
         *
         * @since 1.0.0
         * @return void
         */
        public function print_footer_scripts()
        {
        }
        /**
         *  Set default context for WP default controls.
         */
        private static function set_default_context()
        {
        }
        /**
         * Bypass JS configs for Controls.
         *
         * @param array $configuration configuration.
         */
        public static function bypass_control_configs($configuration)
        {
        }
        /**
         * Prepare Panel Configs for Javascript.
         *
         * @since 3.0.0
         * @param array $config configs.
         */
        public function prepare_javascript_panel_configs($config)
        {
        }
        /**
         * Prepare Section Configs for Javascript.
         *
         * @since 3.0.0
         * @param array $config configs.
         */
        public function prepare_javascript_section_configs($config)
        {
        }
        /**
         * Prepare Sub Control Configs for Javascript.
         *
         * @since 3.0.0
         * @param array $config configs.
         */
        public function prepare_javascript_sub_control_configs($config)
        {
        }
        /**
         * Get the Link for Control.
         *
         * @since 3.0.0
         * @param array $id Control ID.
         */
        public static function get_control_link($id)
        {
        }
        /**
         * Prepare Control Configs for Javascript.
         *
         * @since 3.0.0
         * @param array $config configs.
         */
        public function prepare_javascript_control_configs($config)
        {
        }
        /**
         * Map and add sanitize callback to JS configs.
         *
         * @param array $config js config array.
         * @return mixed
         */
        public function sanitize_control($config)
        {
        }
        /**
         * Add controls for which active_callback is added.
         *
         * @since 3.0.0
         * @param array $config config.
         */
        public function prepare_preload_controls($config)
        {
        }
        /**
         * Prepare Group configs to visible sub-controls.
         *
         * @since 3.0.0
         * @param object $wp_customize customizer object.
         */
        public function prepare_group_configs($wp_customize)
        {
        }
        /**
         * Prepare context.
         *
         * @return mixed|void
         */
        public static function get_contexts()
        {
        }
        /**
         * Prepare choices.
         *
         * @return mixed|void
         */
        public static function get_choices()
        {
        }
        /**
         * Prepare javascript configs.
         *
         * @return mixed|void
         */
        public static function get_js_configs()
        {
        }
        /**
         * Prepare tabbed sections.
         *
         * @return mixed|void
         */
        public static function get_tabbed_sections()
        {
        }
        /**
         * Prepare default values for the control.
         *
         * @return array
         */
        private function get_control_defaults()
        {
        }
        /**
         * Add customizer script.
         *
         * @since 3.0.0
         */
        public function enqueue_customizer_scripts()
        {
        }
        /**
         * Check if string is start with a string provided.
         *
         * @param string $string main string.
         * @param string $start_string string to search.
         * @since 2.0.0
         * @return bool.
         */
        public function starts_with($string, $start_string)
        {
        }
        /**
         * Filter and return Customizer Configurations.
         *
         * @since 1.4.3
         * @return Array Customizer Configurations for registering Sections/Panels/Controls.
         */
        private function get_customizer_configurations()
        {
        }
        /**
         * Return default values for the Customize Configurations.
         *
         * @since 1.4.3
         * @return Array default values for the Customizer Configurations.
         */
        private function get_astra_customizer_configuration_defaults()
        {
        }
        /**
         * Include Customizer Configuration files.
         *
         * @since 1.4.3
         * @return void
         */
        public function include_configurations()
        {
        }
        /**
         * Register custom section and panel.
         *
         * @since 1.0.0
         * @param WP_Customize_Manager $wp_customize Theme Customizer object.
         */
        public function customize_register_panel($wp_customize)
        {
        }
        /**
         * Add postMessage support for site title and description for the Theme Customizer.
         *
         * @since 1.0.0
         * @param WP_Customize_Manager $wp_customize Theme Customizer object.
         */
        public function customize_register($wp_customize)
        {
        }
        /**
         * Add upgrade link configurations controls.
         *
         * @since 1.0.0
         * @param WP_Customize_Manager $wp_customize Theme Customizer object.
         */
        public function astra_pro_upgrade_configurations($wp_customize)
        {
        }
        /**
         * Customizer Controls
         *
         * @since 1.0.0
         * @return void
         */
        public function controls_scripts()
        {
        }
        /**
         * Generates HTML for font dropdown.
         *
         * @return string
         */
        public function generate_font_dropdown()
        {
        }
        /**
         * Customizer Preview Init
         *
         * @since 1.0.0
         * @return void
         */
        public function preview_init()
        {
        }
        /**
         * Called by the customize_save_after action to refresh
         * the cached CSS when Customizer settings are saved.
         *
         * @since 1.0.0
         * @return void
         */
        public function customize_save()
        {
        }
        /**
         * Add logo image sizes in filter.
         *
         * @since 1.0.0
         * @param array $sizes Sizes.
         * @param array $metadata attachment data.
         *
         * @return array
         */
        public static function logo_image_sizes($sizes, $metadata)
        {
        }
        /**
         * Generate logo image by its width.
         *
         * @since 1.0.0
         * @param int $custom_logo_id Logo id.
         */
        public static function generate_logo_by_width($custom_logo_id)
        {
        }
        /**
         * Customizer Preview icon CSS
         *
         * @since 1.0.0
         * @return void
         */
        public function preview_styles()
        {
        }
    }
    /**
     * Font info class for System and Google fonts.
     */
    final class Astra_Font_Families
    {
        /**
         * System Fonts
         *
         * @since 1.0.19
         * @var array
         */
        public static $system_fonts = array();
        /**
         * Google Fonts
         *
         * @since 1.0.19
         * @var array
         */
        public static $google_fonts = array();
        /**
         * Get System Fonts
         *
         * @since 1.0.19
         *
         * @return Array All the system fonts in Astra
         */
        public static function get_system_fonts()
        {
        }
        /**
         * Custom Fonts
         *
         * @since 1.0.19
         *
         * @return Array All the custom fonts in Astra
         */
        public static function get_custom_fonts()
        {
        }
        /**
         * Variant labels.
         *
         * @since 3.8.0
         * @return array
         */
        public static function font_variant_labels()
        {
        }
        /**
         * Google Fonts used in astra.
         * Array is generated from the google-fonts.json file.
         *
         * @since  1.0.19
         *
         * @return Array Array of Google Fonts.
         */
        public static function get_google_fonts()
        {
        }
    }
    /**
     * Fonts Data
     */
    final class Astra_Fonts_Data
    {
        /**
         * Localize Fonts
         */
        public static function js()
        {
        }
    }
    /**
     * Astra Fonts
     */
    final class Astra_Fonts
    {
        /**
         * Get fonts to generate.
         *
         * @since 1.0.0
         * @var array $fonts
         */
        private static $fonts = array();
        /**
         * Adds data to the $fonts array for a font to be rendered.
         *
         * @since 1.0.0
         * @param string $name The name key of the font to add.
         * @param array  $variants An array of weight variants.
         * @return void
         */
        public static function add_font($name, $variants = array())
        {
        }
        /**
         * Get Fonts
         */
        public static function get_fonts()
        {
        }
        /**
         * Renders the <link> tag for all fonts in the $fonts array.
         *
         * @since 1.0.16 Added the filter 'astra_render_fonts' to support custom fonts.
         * @since 1.0.0
         * @return void
         */
        public static function render_fonts()
        {
        }
        /**
         * Google Font URL
         * Combine multiple google font in one URL
         *
         * @link https://shellcreeper.com/?p=1476
         * @param array $fonts      Google Fonts array.
         * @param array $subsets    Font's Subsets array.
         *
         * @return string
         */
        public static function google_fonts_url($fonts, $subsets = array())
        {
        }
    }
    /**
     * Register Astra Accessibility Configurations.
     */
    class Astra_Accessibility_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Astra Accessibility Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 4.1.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Site Layout Customizer Configurations.
     */
    class Astra_Block_Editor_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Site Layout Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.8.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Builder Customizer Configurations.
     *
     * @since 3.0.0
     */
    class Astra_Button_Component_Configs
    {
        /**
         * Register Builder Customizer Configurations.
         *
         * @param Array  $configurations Configurations.
         * @param string $builder_type Builder Type.
         * @param string $section Section.
         *
         * @since 3.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public static function register_configuration($configurations, $builder_type = 'header', $section = 'section-hb-button-')
        {
        }
    }
    /**
     * Register Builder Customizer Configurations.
     *
     * @since 3.0.0
     */
    class Astra_Html_Component_Configs
    {
        /**
         * Register Builder Customizer Configurations.
         *
         * @param Array  $configurations Configurations.
         * @param string $builder_type Builder Type.
         * @param string $section Section.
         *
         * @since 3.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public static function register_configuration($configurations, $builder_type = 'header', $section = 'section-hb-html-')
        {
        }
    }
    /**
     * Register Builder Customizer Configurations.
     *
     * @since 3.0.0
     */
    class Astra_Social_Icon_Component_Configs
    {
        /**
         * Register Builder Customizer Configurations.
         *
         * @param Array  $configurations Configurations.
         * @param string $builder_type Builder Type.
         * @param string $section Section slug.
         * @since 3.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public static function register_configuration($configurations, $builder_type = 'header', $section = 'section-hb-social-icons-')
        {
        }
    }
    /**
     * Class Astra_Builder_Base_Configuration.
     */
    final class Astra_Builder_Base_Configuration
    {
        /**
         * Member Variable
         *
         * @var instance
         */
        private static $instance = \null;
        /**
         *  Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Prepare Advance header configuration.
         *
         * @param string $section_id section id.
         * @return array
         */
        public static function prepare_advanced_tab($section_id)
        {
        }
        /**
         * Prepare Advance Typography configuration.
         *
         * @param string $section_id section id.
         * @param array  $required_condition Required Condition.
         * @param array  $divider_setup Required divider setup.
         * @return array
         */
        public static function prepare_typography_options($section_id, $required_condition = array(), $divider_setup = array())
        {
        }
        /**
         * Prepare Visibility options.
         *
         * @param string $_section section id.
         * @param string $builder_type Builder Type.
         * @return array
         */
        public static function prepare_visibility_tab($_section, $builder_type = 'header')
        {
        }
        /**
         * Prepare common options for the widgets by type.
         *
         * @param string $type type.
         * @return array
         */
        public static function prepare_widget_options($type = 'header')
        {
        }
    }
    /**
     * Register Above footer Customizer Configurations.
     *
     * @since 3.0.0
     */
    class Astra_Customizer_Above_Footer_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Builder Above Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Below footer Customizer Configurations.
     *
     * @since 3.0.0
     */
    class Astra_Customizer_Below_Footer_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Builder Below footer Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Builder Customizer Configurations.
     *
     * @since 3.0.0
     */
    class Astra_Customizer_Copyright_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Builder Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Builder Customizer Configurations.
     *
     * @since 3.0.0
     */
    class Astra_Customizer_Footer_Builder_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Footer Zones.
         *
         * @var array
         * @since 3.0.0
         */
        public static $zones = array('above' => array(), 'primary' => array(), 'below' => array());
        /**
         * Register Builder Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Builder Customizer Configurations.
     *
     * @since 3.0.0
     */
    class Astra_Customizer_Footer_Menu_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Builder Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Social Icons Customizer Configurations.
     *
     * @since 3.0.0
     */
    class Astra_Customizer_Footer_Social_Icons_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Social Icons Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Builder Customizer Configurations.
     *
     * @since 3.0.0
     */
    class Astra_Customizer_Primary_Footer_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Builder Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Builder Customizer Configurations.
     *
     * @since 3.0.0
     */
    class Astra_Footer_Button_Component_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Builder Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Builder Customizer Configurations.
     *
     * @since 3.0.0
     */
    class Astra_Footer_Html_Component_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Builder Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Builder Customizer Configurations.
     *
     * @since 3.0.0
     */
    class Astra_Footer_Widget_Component_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Builder Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Above Header Customizer Configurations.
     *
     * @since 3.0.0
     */
    class Astra_Customizer_Above_Header_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Builder Above Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Below Header Customizer Configurations.
     *
     * @since 3.0.0
     */
    class Astra_Customizer_Below_Header_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Builder Below Header Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Builder Customizer Configurations.
     *
     * @since 3.0.0
     */
    class Astra_Customizer_Edd_Cart_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Builder Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Builder Customizer Configurations.
     *
     * @since 3.0.0
     */
    class Astra_Customizer_Header_Builder_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Builder Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Builder Customizer Configurations.
     *
     * @since 3.0.0
     */
    class Astra_Customizer_Header_Widget_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Builder Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Builder Customizer Configurations.
     *
     * @since 3.0.0
     */
    class Astra_Customizer_Mobile_Trigger_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Builder Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Off Canvas Customizer Configurations.
     *
     * @since 3.0.0
     */
    class Astra_Customizer_Off_Canvas_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Builder Above Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Builder Customizer Configurations.
     *
     * @since 3.0.0
     */
    class Astra_Customizer_Primary_Header_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Builder Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Site Identity Customizer Configurations.
     *
     * @since 3.0.0
     */
    class Astra_Customizer_Site_Identity_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Builder Site Identity Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Builder Customizer Configurations.
     *
     * @since 3.0.0
     */
    class Astra_Customizer_Woo_Cart_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Builder Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Builder Customizer Configurations.
     *
     * @since 3.0.0
     */
    class Astra_Header_Account_Component_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Builder Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register below header Configurations.
     */
    class Astra_Header_Button_Component_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Button control for Header/Footer Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Builder Customizer Configurations.
     *
     * @since 3.0.0
     */
    class Astra_Header_Html_Component_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Builder Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Builder Customizer Configurations.
     *
     * @since 3.0.0
     */
    class Astra_Header_Menu_Component_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Builder Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Builder Customizer Configurations.
     *
     * @since 3.0.0
     */
    class Astra_Header_Search_Component_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Builder Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Builder Customizer Configurations.
     *
     * @since 3.0.0
     */
    class Astra_Header_Social_Icon_Component_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Builder Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Builder Customizer Configurations.
     *
     * @since 3.0.0
     */
    class Astra_Mobile_Menu_Component_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Builder Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Button Customizer Configurations.
     */
    class Astra_Customizer_Button_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Button Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Button Customizer Configurations.
     */
    class Astra_Existing_Button_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Button Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 2.6.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Advanced Footer Color Customizer Configurations.
     */
    class Astra_Advanced_Footer_Colors_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Advanced Footer Color Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Body Color Customizer Configurations.
     */
    class Astra_Body_Colors_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Body Color Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Footer Color Configurations.
     */
    class Astra_Footer_Colors_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Footer Color Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Astra Global Misc Configurations.
     */
    class Astra_Global_Misc_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Astra Global Misc  Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 4.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Blog Layout Customizer Configurations.
     */
    class Astra_Blog_Layout_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Blog Layout Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Blog Single Layout Configurations.
     */
    class Astra_Blog_Single_Layout_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Blog Single Layout Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Footer Layout Configurations.
     */
    class Astra_Footer_Layout_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Footer Layout Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Header Layout Customizer Configurations.
     */
    class Astra_Header_Layout_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Header Layout Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Astra Sidebar Layout Configurations.
     */
    class Astra_Sidebar_Layout_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Astra Sidebar Layout Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Astra Site Container Layout Customizer Configurations.
     */
    class Astra_Site_Container_Layout_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Astra Site Container Layout Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Astra Customizerr Site identity Customizer Configurations.
     */
    class Astra_Site_Identity_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Astra Customizerr Site identity Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
        /**
         * Check if transparent header is enabled on the page being previewed.
         *
         * @since  2.4.5
         * @return boolean True - If Transparent Header is enabled, False if not.
         */
        public function is_transparent_header_enabled()
        {
        }
        /**
         * Help notice message to be displayed when the page that is being previewed has Logo set from Transparent Header.
         *
         * @since  2.4.5
         * @param String $context Type of notice message to be returned.
         * @return String HTML Markup for the help notice.
         */
        private function get_help_text_notice($context)
        {
        }
    }
    /**
     * Register Site Layout Customizer Configurations.
     */
    class Astra_Site_Layout_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Site Layout Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     */
    class Astra_Archive_Typo_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Archive Typography Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     */
    class Astra_Body_Typo_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Body Typography Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     */
    class Astra_Content_Typo_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Content Typography Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     */
    class Astra_Global_Typo_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Body Typography Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     */
    class Astra_Header_Typo_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Header Typography Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     */
    class Astra_Headings_Typo_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register headings Typography Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.7.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Customizer Single Typography Configurations.
     *
     * @since 1.4.3
     */
    class Astra_Single_Typo_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Single Typography configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 1.4.3
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Customizer Sanitizes Initial setup
     */
    class Astra_Customizer_Control_Base
    {
        /**
         * Registered Controls.
         *
         * @since 1.4.3
         * @var Array
         */
        private static $controls;
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Enqueue Admin Scripts
         *
         * @since 1.4.3
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Add Control to self::$controls and Register control to WordPress Customizer.
         *
         * @param String $name Slug for the control.
         * @param Array  $atts Control Attributes.
         * @return void
         */
        public static function add_control($name, $atts)
        {
        }
        /**
         * Returns control instance
         *
         * @param  string $control_type control type.
         * @since 1.4.3
         * @return string
         */
        public static function get_control_instance($control_type)
        {
        }
        /**
         * Returns control and its attributes
         *
         * @param  string $control_type control type.
         * @since 1.4.3
         * @return array
         */
        public static function get_control($control_type)
        {
        }
        /**
         * Returns Santize callback for control
         *
         * @param  string $control control.
         * @since 1.4.3
         * @return string
         */
        public static function get_sanitize_call($control)
        {
        }
    }
    /**
     * A text control with validation for CSS units.
     */
    class Astra_Control_Customizer_Link extends \WP_Customize_Control
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'ast-customizer-link';
        /**
         * Link text to be added inside the anchor tag.
         *
         * @var string
         */
        public $link_text = '';
        /**
         * Linked customizer section.
         *
         * @var string
         */
        public $linked = '';
        /**
         * Linked customizer section.
         *
         * @var string
         */
        public $link_type = '';
        /**
         * True if the link is button.
         *
         * @var boolean
         */
        public $is_button_link = '';
        /**
         * Refresh the parameters passed to the JavaScript via JSON.
         *
         * @see WP_Customize_Control::to_json()
         */
        public function to_json()
        {
        }
        /**
         * Render the control's content.
         *
         * @see WP_Customize_Control::render_content()
         */
        protected function render_content()
        {
        }
    }
    /**
     * A text control with validation for CSS units.
     */
    class Astra_Control_Description extends \WP_Customize_Control
    {
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'ast-description';
        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $help = '';
        /**
         * Refresh the parameters passed to the JavaScript via JSON.
         *
         * @see WP_Customize_Control::to_json()
         */
        public function to_json()
        {
        }
        /**
         * Render the control's content.
         *
         * @see WP_Customize_Control::render_content()
         */
        protected function render_content()
        {
        }
    }
    /**
     * Typography control.
     */
    final class Astra_Control_Typography extends \WP_Customize_Control
    {
        /**
         * Used to connect controls to each other.
         *
         * @since 1.0.0
         * @var bool $connect
         */
        public $connect = \false;
        /**
         * Option name.
         *
         * @since 1.0.0
         * @var string $name
         */
        public $name = '';
        /**
         * Option label.
         *
         * @since 1.0.0
         * @var string $label
         */
        public $label = '';
        /**
         * Option description.
         *
         * @since 1.0.0
         * @var string $description
         */
        public $description = '';
        /**
         * Control type.
         *
         * @since 1.0.0
         * @var string $type
         */
        public $type = 'ast-font';
        /**
         * Used to connect variant controls to each other.
         *
         * @since 1.5.2
         * @var bool $variant
         */
        public $variant = \false;
        /**
         * Used to set the mode for code controls.
         *
         * @since 1.0.0
         * @var bool $mode
         */
        public $mode = 'html';
        /**
         * Used to set the default font options.
         *
         * @since 1.0.8
         * @var string $ast_inherit
         */
        public $ast_inherit = '';
        /**
         * All font weights
         *
         * @since 1.0.8
         * @var string $ast_inherit
         */
        public $ast_all_font_weight = array();
        /**
         * If true, the preview button for a control will be rendered.
         *
         * @since 1.0.0
         * @var bool $preview_button
         */
        public $preview_button = \false;
        /**
         * Set the default font options.
         *
         * @since 1.0.8
         * @param WP_Customize_Manager $manager Customizer bootstrap instance.
         * @param string               $id      Control ID.
         * @param array                $args    Default parent's arguments.
         */
        public function __construct($manager, $id, $args = array())
        {
        }
        /**
         * Refresh the parameters passed to the JavaScript via JSON.
         *
         * @see WP_Customize_Control::to_json()
         */
        public function to_json()
        {
        }
        /**
         * An Underscore (JS) template for this control's content (but not its container).
         *
         * Class variables for this control class are available in the `data` JS object;
         * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
         *
         * @see WP_Customize_Control::print_template()
         *
         * @access protected
         */
        protected function content_template()
        {
        }
    }
    /**
     * Adds a custom Panel for nested panels / sections.
     *
     * @link https://gist.github.com/OriginalEXE/9a6183e09f4cae2f30b006232bb154af
     * @since 1.0.31
     * @see WP_Customize_Panel
     */
    class Astra_WP_Customize_Panel extends \WP_Customize_Panel
    {
        /**
         * Panel
         *
         * @since 1.0.31
         * @var string
         */
        public $panel;
        /**
         * Control type.
         *
         * @since  1.0.31
         * @var string
         */
        public $type = 'ast_panel';
        /**
         * Get section parameters for JS.
         *
         * @since 1.0.31
         * @return array Exported parameters.
         */
        public function json()
        {
        }
    }
    /**
     * Adds a custom Customize Section for nested sections.
     *
     * @link https://gist.github.com/OriginalEXE/9a6183e09f4cae2f30b006232bb154af
     * @since 1.0.31
     * @see WP_Customize_Section
     */
    class Astra_WP_Customize_Section extends \WP_Customize_Section
    {
        /**
         * Section
         *
         * @since 1.0.31
         * @var string
         */
        public $section;
        /**
         * Control type.
         *
         * @since  1.0.31
         * @var string
         */
        public $type = 'ast_section';
        /**
         * Get section parameters for JS.
         *
         * @since 1.0.31
         * @return array Exported parameters.
         */
        public function json()
        {
        }
    }
    /**
     * Adds a custom Customize Section for section separator.
     *
     * @link https://gist.github.com/OriginalEXE/9a6183e09f4cae2f30b006232bb154af
     * @since 2.0.0
     * @see WP_Customize_Section
     */
    class Astra_WP_Customize_Separator extends \WP_Customize_Section
    {
        /**
         * Control type.
         *
         * @since  1.0.31
         * @var string
         */
        public $type = 'ast-section-separator';
        /**
         * Template for section separator
         *
         * @since 2.0.0
         */
        protected function render_template()
        {
        }
    }
    /**
     * Astra_Notices
     *
     * @since 1.0.0
     */
    class Astra_Notices
    {
        /**
         * Notices
         *
         * @access private
         * @var array Notices.
         * @since 1.0.0
         */
        private static $version = '1.1.11';
        /**
         * Notices
         *
         * @access private
         * @var array Notices.
         * @since 1.0.0
         */
        private static $notices = array();
        /**
         * Instance
         *
         * @access private
         * @var object Class object.
         * @since 1.0.0
         */
        private static $instance;
        /**
         * Initiator
         *
         * @since 1.0.0
         * @return object initialized object of class.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Filters and Returns a list of allowed tags and attributes for a given context.
         *
         * @param array  $allowedposttags array of allowed tags.
         * @param string $context Context type (explicit).
         * @since 1.0.0
         * @return array
         */
        public function add_data_attributes($allowedposttags, $context)
        {
        }
        /**
         * Add Notice.
         *
         * @since 1.0.0
         * @param array $args Notice arguments.
         * @return void
         */
        public static function add_notice($args = array())
        {
        }
        /**
         * Dismiss Notice.
         *
         * @since 1.0.0
         * @return void
         */
        public function dismiss_notice()
        {
        }
        /**
         * Enqueue Scripts.
         *
         * @since 1.0.0
         * @return void
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Sort the notices based on the given priority of the notice.
         * This function is called from usort()
         *
         * @since 1.5.2
         * @param array $notice_1 First notice.
         * @param array $notice_2 Second Notice.
         * @return array
         */
        public function sort_notices($notice_1, $notice_2)
        {
        }
        /**
         * Get all registered notices.
         * Since v1.1.8 it is recommended to register the notices on
         *
         * @return array|null
         */
        private function get_notices()
        {
        }
        /**
         * Get notice by notice_id
         *
         * @param string $notice_id Notice id.
         *
         * @return array notice based on the notice id.
         */
        private function get_notice_by_id($notice_id)
        {
        }
        /**
         * Display the notices in the WordPress admin.
         *
         * @since 1.0.0
         * @return void
         */
        public function show_notices()
        {
        }
        /**
         * Render a notice.
         *
         * @since 1.0.0
         * @param  array $notice Notice markup.
         * @return void
         */
        public static function markup($notice = array())
        {
        }
        /**
         * Get wrapper classes for a notice.
         *
         * @since 1.0.0
         *
         * @param  array $notice Notice arguments.
         * @return array       Notice wrapper classes.
         */
        private static function get_wrap_classes($notice)
        {
        }
        /**
         * Get HTML ID for a given notice.
         *
         * @since 1.0.0
         *
         * @param  array $notice Notice arguments.
         * @param  int   $key    Notice array index.
         * @return string HTML if for the notice.
         */
        private static function get_notice_id($notice, $key)
        {
        }
        /**
         * Check if the notice is expires.
         *
         * @since 1.0.0
         *
         * @param  array $notice Notice arguments.
         * @return boolean
         */
        private static function is_expired($notice)
        {
        }
        /**
         * Get base URL for the astra-notices.
         *
         * @return mixed URL.
         */
        public static function get_url()
        {
        }
    }
    /**
     * Abstract Astra_WP_Async_Request class.
     *
     * @abstract
     */
    abstract class Astra_WP_Async_Request
    {
        /**
         * Prefix
         *
         * (default value: 'wp')
         *
         * @var string
         * @access protected
         */
        protected $prefix = 'wp';
        /**
         * Action
         *
         * (default value: 'async_request')
         *
         * @var string
         * @access protected
         */
        protected $action = 'async_request';
        /**
         * Identifier
         *
         * @var mixed
         * @access protected
         */
        protected $identifier;
        /**
         * Data
         *
         * (default value: array())
         *
         * @var array
         * @access protected
         */
        protected $data = array();
        /**
         * Initiate new async request
         */
        public function __construct()
        {
        }
        /**
         * Set data used during the request
         *
         * @param array $data Data.
         *
         * @return $this
         */
        public function data($data)
        {
        }
        /**
         * Dispatch the async request
         *
         * @return array|WP_Error
         */
        public function dispatch()
        {
        }
        /**
         * Get query args
         *
         * @return array
         */
        protected function get_query_args()
        {
        }
        /**
         * Get query URL
         *
         * @return string
         */
        protected function get_query_url()
        {
        }
        /**
         * Get post args
         *
         * @return array
         */
        protected function get_post_args()
        {
        }
        /**
         * Maybe handle
         *
         * Check for correct nonce and pass to handler.
         */
        public function maybe_handle()
        {
        }
        /**
         * Handle
         *
         * Override this method to perform any actions required
         * during the async request.
         */
        protected abstract function handle();
    }
    /**
     * Abstract Astra_WP_Background_Process class.
     *
     * @abstract
     * @extends Astra_WP_Async_Request
     */
    abstract class Astra_WP_Background_Process extends \Astra_WP_Async_Request
    {
        /**
         * Action
         *
         * (default value: 'background_process')
         *
         * @var string
         * @access protected
         */
        protected $action = 'background_process';
        /**
         * Start time of current process.
         *
         * (default value: 0)
         *
         * @var int
         * @access protected
         */
        protected $start_time = 0;
        /**
         * Cron_hook_identifier
         *
         * @var mixed
         * @access protected
         */
        protected $cron_hook_identifier;
        /**
         * Cron_interval_identifier
         *
         * @var mixed
         * @access protected
         */
        protected $cron_interval_identifier;
        /**
         * Initiate new background process
         */
        public function __construct()
        {
        }
        /**
         * Dispatch
         *
         * @access public
         * @return void
         */
        public function dispatch()
        {
        }
        /**
         * Push to queue
         *
         * @param mixed $data Data.
         *
         * @return $this
         */
        public function push_to_queue($data)
        {
        }
        /**
         * Save queue
         *
         * @return $this
         */
        public function save()
        {
        }
        /**
         * Update queue
         *
         * @param string $key Key.
         * @param array  $data Data.
         *
         * @return $this
         */
        public function update($key, $data)
        {
        }
        /**
         * Delete queue
         *
         * @param string $key Key.
         *
         * @return $this
         */
        public function delete($key)
        {
        }
        /**
         * Generate key
         *
         * Generates a unique key based on microtime. Queue items are
         * given a unique key so that they can be merged upon save.
         *
         * @param int $length Length.
         *
         * @return string
         */
        protected function generate_key($length = 64)
        {
        }
        /**
         * Maybe process queue
         *
         * Checks whether data exists within the queue and that
         * the process is not already running.
         */
        public function maybe_handle()
        {
        }
        /**
         * Is queue empty
         *
         * @return bool
         */
        protected function is_queue_empty()
        {
        }
        /**
         * Is process running
         *
         * Check whether the current process is already running
         * in a background process.
         */
        protected function is_process_running()
        {
        }
        /**
         * Lock process
         *
         * Lock the process so that multiple instances can't run simultaneously.
         * Override if applicable, but the duration should be greater than that
         * defined in the time_exceeded() method.
         */
        protected function lock_process()
        {
        }
        /**
         * Unlock process
         *
         * Unlock the process so that other instances can spawn.
         *
         * @return $this
         */
        protected function unlock_process()
        {
        }
        /**
         * Get batch
         *
         * @return stdClass Return the first batch from the queue
         */
        protected function get_batch()
        {
        }
        /**
         * Handle
         *
         * Pass each queue item to the task handler, while remaining
         * within server memory and time limit constraints.
         */
        protected function handle()
        {
        }
        /**
         * Memory exceeded
         *
         * Ensures the batch process never exceeds 90%
         * of the maximum WordPress memory.
         *
         * @return bool
         */
        protected function memory_exceeded()
        {
        }
        /**
         * Get memory limit
         *
         * @return int
         */
        protected function get_memory_limit()
        {
        }
        /**
         * Time exceeded.
         *
         * Ensures the batch never exceeds a sensible time limit.
         * A timeout limit of 30s is common on shared hosting.
         *
         * @return bool
         */
        protected function time_exceeded()
        {
        }
        /**
         * Complete.
         *
         * Override if applicable, but ensure that the below actions are
         * performed, or, call parent::complete().
         */
        protected function complete()
        {
        }
        /**
         * Schedule cron healthcheck
         *
         * @access public
         * @param mixed $schedules Schedules.
         * @return mixed
         */
        public function schedule_cron_healthcheck($schedules)
        {
        }
        /**
         * Handle cron healthcheck
         *
         * Restart the background process if not already running
         * and data exists in the queue.
         */
        public function handle_cron_healthcheck()
        {
        }
        /**
         * Schedule event
         */
        protected function schedule_event()
        {
        }
        /**
         * Clear scheduled event
         */
        protected function clear_scheduled_event()
        {
        }
        /**
         * Cancel Process
         *
         * Stop processing queue items, clear cronjob and delete batch.
         *
         */
        public function cancel_process()
        {
        }
        /**
         * Task
         *
         * Override this method to perform any actions required on each
         * queue item. Return the modified item for further processing
         * in the next pass through. Or, return false to remove the
         * item from the queue.
         *
         * @param mixed $item Queue item to iterate over.
         *
         * @return mixed
         */
        protected abstract function task($item);
    }
    /**
     * Download webfonts locally.
     *
     * @package WPTT/webfont-loader
     * @license https://opensource.org/licenses/MIT
     *
     * @since 3.6.0
     */
    /**
     * Download webfonts locally.
     */
    class Astra_WebFont_Loader
    {
        /**
         * The font-format.
         *
         * Use "woff" or "woff2".
         * This will change the user-agent user to make the request.
         *
         * @access protected
         * @since 3.6.0
         * @var string
         */
        protected $font_format = 'woff2';
        /**
         * The remote URL.
         *
         * @access protected
         * @since 3.6.0
         * @var string
         */
        protected $remote_url;
        /**
         * Base path.
         *
         * @access protected
         * @since 3.6.0
         * @var string
         */
        protected $base_path;
        /**
         * Base URL.
         *
         * @access protected
         * @since 3.6.0
         * @var string
         */
        protected $base_url;
        /**
         * Subfolder name.
         *
         * @access protected
         * @since 3.6.0
         * @var string
         */
        protected $subfolder_name;
        /**
         * The fonts folder.
         *
         * @access protected
         * @since 3.6.0
         * @var string
         */
        protected $fonts_folder;
        /**
         * The local stylesheet's path.
         *
         * @access protected
         * @since 3.6.0
         * @var string
         */
        protected $local_stylesheet_path;
        /**
         * The local stylesheet's URL.
         *
         * @access protected
         * @since 3.6.0
         * @var string
         */
        protected $local_stylesheet_url;
        /**
         * The remote CSS.
         *
         * @access protected
         * @since 3.6.0
         * @var string
         */
        protected $remote_styles;
        /**
         * The final CSS.
         *
         * @access protected
         * @since 3.6.0
         * @var string
         */
        protected $css;
        /**
         * Cleanup routine frequency.
         */
        const CLEANUP_FREQUENCY = 'monthly';
        /**
         * Constructor.
         *
         * Get a new instance of the object for a new URL.
         *
         * @access public
         * @since 3.6.0
         * @param string $url The remote URL.
         */
        public function __construct($url = '')
        {
        }
        /**
         * Get the local URL which contains the styles.
         *
         * Fallback to the remote URL if we were unable to write the file locally.
         *
         * @access public
         * @since 3.6.0
         * @return string
         */
        public function get_url()
        {
        }
        /**
         * Get the local stylesheet URL.
         *
         * @access public
         * @since 3.6.0
         * @return string
         */
        public function get_local_stylesheet_url()
        {
        }
        /**
         * Get styles with fonts downloaded locally.
         *
         * @access public
         * @since 3.6.0
         * @return string
         */
        public function get_styles()
        {
        }
        /**
         * Get local stylesheet contents.
         *
         * @access public
         * @since 3.6.0
         * @return string|false Returns the remote URL contents.
         */
        public function get_local_stylesheet_contents()
        {
        }
        /**
         * Get remote file contents.
         *
         * @access public
         * @since 3.6.0
         * @return string Returns the remote URL contents.
         */
        public function get_remote_url_contents()
        {
        }
        /**
         * Download files mentioned in our CSS locally.
         *
         * @access public
         * @since 3.6.0
         * @return array Returns an array of remote URLs and their local counterparts.
         */
        public function get_local_files_from_css()
        {
        }
        /**
         * Get the font files and preload them.
         *
         * @access public
         */
        public function preload_local_fonts()
        {
        }
        /**
         * Get font files from the CSS.
         *
         * @access public
         * @since 3.6.0
         * @param string $remote_styles Remote stylesheet data.
         *
         * @return array Returns an array of font-families and the font-files used.
         */
        public function get_remote_files_from_css($remote_styles = '')
        {
        }
        /**
         * Write the CSS to the filesystem.
         *
         * @access protected
         * @since 3.6.0
         * @return string|false Returns the absolute path of the file on success, or false on fail.
         */
        protected function write_stylesheet()
        {
        }
        /**
         * Get the stylesheet path.
         *
         * @access public
         * @since 3.6.0
         * @return string
         */
        public function get_local_stylesheet_path()
        {
        }
        /**
         * Get the local stylesheet filename.
         *
         * This is a hash, generated from the site-URL, the wp-content path and the URL.
         * This way we can avoid issues with sites changing their URL, or the wp-content path etc.
         *
         * @access public
         * @since 3.6.0
         * @return string
         */
        public function get_local_stylesheet_filename()
        {
        }
        /**
         * Set the font-format to be used.
         *
         * @access public
         * @since 3.6.0
         * @param string $format The format to be used. Use "woff" or "woff2".
         * @return void
         */
        public function set_font_format($format = 'woff2')
        {
        }
        /**
         * Check if the local stylesheet exists.
         *
         * @access public
         * @since 3.6.0
         * @return bool
         */
        public function local_file_exists()
        {
        }
        /**
         * Get the base path.
         *
         * @access public
         * @since 3.6.0
         * @return string
         */
        public function get_base_path()
        {
        }
        /**
         * Get the base URL.
         *
         * @access public
         * @since 3.6.0
         * @return string
         */
        public function get_base_url()
        {
        }
        /**
         * Get the subfolder name.
         *
         * @access public
         * @since 3.6.0
         * @return string
         */
        public function get_subfolder_name()
        {
        }
        /**
         * Get the folder for fonts.
         *
         * @access public
         * @return string
         */
        public function get_fonts_folder()
        {
        }
        /**
         * Schedule a cleanup.
         *
         * Deletes the fonts files on a regular basis.
         * This way font files will get updated regularly,
         * and we avoid edge cases where unused files remain in the server.
         *
         * @access public
         * @since 3.6.0
         * @return void
         */
        public function schedule_cleanup()
        {
        }
        /**
         * Delete the fonts folder.
         *
         * This runs as part of a cleanup routine.
         *
         * @access public
         * @since 3.6.0
         * @return bool
         */
        public function astra_delete_fonts_folder()
        {
        }
        /**
         * Get the filesystem.
         *
         * @access protected
         * @since 3.6.0
         * @return \WP_Filesystem_Base
         */
        protected function get_filesystem()
        {
        }
    }
    /**
     * Meta Box
     */
    class Astra_Meta_Box_Operations
    {
        /**
         * Instance
         *
         * @var $instance
         */
        private static $instance;
        /**
         * Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Metabox Hooks
         */
        public function meta_hooks()
        {
        }
        /**
         * Primary Header
         */
        public function primary_header()
        {
        }
        /**
         * Disable Post / Page Title
         *
         * @param  boolean $defaults Show default post title.
         * @return boolean           Status of default post title.
         */
        public function post_title($defaults)
        {
        }
        /**
         * Add Body Classes
         *
         * @param  array $classes Body Classes Array.
         * @return array
         */
        public function body_class($classes)
        {
        }
    }
    /**
     * Meta Boxes setup
     */
    class Astra_Meta_Boxes
    {
        /**
         * Instance
         *
         * @var $instance
         */
        private static $instance;
        /**
         * Meta Option
         *
         * @var $meta_option
         */
        private static $meta_option;
        /**
         * Initiator
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Register Post Meta options support.
         *
         * @since 3.7.6
         * @param array|mixed $args the post type args.
         * @param string      $post_type the post type.
         */
        public function custom_fields_support($args, $post_type)
        {
        }
        /**
         * Check if layout is bb themer's layout
         */
        public static function is_bb_themer_layout()
        {
        }
        /**
         *  Remove Metabox for beaver themer specific layouts
         */
        public function remove_metabox()
        {
        }
        /**
         *  Init Metabox
         */
        public function init_metabox()
        {
        }
        /**
         *  Setup Metabox
         */
        public function setup_meta_box()
        {
        }
        /**
         * Get metabox options
         */
        public static function get_meta_option()
        {
        }
        /**
         * Metabox Markup
         *
         * @param  object $post Post object.
         * @return void
         */
        public function markup_meta_box($post)
        {
        }
        /**
         * Metabox Save
         *
         * @param  number $post_id Post ID.
         * @return void
         */
        public function save_meta_box($post_id)
        {
        }
        /**
         * Register Script for Meta options
         */
        public function register_script()
        {
        }
        /**
         * Enqueue Script for Meta settings.
         *
         * @return void
         */
        public function load_scripts()
        {
        }
        /**
         * Get all Sidebar Options.
         */
        public function get_sidebar_options()
        {
        }
        /**
         * Get Contenr Layout Options.
         */
        public function get_content_layout_options()
        {
        }
        /**
         * Get header related sub-meta fields.
         *
         * @return array $astra_header_options All header dependent toggle based page elements.
         */
        public function get_header_disable_meta_fields()
        {
        }
        /**
         * Get disable section fields.
         *
         * @return array $astra_page_meta_elements All toggle based page elements.
         */
        public function get_disable_section_fields()
        {
        }
        /**
         * Get sticky header options.
         */
        public function get_sticky_header_options()
        {
        }
        /**
         * Get all transparet and sticky header options.
         */
        public function get_header_enabled_options()
        {
        }
        /**
         * Checking the page headers are available and have some posts with it.
         *
         * @since 3.8.0
         * @return bool true|false.
         */
        public function check_page_header_availability()
        {
        }
        /**
         * Get page header Options.
         */
        public function get_page_header_options()
        {
        }
        /**
         * Register Post Meta options for react based fields.
         *
         * @since 3.7.4
         */
        public function register_meta_settings()
        {
        }
        /**
         * Setup meta options for Astra meta settings.
         *
         * @since 3.7.8
         */
        public static function post_meta_options()
        {
        }
    }
    /**
     * Post Strctures Initial Setup
     *
     * @since 4.0.0
     */
    class Astra_Post_Structures
    {
        /**
         * Constructor function that loads require files.
         */
        public function __construct()
        {
        }
    }
    /**
     * Customizer Initialization
     *
     * @since 4.0.0
     */
    class Astra_Posts_Structure_Loader
    {
        /**
         * Instance
         *
         * @var array $customizer_defaults
         */
        private static $customizer_defaults = array();
        /**
         * Supported post types to process dynamic customizer.
         *
         * @var array $supported_post_types
         */
        private static $supported_post_types = array();
        /**
         *  Constructor
         *
         * @since 4.0.0
         */
        public function __construct()
        {
        }
        /**
         * Enqueue google fonts.
         *
         * @return void
         * @since 4.0.0
         */
        public function add_fonts()
        {
        }
        /**
         * Add postMessage support for site title and description for the Theme Customizer.
         *
         * @param WP_Customize_Manager $wp_customize Theme Customizer object.
         *
         * @since 4.0.0
         */
        public function posts_structures_customize_register($wp_customize)
        {
        }
        /**
         * Get all supported pots types & filter the public ones for further query.
         *
         * @since 4.0.0
         * @return array $post_types
         */
        public static function get_supported_post_types()
        {
        }
        /**
         * Customizer preview support.
         *
         * @since 4.0.0
         */
        public function preview_scripts()
        {
        }
        /**
         * Get customizer dynamic default.
         *
         * @param string $key Retrieve default for this parameter.
         *
         * @since 4.0.0
         */
        public static function get_customizer_default($key)
        {
        }
    }
    /**
     * Breadcrumbs Markup Initial Setup
     *
     * @since 4.0.0
     */
    class Astra_Posts_Structure_Markup
    {
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Check eligibility to override default entry header.
         *
         * @since 4.0.0
         * @return void
         */
        public function astra_add_hero_section_markup()
        {
        }
        /**
         * Support custom title & description support for archive.
         *
         * @param string $title Default archive title.
         * @since 4.0.0
         * @return string
         */
        public function astra_archive_custom_title($title)
        {
        }
        /**
         * Override default entry header.
         *
         * @since 4.0.0
         * @return void
         */
        public function override_entry_header()
        {
        }
        /**
         * Layout 1 will also needed for WooCommerce product.
         * Case: WooCommerce by default adds "Shop" title, breadcrumb on shop/product-archive frontend, but this should also get linked to banner layout 1.
         *
         * @since 4.0.0
         * @return void
         */
        public function astra_woocommerce_banner_layout_1_compatibility()
        {
        }
        /**
         * Enable layout 1 for some cases. Ex. WC Product.
         *
         * @since 4.0.0
         * @return void
         */
        public function astra_force_render_banner_layout_1()
        {
        }
    }
    /**
     * Register Posts Structures Customizer Configurations.
     *
     * @since 4.0.0
     */
    class Astra_Posts_Archive_Structures_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Getting dynamic context for sidebar.
         * Compatibility case: Narrow width + dynamic customizer controls.
         *
         * @param string $post_type On basis of this will decide to hide sidebar control or not.
         * @return mixed
         * @since 4.0.0
         */
        public function get_sidebar_context($post_type)
        {
        }
        /**
         * Getting content layout dynamically.
         * Compatibility case: Narrow width + dynamic customizer controls.
         *
         * @param string $post_type On basis of this will decide to show narrow-width layout or not.
         * @since 4.0.0
         */
        public function get_content_layout_choices($post_type)
        {
        }
        /**
         * Register Single Post's Structures Customizer Configurations.
         *
         * @param string $parent_section Section of dynamic customizer.
         * @param string $post_type Post Type.
         * @since 4.0.0
         *
         * @return array Customizer Configurations.
         */
        public function get_layout_configuration($parent_section, $post_type)
        {
        }
        /**
         * Register Posts Structures Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 4.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Posts Strctures Customizer Configurations.
     *
     * @since 4.0.0
     */
    class Astra_Posts_Single_Structures_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Getting dynamic context for sidebar.
         * Compatibility case: Narrow width + dynamic customizer controls.
         *
         * @param string $post_type On basis of this will decide to hide sidebar control or not.
         * @since 4.0.0
         */
        public function get_sidebar_context($post_type)
        {
        }
        /**
         * Getting content layout dynamically.
         * Compatibility case: Narrow width + dynamic customizer controls.
         *
         * @param string $post_type On basis of this will decide to show narrow-width layout or not.
         * @since 4.0.0
         */
        public function get_content_layout_choices($post_type)
        {
        }
        /**
         * Register Single Post's Structures Customizer Configurations.
         *
         * @param string $parent_section Section of dynamic customizer.
         * @param string $post_type Post Type.
         * @since 4.0.0
         *
         * @return array Customizer Configurations.
         */
        public function get_layout_configuration($parent_section, $post_type)
        {
        }
        /**
         * Register Posts Strctures Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 4.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Register Posts Structures Customizer Configurations.
     *
     * @since 4.0.0
     */
    class Astra_Posts_Structures_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Excluding some post types with avoiding narrow-width container layout.
         *
         * @return array
         * @since 4.0.0
         */
        public static function get_narrow_width_exculde_cpts()
        {
        }
        /**
         * Function to get formatted dynamic cpt section title.
         *
         * @since 4.0.2
         * @param object|null $post_type_obj WP_Post_Type object.
         * @param string      $label fallback label.
         * @return string formatted label.
         */
        public static function astra_get_dynamic_section_title($post_type_obj, $label)
        {
        }
        /**
         * Register Posts Structures Customizer Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 4.0.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Customizer Initialization
     *
     * @since 3.5.0
     */
    class Astra_Related_Posts_Loader
    {
        /**
         *  Constructor
         *
         * @since 3.5.0
         */
        public function __construct()
        {
        }
        /**
         * Enqueue google fonts.
         *
         * @return void
         */
        public function add_fonts()
        {
        }
        /**
         * Set Options Default Values
         *
         * @param  array $defaults  Astra options default value array.
         * @return array
         */
        public function theme_defaults($defaults)
        {
        }
        /**
         * Add postMessage support for site title and description for the Theme Customizer.
         *
         * @param WP_Customize_Manager $wp_customize Theme Customizer object.
         *
         * @since 3.5.0
         */
        public function related_posts_customize_register($wp_customize)
        {
        }
        /**
         * Render the Related Posts title for the selective refresh partial.
         *
         * @since 3.5.0
         */
        public function render_related_posts_title()
        {
        }
    }
    /**
     * Breadcrumbs Markup Initial Setup
     *
     * @since 3.5.0
     */
    class Astra_Related_Posts_Markup
    {
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Enable/Disable Single Post -> Related Posts section.
         *
         * @since 3.5.0
         * @return void
         */
        public function astra_related_posts_markup()
        {
        }
        /**
         * Related Posts markup.
         *
         * @since 3.5.0
         * @return bool
         */
        public function astra_get_related_posts()
        {
        }
        /**
         * Render Post CTA button HTML marup.
         *
         * @param int $current_post_id current post ID.
         *
         * @since 3.5.0
         */
        public function astra_get_related_post_read_more($current_post_id)
        {
        }
        /**
         * Related Posts Excerpt markup.
         *
         * @param int $current_post_id current post ID.
         *
         * @since 3.5.0
         */
        public function astra_get_related_post_excerpt($current_post_id)
        {
        }
        /**
         * Render Post Title HTML.
         *
         * @param int $current_post_id current post ID.
         *
         * @since 3.5.0
         */
        public function astra_get_related_post_title($current_post_id)
        {
        }
        /**
         * Render Featured Image HTML.
         *
         * @param int     $current_post_id current post ID.
         * @param string  $before Markup before thumbnail image.
         * @param string  $after  Markup after thumbnail image.
         * @param boolean $echo   Output print or return.
         * @return string|null
         *
         * @since 3.5.0
         */
        public function astra_get_related_post_featured_image($current_post_id, $before = '', $after = '', $echo = \true)
        {
        }
        /**
         * Get related posts based on configurations.
         *
         * @param int $post_id Current Post ID.
         *
         * @since 3.5.0
         *
         * @return WP_Query|bool
         */
        public function astra_get_related_posts_by_query($post_id)
        {
        }
    }
    /**
     * Related Posts Initial Setup
     *
     * @since 3.5.0
     */
    class Astra_Related_Posts
    {
        /**
         * Constructor function that initializes required actions and hooks
         *
         * @since 3.5.0
         */
        public function __construct()
        {
        }
    }
    /**
     * Register Related Posts Configurations.
     */
    class Astra_Related_Posts_Configs extends \Astra_Customizer_Config_Base
    {
        /**
         * Register Related Posts Configurations.
         *
         * @param Array                $configurations Astra Customizer Configurations.
         * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
         * @since 3.5.0
         * @return Array Astra Customizer Configurations with updated configurations.
         */
        public function register_configuration($configurations, $wp_customize)
        {
        }
    }
    /**
     * Astra Schema Markup.
     *
     * @since 2.1.3
     */
    class Astra_Schema
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Setup schema
         *
         * @since 2.1.3
         */
        public function setup_schema()
        {
        }
        /**
         * Include schema files.
         *
         * @since 2.1.3
         */
        private function include_schemas()
        {
        }
        /**
         * Enabled schema
         *
         * @since 2.1.3
         */
        protected function schema_enabled()
        {
        }
    }
    /**
     * Astra Breadcrumb Schema Markup.
     *
     * @since 2.1.3
     */
    class Astra_Breadcrumb_Schema extends \Astra_Schema
    {
        /**
         * Setup schema
         *
         * @since 2.1.3
         */
        public function setup_schema()
        {
        }
        /**
         * Disable Schema for Before Title option of Breadcrumb Position.
         *
         * @since 2.1.3
         *
         * @return void
         */
        public function disable_schema_before_title()
        {
        }
        /**
         * Disable schema by passing false to the 'schema' param to the filter.
         *
         * @since 2.1.3
         *
         * @param  array $args An array of default values.
         *
         * @return array       Updated schema param.
         */
        public function breadcrumb_schema($args)
        {
        }
        /**
         * Enabled schema
         *
         * @since 2.1.3
         */
        protected function schema_enabled()
        {
        }
    }
    /**
     * Astra CreativeWork Schema Markup.
     *
     * @since 2.1.3
     */
    class Astra_CreativeWork_Schema extends \Astra_Schema
    {
        /**
         * Setup schema
         *
         * @since 2.1.3
         */
        public function setup_schema()
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function creative_work_schema($attr)
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function article_title_blog_schema_prop($attr)
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function article_title_blog_single_schema_prop($attr)
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function article_title_content_page_schema_prop($attr)
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function article_title_content_schema_prop($attr)
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function article_content_blog_layout_schema_prop($attr)
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function article_content_page_schema_prop($attr)
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function article_content_schema_prop($attr)
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function article_content_blog_layout_2_schema_prop($attr)
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function article_content_blog_layout_3_schema_prop($attr)
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function article_content_single_layout_schema_prop($attr)
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function article_image_schema_prop($attr)
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function article_image_blog_archive_schema_prop($attr)
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array Updated embed markup.
         */
        public function article_image_blog_single_post_schema_prop($attr)
        {
        }
        /**
         * Enabled schema
         *
         * @since 2.1.3
         */
        protected function schema_enabled()
        {
        }
    }
    /**
     * Astra CreativeWork Schema Markup.
     *
     * @since 2.1.3
     */
    class Astra_Organization_Schema extends \Astra_Schema
    {
        /**
         * Setup schema
         *
         * @since 2.1.3
         */
        public function setup_schema()
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function organization_Schema($attr)
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function site_title_attr($attr)
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function site_title_link_attr($attr)
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function site_title_custom_link_attr($attr)
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function site_title_sticky_custom_link_attr($attr)
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function site_title_none_sticky_custom_link_attr($attr)
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function site_title_sticky_custom_logo_link_attr($attr)
        {
        }
        /**
         * Enabled schema
         *
         * @since 2.1.3
         */
        protected function schema_enabled()
        {
        }
    }
    /**
     * Astra CreativeWork Schema Markup.
     *
     * @since 2.1.3
     */
    class Astra_Person_Schema extends \Astra_Schema
    {
        /**
         * Setup schema
         *
         * @since 2.1.3
         */
        public function setup_schema()
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function person_Schema($attr)
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function author_name_schema_itemprop($attr)
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function author_name_info_schema_itemprop($attr)
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function author_url_schema_itemprop($attr)
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function author_info_url_schema_itemprop($attr)
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function author_desc_schema_itemprop($attr)
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function author_item_schema_itemprop($attr)
        {
        }
        /**
         * Enabled schema
         *
         * @since 2.1.3
         */
        protected function schema_enabled()
        {
        }
    }
    /**
     * Astra CreativeWork Schema Markup.
     *
     * @since 2.1.3
     */
    class Astra_Site_Navigation_Schema extends \Astra_Schema
    {
        /**
         * Setup schema
         *
         * @since 2.1.3
         */
        public function setup_schema()
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function site_navigation_schema($attr)
        {
        }
        /**
         * Enabled schema
         *
         * @since 2.1.3
         */
        protected function schema_enabled()
        {
        }
    }
    /**
     * Astra CreativeWork Schema Markup.
     *
     * @since 2.1.3
     */
    class Astra_WPFooter_Schema extends \Astra_Schema
    {
        /**
         * Setup schema
         *
         * @since 2.1.3
         */
        public function setup_schema()
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function wpfooter_Schema($attr)
        {
        }
        /**
         * Enabled schema
         *
         * @since 2.1.3
         */
        protected function schema_enabled()
        {
        }
    }
    /**
     * Astra CreativeWork Schema Markup.
     *
     * @since 2.1.3
     */
    class Astra_WPHeader_Schema extends \Astra_Schema
    {
        /**
         * Setup schema
         *
         * @since 2.1.3
         */
        public function setup_schema()
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function wpheader_Schema($attr)
        {
        }
        /**
         * Enabled schema
         *
         * @since 2.1.3
         */
        protected function schema_enabled()
        {
        }
    }
    /**
     * Astra CreativeWork Schema Markup.
     *
     * @since 2.1.3
     */
    class Astra_WPSideBar_Schema extends \Astra_Schema
    {
        /**
         * Setup schema
         *
         * @since 2.1.3
         */
        public function setup_schema()
        {
        }
        /**
         * Update Schema markup attribute.
         *
         * @param  array $attr An array of attributes.
         *
         * @return array       Updated embed markup.
         */
        public function wpsidebar_Schema($attr)
        {
        }
        /**
         * Enabled schema
         *
         * @since 2.1.3
         */
        protected function schema_enabled()
        {
        }
    }
    /**
     * Astra_Theme_Background_Updater Class.
     */
    class Astra_Theme_Background_Updater
    {
        /**
         * Background update class.
         *
         * @var object
         */
        private static $background_updater;
        /**
         * DB updates and callbacks that need to be run per version.
         *
         * @var array
         */
        private static $db_updates = array('3.0.0' => array('astra_header_builder_compatibility'), '3.0.1' => array('astra_clear_assets_cache'), '3.3.0' => array('astra_gutenberg_pattern_compatibility', 'astra_icons_svg_compatibility', 'astra_check_flex_based_css'), '3.4.0' => array('astra_update_cart_style'), '3.5.0' => array('astra_update_related_posts_grid_layout', 'astra_site_title_tagline_responsive_control_migration'), '3.6.0' => array('astra_headings_font_support', 'astra_remove_logo_max_width', 'astra_transparent_header_default_value'), '3.6.3' => array('astra_button_default_values_updated'), '3.6.4' => array('astra_update_underline_link_setting'), '3.6.5' => array('astra_support_block_editor'), '3.6.7' => array('astra_fix_footer_widget_right_margin_case', 'astra_remove_elementor_toc_margin'), '3.6.8' => array('astra_set_removal_widget_design_options_flag'), '3.6.9' => array('astra_zero_font_size_comp', 'astra_unset_builder_elements_underline', 'astra_remove_responsive_account_menu_colors_support'), '3.7.0' => array('astra_global_color_compatibility'), '3.7.4' => array('astra_improve_gutenberg_editor_ui'), '3.7.9' => array('astra_set_default_breadcrumb_separator_option', 'astra_fullwidth_layouts_apply_content_background'), '3.8.1' => array('astra_apply_modern_block_editor_ui'), '3.8.3' => array('astra_update_customizer_layout_defaults', 'astra_apply_modern_block_editor_v2_ui'), '3.9.0' => array('astra_update_single_product_breadcrumb', 'astra_display_cart_total_title_compatibility', 'astra_update_woocommerce_cart_icons', 'astra_legacy_customizer_maintenance', 'astra_apply_modern_ecommerce_setup', 'astra_responsive_shop_content_alignment'), '3.9.2' => array('astra_apply_woocommerce_show_password_icon_css', 'astra_shop_style_design_layout'), '3.9.4' => array('astra_theme_background_updater_3_9_4'), '4.0.0' => array('astra_theme_background_updater_4_0_0'), '4.0.2' => array('astra_theme_background_updater_4_0_2'));
        /**
         *  Constructor
         */
        public function __construct()
        {
        }
        /**
         * Check Cron Status
         *
         * Gets the current cron status by performing a test spawn. Cached for one hour when all is well.
         *
         * @since 2.3.0
         *
         * @return bool true if there is a problem spawning a call to WP-Cron system, else false.
         */
        public function test_cron()
        {
        }
        /**
         * Install actions when a update button is clicked within the admin area.
         *
         * This function is hooked into admin_init to affect admin and wp to affect the frontend.
         */
        public function install_actions()
        {
        }
        /**
         * Is this a brand new theme install?
         *
         * @since 2.1.3
         * @return boolean
         */
        public function is_new_install()
        {
        }
        /**
         * Is a DB update needed?
         *
         * @since 2.1.3
         * @return boolean
         */
        private function needs_db_update()
        {
        }
        /**
         * Get list of DB update callbacks.
         *
         * @since 2.1.3
         * @return array
         */
        public function get_db_update_callbacks()
        {
        }
        /**
         * Check if database is migrated
         *
         * @since 2.3.1
         *
         * @return true If the database migration should not be run through CRON.
         */
        public function check_if_data_migrated()
        {
        }
        /**
         * Checks if astra addon version is updated in the database
         *
         * @since 2.3.1
         *
         * @return true if astra addon version is updated.
         */
        public function is_db_version_updated()
        {
        }
        /**
         * Push all needed DB updates to the queue for processing.
         *
         * @param bool $fallback Fallback migration.
         *
         * @return void
         */
        private function update($fallback)
        {
        }
        /**
         * Update DB version to current.
         *
         * @param string|null $version New Astra theme version or null.
         */
        public static function update_db_version($version = \null)
        {
        }
    }
    /**
     * Database Background Process
     *
     * @since 2.1.3
     */
    class Astra_Theme_WP_Background_Process extends \Astra_WP_Background_Process
    {
        /**
         * Database Process
         *
         * @var string
         */
        protected $action = 'astra_theme_db_migration';
        /**
         * Task
         *
         * Override this method to perform any actions required on each
         * queue item. Return the modified item for further processing
         * in the next pass through. Or, return false to remove the
         * item from the queue.
         *
         * @since 2.1.3
         *
         * @param object $process Queue item object.
         * @return mixed
         */
        protected function task($process)
        {
        }
        /**
         * Complete
         *
         * Override if applicable, but ensure that the below actions are
         * performed, or, call parent::complete().
         *
         * @since 2.1.3
         */
        protected function complete()
        {
        }
    }
}
namespace {
    /**
     * Define Constants
     */
    \define('ASTRA_THEME_VERSION', '4.0.2');
    \define('ASTRA_THEME_VERSION', '4.1.0');
    \define('ASTRA_THEME_SETTINGS', 'astra-settings');
    \define('ASTRA_THEME_DIR', \trailingslashit(\get_template_directory()));
    \define('ASTRA_THEME_URI', \trailingslashit(\esc_url(\get_template_directory_uri())));
    \define('ASTRA_PRO_UPGRADE_URL', 'https://wpastra.com/pro/?utm_source=dashboard&utm_medium=free-theme&utm_campaign=upgrade-now');
    /**
     * Minimum Version requirement of the Astra Pro addon.
     * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.
     */
    \define('ASTRA_EXT_MIN_VER', '4.1.0');
    /**
     * Astra Get Breadcrumb
     *
     * Gets the basic Breadcrumb wrapper div & content
     *
     * @since 1.8.1
     * @param boolean $echo Whether to echo or not.
     * @return string
     */
    function astra_get_breadcrumb($echo = \true)
    {
    }
    /**
     * Get selected breadcrumb.
     * Returns or echo the breadcrumb depending upon the argument.
     *
     * @since  1.8.1
     * @access public
     * @param  boolean $echo  Whether to echo or not.
     * @return string Selected Breadcrumb.
     */
    function astra_get_selected_breadcrumb($echo = \true)
    {
    }
    /**
     * Deprecating astra_breadcrumb_trail function.
     *
     * @since 1.8.1
     * @deprecated 1.8.1 Use astra_get_breadcrumb()
     * @param array  $args List of args.
     * @see astra_breadcrumb_trail()
     *
     * @return string new breadcrumb function.
     */
    function astra_breadcrumb_trail($args = array())
    {
    }
    /**
     * Shows a breadcrumb for all types of pages.  This is a wrapper function for the Breadcrumb_Trail class,
     * which should be used in theme templates.
     *
     * @since  1.8.1
     * @access public
     * @param  boolean $echo  Whether to echo or not.
     * @return string Selected Breadcrumb.
     */
    function astra_get_breadcrumb_trail($echo = \true)
    {
    }
    \define('ASTRA_THEME_BREADCRUMBS_DIR', \ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/');
    \define('ASTRA_THEME_BREADCRUMBS_URI', \ASTRA_THEME_URI . 'inc/addons/breadcrumbs/');
    /**
     * Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Generated dynamic CSS for Breadcrumb.
     *
     * @since 1.7.0
     */
    function astra_breadcrumb_section_dynamic_css($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    \define('ASTRA_THEME_HEADING_COLORS_DIR', \ASTRA_THEME_DIR . 'inc/addons/heading-colors/');
    \define('ASTRA_THEME_HEADING_COLORS_URI', \ASTRA_THEME_URI . 'inc/addons/heading-colors/');
    /**
     * Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Generated dynamic CSS for Heading Colors.
     *
     * @since 2.1.4
     */
    function astra_heading_colors_section_dynamic_css($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    /**
     * Scroll To Top Addon
     *
     * @since 4.0.0
     * @package Astra
     */
    \define('ASTRA_SCROLL_TO_TOP_DIR', \ASTRA_THEME_DIR . 'inc/addons/scroll-to-top/');
    \define('ASTRA_SCROLL_TO_TOP_URL', \ASTRA_THEME_URI . 'inc/addons/scroll-to-top/');
    /**
     * Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return string
     */
    function astra_scroll_to_top_dynamic_css($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    /**
     * Scroll to Top - Static CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @return String Generated dynamic CSS for Scroll to Top.
     *
     * @since 4.0.0
     */
    function astra_scroll_to_top_static_css($dynamic_css)
    {
    }
    \define('ASTRA_THEME_TRANSPARENT_HEADER_DIR', \ASTRA_THEME_DIR . 'inc/addons/transparent-header/');
    \define('ASTRA_THEME_TRANSPARENT_HEADER_URI', \ASTRA_THEME_URI . 'inc/addons/transparent-header/');
    /**
     * Dynamic CSS
     *
     * @param  String $dynamic_css          Astra Dynamic CSS.
     * @param  String $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Dynamic CSS.
     */
    function astra_ext_transparent_header_dynamic_css($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    /**
     * Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Generated dynamic CSS for above header transparent header.
     */
    function astra_ext_transparent_above_header_sections_dynamic_css($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    /**
     * Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Generated dynamic CSS.
     */
    function astra_ext_transparent_below_header_sections_dynamic_css($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    /**
     * Register menus
     *
     * @since 1.0.0
     */
    function astra_register_menu_locations()
    {
    }
    /**
     * Prepare markup for taxonomies.
     *
     * @param string $control_tax Taxonomy subcontrol name.
     * @param int    $loop_count Meta loop counter to decide separator appearance.
     * @param string $separator Separator.
     *
     * @return string $output Taxonomy output.
     */
    function astra_get_dynamic_taxonomy($control_tax, $loop_count, $separator)
    {
    }
    /**
     * Post meta
     *
     * @param  array  $post_meta Post meta.
     * @param  string $separator Separator.
     * @return string            post meta markup.
     */
    function astra_get_post_meta($post_meta, $separator = '/')
    {
    }
    /**
     * Get post format as per new configurations set in customizer.
     *
     * @return string HTML markup for date span.
     * @since 4.1.0
     */
    function astra_get_dynamic_post_format()
    {
    }
    /**
     * Function to get Date of Post
     *
     * @return html                Markup.
     */
    function astra_post_date()
    {
    }
    /**
     * Function to get Author name.
     *
     * @return null|string $author_name Author name.
     * @since 4.0.0
     */
    function astra_post_author_name()
    {
    }
    /**
     * Function to get Author of Post
     *
     * @param  string $output_filter Filter string.
     * @return html                Markup.
     */
    function astra_post_author($output_filter = '')
    {
    }
    /**
     * Function to get Read More Link of Post
     *
     * @param  string $output_filter Filter string.
     * @return html                Markup.
     */
    function astra_post_link($output_filter = '')
    {
    }
    /**
     * Function to get Number of Comments of Post
     *
     * @param  string $output_filter Output filter.
     * @return html                Markup.
     */
    function astra_post_comments($output_filter = '')
    {
    }
    /**
     * Function to get Tags applied of Post
     *
     * @param  string $output_filter Output filter.
     * @return html                Markup.
     */
    function astra_post_tags($output_filter = '')
    {
    }
    /**
     * Function to get Categories applied of Post
     *
     * @param  string $output_filter Output filter.
     * @return html                Markup.
     */
    function astra_post_categories($output_filter = '')
    {
    }
    /**
     * Layout class
     *
     * @param  string $class Class.
     */
    function astra_blog_layout_class($class = '')
    {
    }
    /**
     * Retrieve the classes for the body element as an array.
     *
     * @param string $class Class.
     */
    function astra_get_blog_layout_class($class = '')
    {
    }
    /**
     * Filters the Read More link text.
     *
     * @param  string $more_link_element Read More link element.
     * @param  string $more_link_text Read More text.
     * @return html                Markup.
     */
    function astra_the_content_more_link($more_link_element = '', $more_link_text = '')
    {
    }
    /**
     * Adds custom classes to the array of body classes.
     *
     * @since 1.0
     * @param array $classes Classes for the body element.
     * @return array
     */
    function astra_blog_body_classes($classes)
    {
    }
    /**
     * Adds custom classes to the array of post grid classes.
     *
     * @since 1.0
     * @param array $classes Classes for the post element.
     * @return array
     */
    function astra_post_class_blog_grid($classes)
    {
    }
    /**
     * Prints HTML with meta information for the current post-date/time and author.
     *
     * @since 1.0
     * @return mixed            Markup.
     */
    function astra_blog_get_post_meta()
    {
    }
    /**
     * To featured image / gallery / audio / video etc. As per the post format.
     *
     * @since 1.0
     * @return mixed
     */
    function astra_blog_post_get_featured_item()
    {
    }
    /**
     * Blog post Thubmnail, Title & Blog Meta order
     *
     * @since  1.0.8
     */
    function astra_blog_post_thumbnail_and_title_order()
    {
    }
    /**
     * Blog post Thumbnail
     *
     * @param string $type Type of post.
     * @since  1.0.8
     */
    function astra_get_blog_post_thumbnail($type = 'archive')
    {
    }
    /**
     * Blog post Thumbnail
     *
     * @since  1.0.8
     */
    function astra_get_blog_post_title_meta()
    {
    }
    /**
     * Get audio files from post content
     *
     * @param  number $post_id Post id.
     * @return mixed          Iframe.
     */
    function astra_get_audios_from_post($post_id)
    {
    }
    /**
     * Get first image from post content
     *
     * @since 1.0
     * @param  number $post_id Post id.
     * @return mixed
     */
    function astra_get_video_from_post($post_id)
    {
    }
    /**
     * Get last word of string to get meta-key of custom post structure.
     *
     * @since 4.0.0
     * @param string $string from this get last word.
     * @return string $last_word result.
     */
    function astra_get_last_meta_word($string)
    {
    }
    /**
     * Get the current archive description.
     *
     * @since 4.0.0
     * @param string $post_type post type.
     * @return string $description Description for archive.
     */
    function astra_get_archive_description($post_type)
    {
    }
    /**
     * Custom single post Title & Meta order display.
     *
     * @since 4.0.0
     * @param array $structure archive or single post structure.
     * @return mixed
     */
    function astra_banner_elements_order($structure = array())
    {
    }
    /**
     * Adds custom classes to the array of body classes.
     *
     * @since 1.0.0
     * @param array $classes Classes for the body element.
     * @return array
     */
    function astra_single_body_class($classes)
    {
    }
    /**
     * Adds custom classes to the array of body classes.
     *
     * @since 1.0.0
     * @param array $classes Classes for the body element.
     * @return array
     */
    function astra_single_post_class($classes)
    {
    }
    /**
     * Template for comments and pingbacks.
     *
     * To override this walker in a child theme without modifying the comments template
     * simply create your own astra_theme_comment(), and that function will be used instead.
     *
     * Used as a callback by wp_list_comments() for displaying the comments.
     *
     * @param  string $comment Comment.
     * @param  array  $args    Comment arguments.
     * @param  number $depth   Depth.
     * @return mixed          Comment markup.
     */
    function astra_theme_comment($comment, $args, $depth)
    {
    }
    /**
     * Get Post Navigation
     *
     * Checks post navigation, if exists return as button.
     *
     * @return mixed Post Navigation Buttons
     */
    function astra_single_post_navigation_markup()
    {
    }
    /**
     * Get global class.
     *
     * @return object
     */
    function astra_builder()
    {
    }
    \define('ASTRA_BUILDER_FOOTER_ABOVE_FOOTER_DIR', \ASTRA_THEME_DIR . 'inc/builder/type/footer/above-footer');
    \define('ASTRA_BUILDER_FOOTER_ABOVE_FOOTER_URI', \ASTRA_THEME_URI . 'inc/builder/type/footer/above-footer');
    /**
     * Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Generated dynamic CSS for above Footer.
     *
     * @since 3.0.0
     */
    function astra_fb_above_footer_dynamic_css($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    \define('ASTRA_BUILDER_FOOTER_BELOW_FOOTER_DIR', \ASTRA_THEME_DIR . 'inc/builder/type/footer/below-footer');
    \define('ASTRA_BUILDER_FOOTER_BELOW_FOOTER_URI', \ASTRA_THEME_URI . 'inc/builder/type/footer/below-footer');
    /**
     * Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Generated dynamic CSS for below Footer.
     *
     * @since 3.0.0
     */
    function astra_fb_below_footer_dynamic_css($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    \define('ASTRA_FOOTER_BUTTON_DIR', \ASTRA_THEME_DIR . 'inc/builder/type/footer/button');
    \define('ASTRA_FOOTER_BUTTON_URI', \ASTRA_THEME_URI . 'inc/builder/type/footer/button');
    /**
     * Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Generated dynamic CSS for Heading Colors.
     *
     * @since 3.0.0
     */
    function astra_fb_button_dynamic_css($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    \define('ASTRA_BUILDER_FOOTER_COPYRIGHT_DIR', \ASTRA_THEME_DIR . 'inc/builder/type/footer/copyright');
    \define('ASTRA_BUILDER_FOOTER_COPYRIGHT_URI', \ASTRA_THEME_URI . 'inc/builder/type/footer/copyright');
    /**
     * Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Generated dynamic CSS for Heading Colors.
     *
     * @since 3.0.0
     */
    function astra_fb_copyright_dynamic_css($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    \define('ASTRA_BUILDER_FOOTER_HTML_DIR', \ASTRA_THEME_DIR . 'inc/builder/type/footer/html');
    \define('ASTRA_BUILDER_FOOTER_HTML_URI', \ASTRA_THEME_URI . 'inc/builder/type/footer/html');
    /**
     * Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Generated dynamic CSS for Heading Colors.
     *
     * @since 3.0.0
     */
    function astra_fb_html_dynamic_css($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    \define('ASTRA_BUILDER_FOOTER_MENU_DIR', \ASTRA_THEME_DIR . 'inc/builder/type/footer/menu');
    \define('ASTRA_BUILDER_FOOTER_MENU_URI', \ASTRA_THEME_URI . 'inc/builder/type/footer/menu');
    /**
     * Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Generated dynamic CSS for Footer Menu Colors.
     *
     * @since 3.0.0
     */
    function astra_hb_footer_menu_dynamic_css($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    /**
     * Footer menu static CSS
     *
     * @since 3.5.0
     * @return string
     */
    function astra_footer_menu_static_css()
    {
    }
    \define('ASTRA_BUILDER_FOOTER_PRIMARY_FOOTER_DIR', \ASTRA_THEME_DIR . 'inc/builder/type/footer/primary-footer');
    \define('ASTRA_BUILDER_FOOTER_PRIMARY_FOOTER_URI', \ASTRA_THEME_URI . 'inc/builder/type/footer/primary-footer');
    /**
     * Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Generated dynamic CSS for Primary Footer.
     *
     * @since 3.0.0
     */
    function astra_fb_primary_footer_dynamic_css($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    \define('ASTRA_BUILDER_FOOTER_SOCIAL_ICONS_DIR', \ASTRA_THEME_DIR . 'inc/builder/type/footer/social-icon');
    \define('ASTRA_BUILDER_FOOTER_SOCIAL_ICONS_URI', \ASTRA_THEME_URI . 'inc/builder/type/footer/social-icon');
    /**
     * Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Generated dynamic CSS for Social Icons Colors.
     *
     * @since 3.0.0
     */
    function astra_fb_social_icon_dynamic_css($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    \define('ASTRA_BUILDER_FOOTER_WIDGET_DIR', \ASTRA_THEME_DIR . 'inc/builder/type/footer/widget');
    \define('ASTRA_BUILDER_FOOTER_WIDGET_URI', \ASTRA_THEME_URI . 'inc/builder/type/footer/widget');
    /**
     * Whether to fix the footer right-margin space not working case or not.
     *
     * As this affects the frontend, added this backward compatibility for existing users.
     *
     * @since 3.6.7
     * @return boolean false if it is an existing user, true if not.
     */
    function astra_support_footer_widget_right_margin()
    {
    }
    /**
     * Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Generated dynamic CSS for Heading Colors.
     *
     * @since 3.0.0
     */
    function astra_fb_widget_dynamic_css($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    \define('ASTRA_ABOVE_HEADER_DIR', \ASTRA_THEME_DIR . 'inc/builder/type/header/above-header');
    \define('ASTRA_ABOVE_HEADER_URI', \ASTRA_THEME_URI . 'inc/builder/type/header/above-header');
    /**
     * Above Header Row - Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Generated dynamic CSS for Heading Colors.
     *
     * @since 3.0.0
     */
    function astra_above_header_row_setting($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    \define('ASTRA_HEADER_ACCOUNT_DIR', \ASTRA_THEME_DIR . 'inc/builder/type/header/account');
    \define('ASTRA_HEADER_ACCOUNT_URI', \ASTRA_THEME_URI . 'inc/builder/type/header/account');
    /**
     * Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Generated dynamic CSS for Account.
     *
     * @since 3.0.0
     */
    function astra_hb_account_dynamic_css($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    \define('ASTRA_BELOW_HEADER_DIR', \ASTRA_THEME_DIR . 'inc/builder/type/header/below-header');
    \define('ASTRA_BELOW_HEADER_URI', \ASTRA_THEME_URI . 'inc/builder/type/header/below-header');
    /**
     * Below Header Row - Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Generated dynamic CSS for Heading Colors.
     *
     * @since 3.0.0
     */
    function astra_below_header_row_setting($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    \define('ASTRA_HEADER_BUTTON_DIR', \ASTRA_THEME_DIR . 'inc/builder/type/header/button');
    \define('ASTRA_HEADER_BUTTON_URI', \ASTRA_THEME_URI . 'inc/builder/type/header/button');
    /**
     * Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Generated dynamic CSS for Heading Colors.
     *
     * @since 3.0.0
     */
    function astra_hb_button_dynamic_css($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    \define('ASTRA_HEADER_EDD_CART_DIR', \ASTRA_THEME_DIR . 'inc/builder/type/header/edd-cart');
    \define('ASTRA_HEADER_EDD_CART_URI', \ASTRA_THEME_URI . 'inc/builder/type/header/edd-cart');
    /**
     * Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Generated dynamic CSS for Search.
     *
     * @since 3.0.0
     */
    function astra_hb_edd_cart_dynamic_css($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    \define('ASTRA_HEADER_HTML_DIR', \ASTRA_THEME_DIR . 'inc/builder/type/header/html');
    \define('ASTRA_HEADER_HTML_URI', \ASTRA_THEME_URI . 'inc/builder/type/header/html');
    /**
     * Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Generated dynamic CSS for Heading Colors.
     *
     * @since 3.0.0
     */
    function astra_hb_html_dynamic_css($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    \define('ASTRA_HEADER_MENU_DIR', \ASTRA_THEME_DIR . 'inc/builder/type/header/menu');
    \define('ASTRA_HEADER_MENU_URI', \ASTRA_THEME_URI . 'inc/builder/type/header/menu');
    /**
     * Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Generated dynamic CSS for Heading Colors.
     *
     * @since 3.0.0
     */
    function astra_hb_menu_dynamic_css($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    /**
     * Load Menu hover style static CSS if any one of the menu hover style is selected.
     *
     * @return string
     * @since 3.5.0
     */
    function astra_menu_hover_style_css()
    {
    }
    \define('ASTRA_BUILDER_MOBILE_MENU_DIR', \ASTRA_THEME_DIR . 'inc/builder/type/header/mobile-menu');
    \define('ASTRA_BUILDER_MOBILE_MENU_URI', \ASTRA_THEME_URI . 'inc/builder/type/header/mobile-menu');
    /**
     * Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Generated dynamic CSS for Header Menu Colors.
     *
     * @since 3.0.0
     */
    function astra_hb_mobile_menu_dynamic_css($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    \define('ASTRA_MOBILE_TRIGGER_DIR', \ASTRA_THEME_DIR . 'inc/builder/type/header/mobile-trigger');
    \define('ASTRA_MOBILE_TRIGGER_URI', \ASTRA_THEME_URI . 'inc/builder/type/header/mobile-trigger');
    /**
     * Mobile Trigger - Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Generated dynamic CSS for Heading Colors.
     *
     * @since 3.0.0
     */
    function astra_mobile_trigger_row_setting($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    \define('ASTRA_OFF_CANVAS_DIR', \ASTRA_THEME_DIR . 'inc/builder/type/header/off-canvas');
    \define('ASTRA_OFF_CANVAS_URI', \ASTRA_THEME_URI . 'inc/builder/type/header/off-canvas');
    /**
     * Off Canvas Row - Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Generated dynamic CSS for Heading Colors.
     *
     * @since 3.0.0
     */
    function astra_off_canvas_row_setting($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    /**
     * Add static CSS for Off-canvas flyout.
     *
     * @since 3.4.0
     * @return string.
     */
    function astra_off_canvas_static_css()
    {
    }
    /**
     * Add static CSS for Dropdown Type.
     *
     * @since 3.4.0
     * @return string.
     */
    function astra_dropdown_type_static_css()
    {
    }
    \define('ASTRA_PRIMARY_HEADER_DIR', \ASTRA_THEME_DIR . 'inc/builder/type/header/primary-header');
    \define('ASTRA_PRIMARY_HEADER_URI', \ASTRA_THEME_URI . 'inc/builder/type/header/primary-header');
    /**
     * Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Generated dynamic CSS for Heading Colors.
     *
     * @since 3.0.0
     */
    function astra_primary_header_breakpoint_style($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    \define('ASTRA_HEADER_SEARCH_DIR', \ASTRA_THEME_DIR . 'inc/builder/type/header/search');
    \define('ASTRA_HEADER_SEARCH_URI', \ASTRA_THEME_URI . 'inc/builder/type/header/search');
    /**
     * Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Generated dynamic CSS for Search.
     *
     * @since 3.0.0
     */
    function astra_hb_search_dynamic_css($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    \define('ASTRA_HEADER_SITE_IDENTITY_DIR', \ASTRA_THEME_DIR . 'inc/builder/type/header/site-identity');
    \define('ASTRA_HEADER_SITE_IDENTITY_URI', \ASTRA_THEME_URI . 'inc/builder/type/header/site-identity');
    /**
     * Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Generated dynamic CSS for Site Identity.
     *
     * @since 3.0.0
     */
    function astra_hb_site_identity_dynamic_css($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    \define('ASTRA_HEADER_SOCIAL_ICON_DIR', \ASTRA_THEME_DIR . 'inc/builder/type/header/social-icon');
    \define('ASTRA_HEADER_SOCIAL_ICON_URI', \ASTRA_THEME_URI . 'inc/builder/type/header/social-icon');
    /**
     * Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Generated dynamic CSS for Heading Colors.
     *
     * @since 2.1.4
     */
    function astra_hb_social_icon_dynamic_css($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    \define('ASTRA_BUILDER_HEADER_WIDGET_DIR', \ASTRA_THEME_DIR . 'inc/builder/type/header/widget');
    \define('ASTRA_BUILDER_HEADER_WIDGET_URI', \ASTRA_THEME_URI . 'inc/builder/type/header/widget');
    /**
     * Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Generated dynamic CSS for Heading Colors.
     *
     * @since 3.0.0
     */
    function astra_hb_widget_dynamic_css($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    \define('ASTRA_HEADER_WOO_CART_DIR', \ASTRA_THEME_DIR . 'inc/builder/type/header/woo-cart');
    \define('ASTRA_HEADER_WOO_CART_URI', \ASTRA_THEME_URI . 'inc/builder/type/header/woo-cart');
    /**
     * Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Generated dynamic CSS for Search.
     *
     * @since 3.0.0
     */
    function astra_hb_woo_cart_dynamic_css($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    /**
     * Check current page is an EDD page
     *
     * @since 1.5.5
     * @return bool true | false
     */
    function astra_is_edd_page()
    {
    }
    /**
     * Check current page is an EDD single page
     *
     * @since 1.5.5
     * @return bool true | false
     */
    function astra_is_edd_single_page()
    {
    }
    /**
     * Check current page is an EDD archive page
     *
     * @since 1.5.5
     * @return bool true | false
     */
    function astra_is_edd_archive_page()
    {
    }
    /**
     * Check current page is an EDD single product page
     *
     * @since 1.5.5
     * @return bool true | false
     */
    function astra_is_edd_single_product_page()
    {
    }
    /**
     * Show the product title in the product loop. By default this is an H2.
     */
    function astra_edd_archive_product_structure()
    {
    }
    /**
     * Show EDD product terms
     *
     * @param  string $taxonomy_name Taxonomy name.
     * @return void
     */
    function astra_edd_terms_list($taxonomy_name)
    {
    }
    /**
     * Show EDD archive product title
     *
     * @return void
     */
    function astra_edd_archive_product_title()
    {
    }
    /**
     * Show EDD archive product image
     *
     * @return void
     */
    function astra_edd_archive_product_image()
    {
    }
    /**
     * Show EDD archive product price
     *
     * @return void
     */
    function astra_edd_archive_product_price()
    {
    }
    /**
     * Show EDD archive product description
     *
     * @return void
     */
    function astra_edd_archive_product_short_description()
    {
    }
    /**
     * Show EDD archive product add to cart
     *
     * @return void
     */
    function astra_edd_archive_product_add_to_cart()
    {
    }
    /**
     * Show EDD archive product category
     *
     * @return void
     */
    function astra_edd_archive_product_category()
    {
    }
    /**
     * EDD archive page Cart button markup
     *
     * @return array $output Add to cart button markup
     */
    function astra_edd_cart_button_markup()
    {
    }
    /**
     * Home starter content.
     *
     * @since 4.0.0
     * @package Astra\Compatibility\Starter_Content
     */
    // @codingStandardsIgnoreStart WordPressVIPMinimum.Security.Mustache.OutputNotation -- Required for starter content.
    $astra_default_home_content = '<!-- wp:cover {"minHeight":720,"minHeightUnit":"px","customGradient":"linear-gradient(35deg,rgb(6,0,151) 0%,rgb(130,4,255) 73%,rgb(193,15,255) 100%)","isDark":false,"align":"full"} -->
<div class="wp-block-cover alignfull is-light" style="min-height:720px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient" style="background:linear-gradient(35deg,rgb(6,0,151) 0%,rgb(130,4,255) 73%,rgb(193,15,255) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:media-text {"mediaPosition":"right","mediaId":118,"mediaLink":"","mediaType":"image","mediaWidth":43,"verticalAlignment":"center"} -->
<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-center" style="grid-template-columns:auto 43%"><div class="wp-block-media-text__content"><!-- wp:heading {"textAlign":"left","level":1,"textColor":"white"} -->
<h1 class="has-text-align-left has-white-color has-text-color">Your Idea Matters!</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Pulvinar enim ac tortor nulla facilisi tristique facilisi <br>elementum sollicitudin eget lorem.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"wide"} -->
<div class="wp-block-buttons alignwide"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Make a Website</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div><figure class="wp-block-media-text__media"><img src="' . \trailingslashit(\get_template_directory_uri()) . 'inc/assets/images/starter-content/hero-img.svg" alt="" class="wp-image-118 size-full"/></figure></div>
<!-- /wp:media-text --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"0px"}}},"backgroundColor":"ast-global-color-5","layout":{"inherit":false,"contentSize":"1200px","type":"constrained"}} -->
<div class="wp-block-group alignfull has-ast-global-color-5-background-color has-background" style="padding-bottom:0px"><!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":"40px"}}} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"blockGap":"8px"}}} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:image {"id":134,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="' . \trailingslashit(\get_template_directory_uri()) . 'inc/assets/images/starter-content/building.svg" alt="" class="wp-image-134"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"16px"}}}} -->
<h3 class="has-text-align-left" style="margin-top:16px">Local Business</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">Lorem ipsum dolor consectetur adipiscing elit eiusmod.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"blockGap":"8px"}}} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:image {"id":135,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="' . \trailingslashit(\get_template_directory_uri()) . 'inc/assets/images/starter-content/shopping-bag.svg" alt="" class="wp-image-135"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"16px"}}}} -->
<h3 class="has-text-align-left" style="margin-top:16px">Online Store</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">Lorem ipsum dolor consectetur adipiscing elit eiusmod.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"blockGap":"8px"}}} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:image {"id":136,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="' . \trailingslashit(\get_template_directory_uri()) . 'inc/assets/images/starter-content/blog.svg" alt="" class="wp-image-136"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"16px"}}}} -->
<h3 class="has-text-align-left" style="margin-top:16px">Blogging</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">Lorem ipsum dolor consectetur adipiscing elit eiusmod.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"blockGap":"8px"}}} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:image {"id":137,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="' . \trailingslashit(\get_template_directory_uri()) . 'inc/assets/images/starter-content/portfolio.svg" alt="" class="wp-image-137"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"16px"}}}} -->
<h3 class="has-text-align-left" style="margin-top:16px">Portfolio</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">Lorem ipsum dolor consectetur adipiscing elit eiusmod.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"0px","top":"144px"}}},"layout":{"inherit":false,"contentSize":"1200px","type":"constrained"}} -->
<div class="wp-block-group alignfull" id="services" style="padding-top:144px;padding-bottom:0px"><!-- wp:heading -->
<h2>Our Services</h2>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"50px"}}}} -->
<div class="wp-block-columns" style="margin-top:50px"><!-- wp:column {"style":{"spacing":{"blockGap":"8px"}}} -->
<div class="wp-block-column"><!-- wp:image {"id":230,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . \trailingslashit(\get_template_directory_uri()) . 'inc/assets/images/starter-content/branding.jpg" alt="" class="wp-image-230"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"16px"}}}} -->
<h3 style="margin-top:16px">Branding Design</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Sem quis erat nibh id neque tincidunt molestie convallis ut nibh vel, lorem consequat ullamcorper.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"8px"}}} -->
<div class="wp-block-column"><!-- wp:image {"id":232,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . \trailingslashit(\get_template_directory_uri()) . 'inc/assets/images/starter-content/graphic.jpg" alt="" class="wp-image-232"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"16px"}}}} -->
<h3 style="margin-top:16px">Graphic Design</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Sem quis erat nibh id neque tincidunt molestie convallis ut nibh vel, lorem consequat ullamcorper.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"8px"}}} -->
<div class="wp-block-column"><!-- wp:image {"id":231,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . \trailingslashit(\get_template_directory_uri()) . 'inc/assets/images/starter-content/web.jpg" alt="" class="wp-image-231"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"16px"}}}} -->
<h3 style="margin-top:16px">Web Development</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Sem quis erat nibh id neque tincidunt molestie convallis ut nibh vel, lorem consequat ullamcorper.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"143px","bottom":"144px"}}},"backgroundColor":"ast-global-color-5","layout":{"inherit":false,"contentSize":"1200px","type":"constrained"}} -->
<div class="wp-block-group alignfull has-ast-global-color-5-background-color has-background" id="about" style="padding-top:143px;padding-bottom:144px"><!-- wp:media-text {"align":"","mediaPosition":"right","mediaId":237,"mediaLink":"","mediaType":"image","verticalAlignment":"center"} -->
<div class="wp-block-media-text has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-center"><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"padding":{"right":"80px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:80px"><!-- wp:heading {"style":{"spacing":{"padding":{"right":"40px"}}}} -->
<h2 style="padding-right:40px">We help teams build the business of their dreams</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Et in risus egestas nec vitae odio ac nibh vestibulum volutpat aliquet aenean erat lobortis non.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Nibh egestas dictumst cursus est turpis quis tincidunt pulvinar maecenas eget massa vel, ante nam blandit egestas enim id quis sit maecenas id nunc tempus auctor orci, enim imperdiet proin nibh mattis.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div><figure class="wp-block-media-text__media"><img src="' . \trailingslashit(\get_template_directory_uri()) . 'inc/assets/images/starter-content/about-us.jpg" alt="" class="wp-image-237 size-full"/></figure></div>
<!-- /wp:media-text --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","backgroundColor":"ast-global-color-4","layout":{"inherit":false,"contentSize":"800px","type":"constrained"}} -->
<div class="wp-block-group alignfull has-ast-global-color-4-background-color has-background" id="reviews"><!-- wp:image {"align":"center","id":235,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full"><img src="' . \trailingslashit(\get_template_directory_uri()) . 'inc/assets/images/starter-content/avatar.png" alt="" class="wp-image-235"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"22px","lineHeight":1.6}}} -->
<p class="has-text-align-center" style="font-size:22px;line-height:1.6">“The best part is that Astra comes with hundreds of professionally designed templates for just about every industry, makes it super easy for non-techy users to build a website.”</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><strong>Wade Warren</strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"144px","bottom":"144px"}}},"layout":{"inherit":false,"contentSize":"1200px","type":"constrained"}} -->
<div class="wp-block-group alignfull" id="whyus" style="padding-top:144px;padding-bottom:144px"><!-- wp:heading -->
<h2>Why Choose Us</h2>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"blockGap":"80px","margin":{"top":"60px"}}}} -->
<div class="wp-block-columns" style="margin-top:60px"><!-- wp:column {"style":{"spacing":{"blockGap":"8px"}}} -->
<div class="wp-block-column"><!-- wp:image {"id":162,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="' . \trailingslashit(\get_template_directory_uri()) . 'inc/assets/images/starter-content/passionate.svg" alt="" class="wp-image-162"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"16px"}}}} -->
<h3 style="margin-top:16px">Passionate</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Tempor ullamcorper urna, est, lectus amet sit tempor pretium mi sed morbi cras posuere sit ultrices bibendum augue sit ornare.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"8px"}}} -->
<div class="wp-block-column"><!-- wp:image {"id":163,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="' . \trailingslashit(\get_template_directory_uri()) . 'inc/assets/images/starter-content/professional.svg" alt="" class="wp-image-163"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"16px"}}}} -->
<h3 style="margin-top:16px">Professional</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Tempor ullamcorper urna, est, lectus amet sit tempor pretium mi sed morbi cras posuere sit ultrices bibendum augue sit ornare.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"8px"}}} -->
<div class="wp-block-column"><!-- wp:image {"id":164,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="' . \trailingslashit(\get_template_directory_uri()) . 'inc/assets/images/starter-content/support.svg" alt="" class="wp-image-164"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"16px"}}}} -->
<h3 style="margin-top:16px">Support</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Tempor ullamcorper urna, est, lectus amet sit tempor pretium mi sed morbi cras posuere sit ultrices bibendum augue sit ornare.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"color":{"gradient":"linear-gradient(35deg,rgb(6,0,151) 0%,rgb(130,4,255) 64%,rgb(193,15,255) 98%)"},"spacing":{"padding":{"top":"104px","bottom":"104px"}}},"layout":{"inherit":false,"contentSize":"520px","type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" id="contact" style="background:linear-gradient(35deg,rgb(6,0,151) 0%,rgb(130,4,255) 64%,rgb(193,15,255) 98%);padding-top:104px;padding-bottom:104px"><!-- wp:heading {"textAlign":"center","style":{"color":{"text":"#ffffff"}}} -->
<h2 class="has-text-align-center has-text-color" style="color:#ffffff">Get a professional website today!</h2>
<!-- /wp:heading -->

<!-- wp:buttons {"align":"wide","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"50px"}}}} -->
<div class="wp-block-buttons alignwide" style="margin-top:50px"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Make a Website</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->';
    /**
     * Shop Page product titles with anchor
     *
     * @hooked woocommerce_after_shop_loop_item - 10
     *
     * @since 1.1.0
     */
    function astra_woo_shop_products_title()
    {
    }
    /**
     * Add and/or Remove Categories from shop archive page.
     *
     * @hooked woocommerce_after_shop_loop_item - 9
     *
     * @since 1.1.0
     */
    function astra_woo_shop_parent_category()
    {
    }
    /**
     * Add Out of Stock to the Shop page
     *
     * @hooked woocommerce_shop_loop_item_title - 8
     *
     * @since 1.1.0
     */
    function astra_woo_shop_out_of_stock()
    {
    }
    /**
     * Product short description
     *
     * @hooked woocommerce_after_shop_loop_item
     *
     * @since 1.1.0
     */
    function astra_woo_shop_product_short_description()
    {
    }
    /**
     * Availability: in stock string updated
     *
     * @param  string $markup  Markup.
     * @param  object $product Object of Product.
     *
     * @since 1.1.0
     */
    function astra_woo_product_in_stock($markup, $product)
    {
    }
    /**
     * Show the product title in the product loop. By default this is an H2.
     */
    function astra_woo_woocommerce_template_loop_product_title()
    {
    }
    /**
     * Show the product title in the product loop. By default this is an H2.
     */
    function astra_woo_woocommerce_shop_product_content()
    {
    }
    /**
     * Thumbnail wrap start.
     */
    function astra_woo_shop_thumbnail_wrap_start()
    {
    }
    /**
     * Thumbnail wrap end.
     */
    function astra_woo_shop_thumbnail_wrap_end()
    {
    }
    /**
     * Woocommerce filter - Widget Products Tags
     *
     * @param  array $args Tag arguments.
     * @return array       Modified tag arguments.
     */
    function astra_widget_product_tag_cloud_args($args = array())
    {
    }
    /**
     * Woocommerce shop/product div close tag.
     *
     * @return void
     */
    function astra_woocommerce_div_wrapper_close()
    {
    }
    /**
     * Checking whether shop page style is selected as modern layout.
     *
     * @return bool true|false.
     */
    function astra_is_shop_page_modern_style()
    {
    }
    /**
     * Check if Woocommerce pro addons is enabled.
     *
     * @return bool true|false.
     */
    function astra_has_pro_woocommerce_addon()
    {
    }
    /**
     * Support cart color setting to default cart icon, till now with other cart icons have this color compatibility but default one don't have this.
     * This case is only for old header layout.
     *
     * @since 3.9.2
     * @return boolean false if it is an existing user, true if not.
     */
    function astra_cart_color_default_icon_old_header()
    {
    }
    /**
     * Function to check the Add to Cart quantity buttons.
     *
     * @return bool true|false.
     * @since 3.9.2
     */
    function astra_add_to_cart_quantity_btn_enabled()
    {
    }
    /**
     * Return defaults for Builder Options.
     *
     * @param array $defaults exsiting options array.
     * @return array
     */
    function astra_hf_builder_customizer_defaults($defaults)
    {
    }
    /**
     * Prepare Divider Defaults.
     *
     * @param array   $defaults defaults.
     * @param integer $index index.
     */
    function astra_prepare_divider_defaults($defaults, $index)
    {
    }
    /**
     * Prepare Button Defaults.
     *
     * @param array   $defaults defaults.
     * @param integer $index index.
     */
    function astra_prepare_button_defaults($defaults, $index)
    {
    }
    /**
     * Prepare HTML Defaults.
     *
     * @param array   $defaults defaults.
     * @param integer $index index.
     */
    function astra_prepare_html_defaults($defaults, $index)
    {
    }
    /**
     * Prepare Social Icon Defaults.
     *
     * @param array   $defaults defaults.
     * @param integer $index index.
     */
    function astra_prepare_social_icon_defaults($defaults, $index)
    {
    }
    /**
     * Prepare Widget Defaults.
     *
     * @param array   $defaults defaults.
     * @param integer $index index.
     */
    function astra_prepare_widget_defaults($defaults, $index)
    {
    }
    /**
     * Prepare menu Defaults.
     *
     * @param array   $defaults defaults.
     * @param integer $index index.
     */
    function astra_prepare_menu_defaults($defaults, $index)
    {
    }
    /**
     * Default Strings
     *
     * @since 1.0.0
     * @param  string  $key  String key.
     * @param  boolean $echo Print string.
     * @return mixed        Return string or nothing.
     */
    function astra_default_strings($key, $echo = \true)
    {
    }
    /**
     * Foreground Color
     *
     * @param  string $hex Color code in HEX format.
     * @return string      Return foreground color depend on input HEX color.
     */
    function astra_get_foreground_color($hex)
    {
    }
    /**
     * Generate CSS
     *
     * @param  mixed  $value         CSS value.
     * @param  string $css_property CSS property.
     * @param  string $selector     CSS selector.
     * @param  string $unit         CSS property unit.
     * @return void               Echo generated CSS.
     */
    function astra_css($value = '', $css_property = '', $selector = '', $unit = '')
    {
    }
    /**
     * Get Font CSS value
     *
     * @param  array  $font    CSS value.
     * @param  string $device  CSS device.
     * @param  string $default Default value.
     * @return mixed
     */
    function astra_responsive_font($font, $device = 'desktop', $default = '')
    {
    }
    /**
     * Get Font CSS value
     *
     * Syntax:
     *
     *  astra_get_font_css_value( VALUE, DEVICE, UNIT );
     *
     * E.g.
     *
     *  astra_get_css_value( VALUE, 'desktop', '%' );
     *  astra_get_css_value( VALUE, 'tablet' );
     *  astra_get_css_value( VALUE, 'mobile' );
     *
     * @param  string $value        CSS value.
     * @param  string $unit         CSS unit.
     * @param  string $device       CSS device.
     * @return mixed                CSS value depends on $unit & $device
     */
    function astra_get_font_css_value($value, $unit = 'px', $device = 'desktop')
    {
    }
    /**
     * Get Font family
     *
     * Syntax:
     *
     *  astra_get_font_family( VALUE, DEFAULT );
     *
     * E.g.
     *  astra_get_font_family( VALUE, '' );
     *
     * @since  1.0.19
     *
     * @param  string $value       CSS value.
     * @return mixed               CSS value depends on $unit
     */
    function astra_get_font_family($value = '')
    {
    }
    /**
     * Get CSS value
     *
     * Syntax:
     *
     *  astra_get_css_value( VALUE, UNIT );
     *
     * E.g.
     *
     *  astra_get_css_value( VALUE, 'url' );
     *  astra_get_css_value( VALUE, 'px' );
     *  astra_get_css_value( VALUE, 'em' );
     *
     * @param  string $value        CSS value.
     * @param  string $unit         CSS unit.
     * @param  string $default      CSS default font.
     * @return mixed               CSS value depends on $unit
     */
    function astra_get_css_value($value = '', $unit = 'px', $default = '')
    {
    }
    /**
     * Adjust Brightness
     *
     * @param  array $bg_obj   Color code in HEX.
     *
     * @return array         Color code in HEX.
     */
    function astra_get_background_obj($bg_obj)
    {
    }
    /**
     * Parse CSS
     *
     * @param  array $css_output Array of CSS.
     * @param  mixed $min_media  Min Media breakpoint.
     * @param  mixed $max_media  Max Media breakpoint.
     * @return string             Generated CSS.
     */
    function astra_parse_css($css_output = array(), $min_media = '', $max_media = '')
    {
    }
    /**
     * Return Theme options.
     *
     * @param  string $option       Option key.
     * @param  mixed  $default      Option default value.
     * @param  string $deprecated   Option default value.
     * @return mixed               Return option value.
     */
    function astra_get_option($option, $default = '', $deprecated = '')
    {
    }
    /**
     * Update Theme options.
     *
     * @param  string $option option key.
     * @param  Mixed  $value  option value.
     * @return void
     */
    function astra_update_option($option, $value)
    {
    }
    /**
     * Update Theme options.
     *
     * @param  string $option option key.
     * @return void
     */
    function astra_delete_option($option)
    {
    }
    /**
     * Return Theme options from postmeta.
     *
     * @param  string  $option_id Option ID.
     * @param  string  $default   Option default value.
     * @param  boolean $only_meta Get only meta value.
     * @param  string  $extension Is value from extension.
     * @param  string  $post_id   Get value from specific post by post ID.
     * @return Mixed             Return option value.
     */
    function astra_get_option_meta($option_id, $default = '', $only_meta = \false, $extension = '', $post_id = '')
    {
    }
    /**
     * Get post ID.
     *
     * @param  string $post_id_override Get override post ID.
     * @return number                   Post ID.
     */
    function astra_get_post_id($post_id_override = '')
    {
    }
    /**
     * Display classes for primary div
     *
     * @param string|array $class One or more classes to add to the class list.
     * @return void        Echo classes.
     */
    function astra_primary_class($class = '')
    {
    }
    /**
     * Retrieve the classes for the primary element as an array.
     *
     * @param string|array $class One or more classes to add to the class list.
     * @return array        Return array of classes.
     */
    function astra_get_primary_class($class = '')
    {
    }
    /**
     * Retrieve the classes for the secondary element as an array.
     *
     * @param string|array $class One or more classes to add to the class list.
     * @return void        echo classes.
     */
    function astra_secondary_class($class = '')
    {
    }
    /**
     * Retrieve the classes for the secondary element as an array.
     *
     * @param string|array $class One or more classes to add to the class list.
     * @return array        Return array of classes.
     */
    function astra_get_secondary_class($class = '')
    {
    }
    /**
     * Get post format
     *
     * @param  string $post_format_override Override post formate.
     * @return string                       Return post format.
     */
    function astra_get_post_format($post_format_override = '')
    {
    }
    /**
     * Wrapper function for get_the_title() for blog post.
     *
     * Displays title only if the page title bar is disabled.
     *
     * @since 1.0.15
     * @param string $before Optional. Content to prepend to the title.
     * @param string $after  Optional. Content to append to the title.
     * @param int    $post_id Optional, default to 0. Post id.
     * @param bool   $echo   Optional, default to true.Whether to display or return.
     * @return string|void String if $echo parameter is false.
     */
    function astra_the_post_title($before = '', $after = '', $post_id = 0, $echo = \true)
    {
    }
    /**
     * Wrapper function for the_title()
     *
     * Displays title only if the page title bar is disabled.
     *
     * @param string $before Optional. Content to prepend to the title.
     * @param string $after  Optional. Content to append to the title.
     * @param int    $post_id Optional, default to 0. Post id.
     * @param bool   $echo   Optional, default to true.Whether to display or return.
     * @return string|void String if $echo parameter is false.
     */
    function astra_the_title($before = '', $after = '', $post_id = 0, $echo = \true)
    {
    }
    /**
     * Wrapper function for get_the_title()
     *
     * Return title for Title Bar and Normal Title.
     *
     * @param int  $post_id Optional, default to 0. Post id.
     * @param bool $echo   Optional, default to false. Whether to display or return.
     * @return string|void String if $echo parameter is false.
     */
    function astra_get_the_title($post_id = 0, $echo = \false)
    {
    }
    /**
     * Don't apply direct new layouts to legacy users.
     *
     * @since 4.0.0
     * @return boolean false if it is an existing user , true if not.
     */
    function astra_use_dynamic_blog_layouts()
    {
    }
    /**
     * Get taxonomy archive banner for layout 1.
     *
     * @since 4.0.0
     */
    function astra_get_taxonomy_banner_legacy_layout()
    {
    }
    /**
     * Wrapper function for the_title()
     *
     * Displays title only if the page title bar is disabled.
     */
    function astra_archive_page_info()
    {
    }
    /**
     * Adjust Brightness
     *
     * @param  string $hex   Color code in HEX.
     * @param  number $steps brightness value.
     * @param  string $type  brightness is reverse or default.
     * @return string        Color code in HEX.
     */
    function astra_adjust_brightness($hex, $steps, $type)
    {
    }
    /**
     * Convert colors from HEX to RGBA
     *
     * @param  string  $color   Color code in HEX.
     * @param  boolean $opacity Color code opacity.
     * @return string           Color code in RGB or RGBA.
     */
    function astra_hex_to_rgba($color, $opacity = \false)
    {
    }
    /**
     * Allow filter to enable/disable page builder compatibility.
     *
     * @see  https://wpastra.com/docs/recommended-settings-beaver-builder-astra/
     * @see  https://wpastra.com/docs/recommended-settings-for-elementor/
     *
     * @since  1.2.2
     * @return  bool True - If the page builder compatibility is enabled. False - IF the page builder compatibility is disabled.
     */
    function astra_enable_page_builder_compatibility()
    {
    }
    /**
     * Returns an URL with utm tags
     * the admin settings page.
     *
     * @param string $url    URL fo the site.
     * @param string $source utm source.
     * @param string $medium utm medium.
     * @param string $campaign utm campaign.
     * @return mixed
     */
    function astra_get_pro_url($url, $source = '', $medium = '', $campaign = '')
    {
    }
    /**
     * Display search form.
     *
     * @param bool $echo Default to echo and not return the form.
     * @return string|void String when $echo is false.
     */
    function astra_get_search_form($echo = \true)
    {
    }
    /**
     * Check if we're being delivered AMP
     *
     * @return bool
     */
    function astra_is_amp_endpoint()
    {
    }
    /**
     * Get Spacing value
     *
     * @param  array  $option    CSS value.
     * @param  string $side  top | bottom | left | right.
     * @param  string $device  CSS device.
     * @param  string $default Default value.
     * @param  string $prefix Prefix value.
     * @return mixed
     */
    function astra_responsive_spacing($option, $side = '', $device = 'desktop', $default = '', $prefix = '')
    {
    }
    /**
     * Get the tablet breakpoint value.
     *
     * @param mixed $min min.
     * @param mixed $max max.
     *
     * @since 2.4.0
     *
     * @return number $breakpoint.
     */
    function astra_get_tablet_breakpoint($min = '', $max = '')
    {
    }
    /**
     * Get the mobile breakpoint value.
     *
     * @param string $min min.
     * @param string $max max.
     *
     * @since 2.4.0
     *
     * @return number header_breakpoint.
     */
    function astra_get_mobile_breakpoint($min = '', $max = '')
    {
    }
    /**
     * Astra Responsive Colors
     *
     * @param  array  $setting      Responsive colors.
     * @param  string $css_property CSS property.
     * @param  string $selector     CSS selector.
     * @return string               Dynamic responsive CSS.
     */
    function astra_color_responsive_css($setting, $css_property, $selector)
    {
    }
    /**
     * Check if layout is bb themer's layout
     */
    function astra_check_is_bb_themer_layout()
    {
    }
    /**
     * Check if white label option is enabled in astra pro plugin
     */
    function astra_is_white_labelled()
    {
    }
    /**
     * Get the value for font-display property.
     *
     * @since 1.8.6
     * @return string
     */
    function astra_get_fonts_display_property()
    {
    }
    /**
     * Generate Responsive Background Color CSS.
     *
     * @param array  $bg_obj_res array of background object.
     * @param string $device CSS for which device.
     * @return array
     */
    function astra_get_responsive_background_obj($bg_obj_res, $device)
    {
    }
    /**
     * Common function to check is pagination is enabled on current page.
     *
     * @since 3.0.1
     * @return boolean
     */
    function astra_check_pagination_enabled()
    {
    }
    /**
     * Verify is current post comments are enabled or not for applying dynamic CSS.
     *
     * @since 3.0.1
     * @return boolean
     */
    function astra_check_current_post_comment_enabled()
    {
    }
    /**
     * Dont apply zero size to existing user.
     *
     * @since 3.6.9
     * @return boolean false if it is an existing user , true if not.
     */
    function astra_zero_font_size_case()
    {
    }
    /**
     * Check the WordPress version.
     *
     * @since  2.5.4
     * @param string $version   WordPress version to compare with the current version.
     * @param mixed  $compare   Comparison value i.e > or < etc.
     * @return bool|null            True/False based on the  $version and $compare value.
     */
    function astra_wp_version_compare($version, $compare)
    {
    }
    /**
     * Check if existing setup is live with old block editor compatibilities.
     *
     * @return bool true|false.
     */
    function astra_block_based_legacy_setup()
    {
    }
    /**
     * Check is new structural things are updated.
     *
     * @return bool true|false.
     */
    function astra_check_is_structural_setup()
    {
    }
    /**
     * Check if the user is old sidebar user.
     *
     * @since 3.9.4
     * @return bool true|false.
     */
    function astra_check_old_sidebar_user()
    {
    }
    /**
     * Check if user is old for hiding/showing password icon field for login my-account form.
     *
     * @since 3.9.2
     * @return bool true|false.
     */
    function astra_load_woocommerce_login_form_password_icon()
    {
    }
    /**
     * Function to add narrow width properties in the frontend.
     *
     * @since 4.0.0
     * @param string $location container layout for single-post, archives, pages, page meta.
     * @param string $narrow_container_max_width  dynamic container width in px.
     * @return string Parsed CSS based on $location and $narrow_container_max_width.
     */
    function astra_narrow_container_width($location, $narrow_container_max_width)
    {
    }
    /**
     * Astra Color Palettes
     *
     * @since 1.0.23
     * @param array $color_palette  customizer color palettes.
     * @return array  $color_palette updated customizer color palettes.
     */
    function astra_deprecated_color_palette($color_palette)
    {
    }
    /**
     * Astra Single Post Navigation
     *
     * @since 1.0.27
     * @param boolean $post_nav true | false.
     * @return boolean $post_nav true for enabled | false for disable.
     */
    function astra_deprecated_sigle_post_navigation_enabled($post_nav)
    {
    }
    /**
     * Astra Header elements.
     *
     * @since 1.2.2
     * @param array  $elements List of elements.
     * @param string $header Header section type.
     * @return array
     */
    function astra_deprecated_primary_header_main_rt_section($elements, $header)
    {
    }
    /**
     * Astra Filter Deprecated
     *
     * @since 1.1.1
     * @param string $tag         The name of the filter hook.
     * @param array  $args        Array of additional function arguments to be passed to apply_filters().
     * @param string $version     The version of WordPress that deprecated the hook.
     * @param string $replacement Optional. The hook that should have been used. Default false.
     * @param string $message     Optional. A message regarding the change. Default null.
     */
    function astra_apply_filters_deprecated($tag, $args, $version, $replacement = \false, $message = \null)
    {
    }
    /**
     * Display footer builder markup.
     *
     * @since 3.7.4
     * @param boolean $display_footer true | false.
     * @return boolean true for enabled | false for disable.
     */
    function astra_deprecated_ast_footer_bar_display_filter($display_footer)
    {
    }
    /**
     * Display header builder markup.
     *
     * @since 3.7.4
     * @param boolean $display_header true | false.
     * @return boolean true for enabled | false for disable.
     */
    function astra_deprecated_ast_main_header_display_filter($display_header)
    {
    }
    /**
     * Border class to secondary submenu
     *
     * @since 3.7.4
     * @param string $class_selector custom class assigned to secondary submenu.
     * @return string  $class_selector updated class selector.
     */
    function astra_deprecated_secondary_submenu_border_class_filter($class_selector)
    {
    }
    /**
     * Image, group compatibility support released in v2.4.4.
     *
     * @since 3.7.4
     * @param boolean $block_support true | false.
     * @return boolean true for enabled | false for disable.
     */
    function astra_deprecated_gtn_image_group_css_comp_filter($block_support)
    {
    }
    /**
     * Footer bar meta setting option.
     *
     * @since 3.7.4
     * @param boolean $display_footer_bar true | false.
     * @return boolean true for enabled | false for disable.
     */
    function astra_deprecated_ast_footer_sml_layout_filter($display_footer_bar)
    {
    }
    /**
     * Border class to primary submenu
     *
     * @since 3.7.4
     * @param string $class_selector custom class assigned to primary submenu.
     * @return string  $class_selector updated class selector.
     */
    function astra_deprecated_primary_submenu_border_class_filter($class_selector)
    {
    }
    /**
     * Single meta markup filter.
     *
     * @since 4.0.2
     * @param string $meta_markup Markup of meta.
     * @return string  $meta_markup Markup of meta.
     */
    function astra_deprecated_astra_single_banner_post_meta_filter($meta_markup)
    {
    }
    /**
     * Don't apply direct new layouts to legacy users.
     *
     * @since 4.1.0
     * @param string $dynamic_blog_layout false if it is an existing user , true if not.
     * @return boolean  $dynamic_blog_layout false if it is an existing user , true if not.
     */
    function astra_deprecated_astra_get_option_dynamic_blog_layouts_filter($dynamic_blog_layout)
    {
    }
    /**
     * Deprecating footer_menu_static_css function.
     *
     * Footer menu specific static CSS function.
     *
     * @since 3.7.4
     * @deprecated footer_menu_static_css() Use astra_footer_menu_static_css()
     * @see astra_footer_menu_static_css()
     *
     * @return string Parsed CSS
     */
    function footer_menu_static_css()
    {
    }
    /**
     * Deprecating is_support_footer_widget_right_margin function.
     *
     * Backward managing function based on flag - 'support-footer-widget-right-margin' which fixes right margin issue in builder widgets.
     *
     * @since 3.7.4
     * @deprecated is_support_footer_widget_right_margin() Use astra_support_footer_widget_right_margin()
     * @see astra_support_footer_widget_right_margin()
     *
     * @return bool true|false
     */
    function is_support_footer_widget_right_margin()
    {
    }
    /**
     * Deprecating prepare_button_defaults function.
     *
     * Default configurations for builder button components.
     *
     * @since 3.7.4
     * @deprecated prepare_button_defaults() Use astra_prepare_button_defaults()
     * @param array  $defaults Button default configs.
     * @param string $index builder button component index.
     * @see astra_prepare_button_defaults()
     *
     * @return array
     */
    function prepare_button_defaults($defaults, $index)
    {
    }
    /**
     * Deprecating prepare_html_defaults function.
     *
     * Default configurations for builder HTML components.
     *
     * @since 3.7.4
     * @deprecated prepare_html_defaults() Use astra_prepare_html_defaults()
     * @param array  $defaults HTML default configs.
     * @param string $index builder HTML component index.
     * @see astra_prepare_html_defaults()
     *
     * @return array
     */
    function prepare_html_defaults($defaults, $index)
    {
    }
    /**
     * Deprecating prepare_social_icon_defaults function.
     *
     * Default configurations for builder Social Icon components.
     *
     * @since 3.7.4
     * @deprecated prepare_social_icon_defaults() Use astra_prepare_social_icon_defaults()
     * @param array  $defaults Social Icon default configs.
     * @param string $index builder Social Icon component index.
     * @see astra_prepare_social_icon_defaults()
     *
     * @return array
     */
    function prepare_social_icon_defaults($defaults, $index)
    {
    }
    /**
     * Deprecating prepare_widget_defaults function.
     *
     * Default configurations for builder Widget components.
     *
     * @since 3.7.4
     * @deprecated prepare_widget_defaults() Use astra_prepare_widget_defaults()
     * @param array  $defaults Widget default configs.
     * @param string $index builder Widget component index.
     * @see astra_prepare_widget_defaults()
     *
     * @return array
     */
    function prepare_widget_defaults($defaults, $index)
    {
    }
    /**
     * Deprecating prepare_menu_defaults function.
     *
     * Default configurations for builder Menu components.
     *
     * @since 3.7.4
     * @deprecated prepare_menu_defaults() Use astra_prepare_menu_defaults()
     * @param array  $defaults Menu default configs.
     * @param string $index builder Menu component index.
     * @see astra_prepare_menu_defaults()
     *
     * @return array
     */
    function prepare_menu_defaults($defaults, $index)
    {
    }
    /**
     * Deprecating prepare_divider_defaults function.
     *
     * Default configurations for builder Divider components.
     *
     * @since 3.7.4
     * @deprecated prepare_divider_defaults() Use astra_prepare_divider_defaults()
     * @param array  $defaults Divider default configs.
     * @param string $index builder Divider component index.
     * @see astra_prepare_divider_defaults()
     *
     * @return array
     */
    function prepare_divider_defaults($defaults, $index)
    {
    }
    /**
     * Deprecating is_astra_pagination_enabled function.
     *
     * Checking if Astra's pagination enabled.
     *
     * @since 3.7.4
     * @deprecated is_astra_pagination_enabled() Use astra_check_pagination_enabled()
     * @see astra_check_pagination_enabled()
     *
     * @return bool true|false
     */
    function is_astra_pagination_enabled()
    {
    }
    /**
     * Deprecating is_current_post_comment_enabled function.
     *
     * Checking if current post's comment enabled and comment section is open.
     *
     * @since 3.7.4
     * @deprecated is_current_post_comment_enabled() Use astra_check_current_post_comment_enabled()
     * @see astra_check_current_post_comment_enabled()
     *
     * @return bool true|false
     */
    function is_current_post_comment_enabled()
    {
    }
    /**
     * Deprecating ast_load_preload_local_fonts function.
     *
     * Preload Google Fonts - Feature of self-hosting font.
     *
     * @since 3.7.4
     * @deprecated ast_load_preload_local_fonts() Use astra_load_preload_local_fonts()
     * @param string $google_font_url Google Font URL generated by customizer config.
     * @see astra_load_preload_local_fonts()
     *
     * @return string
     */
    function ast_load_preload_local_fonts($google_font_url)
    {
    }
    /**
     * Deprecating ast_get_webfont_url function.
     *
     * Getting webfont based Google font URL.
     *
     * @since 3.7.4
     * @deprecated ast_get_webfont_url() Use astra_get_webfont_url()
     * @param string $google_font_url Google Font URL generated by customizer config.
     * @see astra_get_webfont_url()
     *
     * @return string
     */
    function ast_get_webfont_url($google_font_url)
    {
    }
    /**
     * Astra Filter Deprecated
     *
     * @since 1.1.1
     * @param string $tag         The name of the filter hook.
     * @param array  $args        Array of additional function arguments to be passed to apply_filters().
     * @param string $version     The version of WordPress that deprecated the hook.
     * @param string $replacement Optional. The hook that should have been used. Default false.
     * @param string $message     Optional. A message regarding the change. Default null.
     */
    function astra_do_action_deprecated($tag, $args, $version, $replacement = \false, $message = \null)
    {
    }
    /**
     * Depreciating 'asta_register_admin_menu' action & replacing with 'astra_register_admin_menu'.
     *
     * @param string   $parent_page        Admin menu page.
     * @param string   $page_title         The text to be displayed in the title tags of the page when the menu is selected.
     * @param string   $capability         The capability required for this menu to be displayed to the user.
     * @param string   $page_menu_slug     The slug name to refer to this menu by (should be unique for this menu).
     * @param callable $page_menu_func     The function to be called to output the content for this page.
     *
     * @since 3.7.4
     */
    function astra_deprecated_asta_register_admin_menu_hook($parent_page, $page_title, $capability, $page_menu_slug, $page_menu_func)
    {
    }
    /**
     * Actions which are deprecated in admin redesign phase.
     *
     * @since 4.0.0
     */
    function astra_show_deprecated_admin_hooks_warnings()
    {
    }
    /**
     * Site Sidebar
     *
     * Default 'right sidebar' for overall site.
     */
    function astra_page_layout()
    {
    }
    /**
     * Determines, whether the specific hook type is actually supported.
     *
     * Plugin developers should always check for the support of a <strong>specific</strong>
     * hook type before hooking a callback function to a hook of this type.
     *
     * Example:
     * <code>
     *      if ( current_theme_supports( 'astra_hooks', 'header' ) )
     *          add_action( 'astra_head_top', 'prefix_header_top' );
     * </code>
     *
     * @param bool  $bool true.
     * @param array $args The hook type being checked.
     * @param array $registered All registered hook types.
     *
     * @return bool
     */
    function astra_current_theme_supports($bool, $args, $registered)
    {
    }
    /**
     * HTML <html> hook
     * Special case, useful for <DOCTYPE>, etc.
     * $astra_supports[] = 'html;
     */
    function astra_html_before()
    {
    }
    /**
     * HTML <body> hooks
     * $astra_supports[] = 'body';
     */
    function astra_body_top()
    {
    }
    /**
     * Body Bottom
     */
    function astra_body_bottom()
    {
    }
    /**
     * HTML <head> hooks
     *
     * $astra_supports[] = 'head';
     */
    function astra_head_top()
    {
    }
    /**
     * Head Bottom
     */
    function astra_head_bottom()
    {
    }
    /**
     * Semantic <header> hooks
     *
     * $astra_supports[] = 'header';
     */
    function astra_header_before()
    {
    }
    /**
     * Site Header
     */
    function astra_header()
    {
    }
    /**
     * Masthead Top
     */
    function astra_masthead_top()
    {
    }
    /**
     * Masthead
     */
    function astra_masthead()
    {
    }
    /**
     * Masthead Bottom
     */
    function astra_masthead_bottom()
    {
    }
    /**
     * Header After
     */
    function astra_header_after()
    {
    }
    /**
     * Main Header bar top
     */
    function astra_main_header_bar_top()
    {
    }
    /**
     * Main Header bar bottom
     */
    function astra_main_header_bar_bottom()
    {
    }
    /**
     * Main Header Content
     */
    function astra_masthead_content()
    {
    }
    /**
     * Main toggle button before
     */
    function astra_masthead_toggle_buttons_before()
    {
    }
    /**
     * Main toggle buttons
     */
    function astra_masthead_toggle_buttons()
    {
    }
    /**
     * Main toggle button after
     */
    function astra_masthead_toggle_buttons_after()
    {
    }
    /**
     * Semantic <content> hooks
     *
     * $astra_supports[] = 'content';
     */
    function astra_content_before()
    {
    }
    /**
     * Content after
     */
    function astra_content_after()
    {
    }
    /**
     * Content top
     */
    function astra_content_top()
    {
    }
    /**
     * Content bottom
     */
    function astra_content_bottom()
    {
    }
    /**
     * Content while before
     */
    function astra_content_while_before()
    {
    }
    /**
     * Content loop
     */
    function astra_content_loop()
    {
    }
    /**
     * Conten Page Loop.
     *
     * Called from page.php
     */
    function astra_content_page_loop()
    {
    }
    /**
     * Content while after
     */
    function astra_content_while_after()
    {
    }
    /**
     * Semantic <entry> hooks
     *
     * $astra_supports[] = 'entry';
     */
    function astra_entry_before()
    {
    }
    /**
     * Entry after
     */
    function astra_entry_after()
    {
    }
    /**
     * Entry content before
     */
    function astra_entry_content_before()
    {
    }
    /**
     * Entry content after
     */
    function astra_entry_content_after()
    {
    }
    /**
     * Entry Top
     */
    function astra_entry_top()
    {
    }
    /**
     * Entry bottom
     */
    function astra_entry_bottom()
    {
    }
    /**
     * Single Post Header Before
     */
    function astra_single_header_before()
    {
    }
    /**
     * Single Post Header After
     */
    function astra_single_header_after()
    {
    }
    /**
     * Single Post Header Top
     */
    function astra_single_header_top()
    {
    }
    /**
     * Single Post Header Bottom
     */
    function astra_single_header_bottom()
    {
    }
    /**
     * Comments block hooks
     *
     * $astra_supports[] = 'comments';
     */
    function astra_comments_before()
    {
    }
    /**
     * Comments after.
     */
    function astra_comments_after()
    {
    }
    /**
     * Semantic <sidebar> hooks
     *
     * $astra_supports[] = 'sidebar';
     */
    function astra_sidebars_before()
    {
    }
    /**
     * Sidebars after
     */
    function astra_sidebars_after()
    {
    }
    /**
     * Semantic <footer> hooks
     *
     * $astra_supports[] = 'footer';
     */
    function astra_footer()
    {
    }
    /**
     * Footer before
     */
    function astra_footer_before()
    {
    }
    /**
     * Footer after
     */
    function astra_footer_after()
    {
    }
    /**
     * Footer top
     */
    function astra_footer_content_top()
    {
    }
    /**
     * Footer
     */
    function astra_footer_content()
    {
    }
    /**
     * Footer bottom
     */
    function astra_footer_content_bottom()
    {
    }
    /**
     * Archive header
     */
    function astra_archive_header()
    {
    }
    /**
     * Pagination
     */
    function astra_pagination()
    {
    }
    /**
     * Entry content single
     */
    function astra_entry_content_single()
    {
    }
    /**
     * Entry content single-page.
     *
     * @since 4.0.0
     */
    function astra_entry_content_single_page()
    {
    }
    /**
     * 404
     */
    function astra_entry_content_404_page()
    {
    }
    /**
     * Entry content blog
     */
    function astra_entry_content_blog()
    {
    }
    /**
     * Blog featured post section
     */
    function astra_blog_post_featured_format()
    {
    }
    /**
     * Primary Content Top
     */
    function astra_primary_content_top()
    {
    }
    /**
     * Primary Content Bottom
     */
    function astra_primary_content_bottom()
    {
    }
    /**
     * 404 Page content template action.
     */
    function astra_404_content_template()
    {
    }
    /**
     * Fire the wp_body_open action.
     * Adds backward compatibility for WordPress versions < 5.2
     *
     * @since 1.8.7
     */
    function wp_body_open()
    {
    }
    /**
     * Astra Icons - Dynamic CSS.
     *
     * @param string $dynamic_css Dynamic CSS.
     * @since 3.5.0
     */
    function astra_icons_static_css($dynamic_css)
    {
    }
    /**
     * This is new compatibillity CSS added at time 'improve-gb-editor-ui'. So requiring this for new setup as well that's why making it common.
     *
     * @since 3.6.5
     */
    function astra_get_block_editor_required_css()
    {
    }
    /**
     * Astra WordPress compatibility - Dynamic CSS.
     *
     * @param string $dynamic_css Dynamic CSS.
     * @since 3.6.5
     */
    function astra_block_editor_compatibility_css($dynamic_css)
    {
    }
    /**
     * Astra block editor 2.0 Spectra compatibility - Dynamic CSS.
     *
     * @param string $dynamic_css Dynamic CSS.
     * @return string $dynamic_css Dynamic CSS.
     *
     * @since 3.8.0
     */
    function astra_load_modern_block_editor_ui($dynamic_css)
    {
    }
    /**
     * Comments - Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @return String Generated dynamic CSS for Pagination.
     *
     * @since 3.2.0
     */
    function astra_comments_css($dynamic_css)
    {
    }
    /**
     * Init fire to add required compatibility for divi page bulder.
     *
     * Case: In customizer-defaults update case Astra v3.8.3 we introduced some padding for stretched layout, that should not load for page builder layouts, that is why this compatibility added here.
     *
     * @param int $post_id Current post ID.
     *
     * @since 3.8.3
     */
    function astra_check_any_page_builder_is_active($post_id)
    {
    }
    /**
     * Container Layout - Dynamic CSS.
     *
     * @since 3.3.0
     */
    function astra_container_layout_css()
    {
    }
    /**
     * Content Background - Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @return String Generated dynamic CSS for content background.
     *
     * @since 3.2.0
     */
    function astra_content_background_css($dynamic_css)
    {
    }
    /**
     * Old Header Menu Last Item - Dynamic CSS.
     *
     * @param string $dynamic_css
     * @since 3.5.0
     */
    function astra_old_header_custom_menu_css($dynamic_css)
    {
    }
    /**
     * Generate palette CSS variable styles on the front end.
     *
     * @since 3.7.0
     * @param string $dynamic_css dynamic css.
     * @return string
     */
    function astra_generate_global_palette_style($dynamic_css)
    {
    }
    /**
     * Inline On Mobile - Dynamic CSS.
     *
     * @param string $dynamic_css Dynamic CSS.
     * @since 3.5.0
     * @return string
     */
    function astra_inline_on_mobile_css($dynamic_css)
    {
    }
    /**
     * Pagination - Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @return String Generated dynamic CSS for Pagination.
     *
     * @since 3.3.0
     */
    function astra_pagination_css($dynamic_css)
    {
    }
    /**
     * Function to get Body Font Family
     *
     * @since 1.0.0
     * @return string
     */
    function astra_body_font_family()
    {
    }
    /**
     * Function to Add Header Breakpoint Style
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @since 1.5.2 Remove ob_start, ob_get_clean and .main-header-bar-wrap::before{content} for our .ast-header-break-point class
     * @since 1.0.0
     */
    function astra_header_breakpoint_style($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    /**
     * Function filter comment form arguments
     *
     * @since 1.0.0
     * @param array $layout     Comment form arguments.
     * @return array
     */
    function astra_404_page_layout($layout)
    {
    }
    /**
     * Return current content layout
     *
     * @since 1.0.0
     * @return mixed content layout.
     */
    function astra_get_content_layout()
    {
    }
    /**
     * Function to check if it is Internet Explorer.
     *
     * @return true | false boolean
     */
    function astra_check_is_ie()
    {
    }
    /**
     * Replace header logo.
     *
     * @param array  $image Size.
     * @param int    $attachment_id Image id.
     * @param sting  $size Size name.
     * @param string $icon Icon.
     *
     * @return array Size of image
     */
    function astra_replace_header_logo($image, $attachment_id, $size, $icon)
    {
    }
    /**
     * Strpos over an array.
     *
     * @since  1.2.4
     * @param  String  $haystack The string to search in.
     * @param  Array   $needles  Array of needles to be passed to strpos().
     * @param  integer $offset   If specified, search will start this number of characters counted from the beginning of the string. If the offset is negative, the search will start this number of characters counted from the end of the string.
     *
     * @return bool            True if haystack if part of any of the $needles.
     */
    function astra_strposa($haystack, $needles, $offset = 0)
    {
    }
    /**
     * Get a specific property of an array without needing to check if that property exists.
     *
     * Provide a default value if you want to return a specific value if the property is not set.
     *
     * @since  1.2.7
     * @access public
     * @author Gravity Forms - Easiest Tool to Create Advanced Forms for Your WordPress-Powered Website.
     * @link  https://www.gravityforms.com/
     *
     * @param array  $array   Array from which the property's value should be retrieved.
     * @param string $prop    Name of the property to be retrieved.
     * @param string $default Optional. Value that should be returned if the property is not set or empty. Defaults to null.
     *
     * @return null|string|mixed The value
     */
    function astra_get_prop($array, $prop, $default = \null)
    {
    }
    /**
     * Build list of attributes into a string and apply contextual filter on string.
     *
     * The contextual filter is of the form `astra_attr_{context}_output`.
     *
     * @since 1.6.2
     * @credits - Genesis Theme By StudioPress.
     *
     * @param string $context    The context, to build filter name.
     * @param array  $attributes Optional. Extra attributes to merge with defaults.
     * @param array  $args       Optional. Custom data to pass to filter.
     * @return string String of HTML attributes and values.
     */
    function astra_attr($context, $attributes = array(), $args = array())
    {
    }
    /**
     * Get the theme author details
     *
     * @since  3.1.0
     * @return array            Return theme author URL and name.
     */
    function astra_get_theme_author_details()
    {
    }
    /**
     * Remove Base Color > Background Color option from the customize array.
     *
     * @since 2.4.0
     * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
     * @return $wp_customize
     */
    function astra_remove_controls($wp_customize)
    {
    }
    /**
     * Add dropdown icon if menu item has children.
     *
     * @since 3.3.0
     *
     * @param string   $title The menu item title.
     * @param WP_Post  $item All of our menu item data.
     * @param stdClass $args All of our menu item args.
     * @param int      $depth Depth of menu item.
     * @return string The menu item.
     */
    function astra_dropdown_icon_to_menu_link($title, $item, $args, $depth)
    {
    }
    /**
     * Is theme existing header footer configs enable.
     *
     * @since 3.0.0
     *
     * @return boolean true/false.
     */
    function astra_existing_header_footer_configs()
    {
    }
    /**
     * Get Spacing value
     *
     * @param  array  $value        Responsive spacing value with unit.
     * @param  string $operation    + | - | * | /.
     * @param  string $from         Perform operation from the value.
     * @param  string $from_unit    Perform operation from the value of unit.
     *
     * @since 3.0.0
     * @return mixed
     */
    function astra_calculate_spacing($value, $operation = '', $from = '', $from_unit = '')
    {
    }
    /**
     * Generate HTML Open markup
     *
     * @param string $context unique markup key.
     * @param array  $args {
     *      Contains markup arguments.
     *     @type array  attrs    Initial attributes to apply to `open` markup.
     *     @type bool   echo    Flag indicating whether to echo or return the resultant string.
     * }
     * @since 3.3.0
     * @return mixed
     */
    function astra_markup_open($context, $args = array())
    {
    }
    /**
     * Generate HTML close markup
     *
     * @param string $context unique markup key.
     * @param array  $args {
     *      Contains markup arguments.
     *     @type string close   Closing HTML markup.
     *     @type array  attrs    Initial attributes to apply to `open` markup.
     *     @type bool   echo    Flag indicating whether to echo or return the resultant string.
     * }
     * @since 3.3.0
     * @return mixed
     */
    function astra_markup_close($context, $args = array())
    {
    }
    /**
     * Provision to update display rules for visibility of Related Posts section in Astra.
     *
     * @since 3.4.0
     * @return bool
     */
    function astra_target_rules_for_related_posts()
    {
    }
    /**
     * Check if elementor plugin is active on the site.
     *
     * @since 3.7.0
     * @return bool
     */
    function astra_is_elemetor_active()
    {
    }
    /**
     * Check the Astra addon version.
     * For  major update and frequently we used version_compare, added a function for this for easy maintenance.
     *
     * @param string $version Astra addon version.
     * @param string $compare Compare symbols.
     * @since  3.9.2
     */
    function astra_addon_check_version($version, $compare)
    {
    }
    /**
     * Get a stylesheet URL for a webfont.
     *
     * @since 3.6.0
     *
     * @param string $url    The URL of the remote webfont.
     * @param string $format The font-format. If you need to support IE, change this to "woff".
     *
     * @return string Returns the CSS.
     */
    function astra_get_webfont_url($url, $format = 'woff2')
    {
    }
    /**
     * Get the file preloads.
     *
     * @param string $url    The URL of the remote webfont.
     * @param string $format The font-format. If you need to support IE, change this to "woff".
     */
    function astra_load_preload_local_fonts($url, $format = 'woff2')
    {
    }
    /**
     * Set flag to manage backward compatibility for v3.5.0 earlier users for the transparent header border bottom default value changed.
     *
     * @since 3.6.0
     */
    function astra_get_transparent_header_default_value()
    {
    }
    /**
     * Check compatibility for content background and typography options.
     *
     * @since 3.7.0
     */
    function astra_has_gcp_typo_preset_compatibility()
    {
    }
    /**
     * Check whether user is exising or new to apply the updated default values for button padding & support GB button paddings with global button padding options.
     *
     * @since 3.6.3
     * @return string
     */
    function astra_button_default_padding_updated()
    {
    }
    /**
     * Check is WordPress version is greater than or equal to beta 5.8 version.
     *
     * @since 3.6.5
     * @return boolean
     */
    function astra_has_widgets_block_editor()
    {
    }
    /**
     * Check whether user is exising or new to override the default margin space added to Elementor-TOC widget.
     *
     * @since 3.6.7
     * @return boolean
     */
    function astra_can_remove_elementor_toc_margin_space()
    {
    }
    /**
     * This will check if user is new and apply global color format. This is to manage backward compatibility for colors.
     *
     * @since 3.7.0
     * @return boolean false if it is an existing user, true for new user.
     */
    function astra_has_global_color_format_support()
    {
    }
    /**
     * Check whether widget specific config, dynamic CSS, preview JS needs to remove or not. Following cases considered while implementing this.
     *
     * 1. Is user is from old Astra setup.
     * 2. Check if user is new but on lesser WordPress 5.8 versions.
     * 3. User is new with block widget editor.
     *
     * @since 3.6.8
     * @return boolean
     */
    function astra_remove_widget_design_options()
    {
    }
    /**
     * Get Global Color Palettes
     *
     * @return array color palettes array.
     * @since 3.7.0
     */
    function astra_get_palette_colors()
    {
    }
    /**
     * Get typography presets data.
     *
     * @return array Typography Presets data array.
     * @since 3.7.0
     */
    function astra_get_typography_presets()
    {
    }
    /**
     * Clear Astra + Astra Pro assets cache.
     *
     * @since 3.6.9
     * @return void
     */
    function astra_clear_theme_addon_asset_cache()
    {
    }
    /**
     * Check if Theme Global Colors need to be disable in Elementor global color settings.
     *
     * @since 3.7.4
     * @return bool
     */
    function astra_maybe_disable_global_color_in_elementor()
    {
    }
    /**
     * Check is Elementor Pro version is greater than or equal to beta 3.5 version.
     *
     * @since 3.7.5
     * @return boolean
     */
    function astra_check_elementor_pro_3_5_version()
    {
    }
    /**
     * Should Content BG settings apply to Fullwidth Contained/Stretched layout or not?
     *
     * Do not apply content background to fullwidth layouts in following cases -
     * 1. For backward compatibility.
     * 2. When site layout is Max-width.
     * 3. When site layout is Padded.
     *
     * @since 3.7.8
     * @return boolean
     */
    function astra_apply_content_background_fullwidth_layouts()
    {
    }
    /**
     * Search Component static CSS.
     *
     * @return string
     * @since 3.5.0
     */
    function astra_search_static_css()
    {
    }
    /**
     * Showcase "Upgrade to Pro" notices for Astra & here is the filter work as central control to enable/disable those notices from customizer, meta settings, admin area, pro post types pages.
     *
     * @since 3.9.4
     * @return bool
     */
    function astra_showcase_upgrade_notices()
    {
    }
    /**
     * Function which will return CSS for font-extras control.
     * It includes - line-height, letter-spacing, text-decoration, font-style.
     *
     * @param array  $config contains extra font settings.
     * @param string $setting basis on this setting will return.
     * @param mixed  $unit Unit.
     *
     * @since 4.0.0
     */
    function astra_get_font_extras($config, $setting, $unit = \false)
    {
    }
    /**
     * Function which will return CSS array for font specific props for further parsing CSS.
     * It includes - font-family, font-weight, font-size, line-height, text-transform, letter-spacing, text-decoration, color (optional).
     *
     * @param string $font_family Font family.
     * @param string $font_weight Font weight.
     * @param array  $font_size Font size.
     * @param string $font_extras contains all font controls.
     * @param string $color In most of cases color is also added, so included optional param here.
     *
     * @return array  array of build CSS font settings.
     *
     * @since 4.0.0
     */
    function astra_get_font_array_css($font_family, $font_weight, $font_size, $font_extras, $color = '')
    {
    }
    /**
     * Create instance of Astra_WebFont_Loader class.
     *
     * @param string $font_url Google font URL to set data.
     * @return object
     * @since 3.6.0
     */
    function astra_webfont_loader_instance($font_url = '')
    {
    }
    /**
     * Add a pingback url auto-discovery header for singularly identifiable articles.
     */
    function astra_pingback_header()
    {
    }
    /**
     * Adds schema tags to the body classes.
     *
     * @since 1.0.0
     */
    function astra_schema_body()
    {
    }
    /**
     * Adds custom classes to the array of body classes.
     *
     * @since 1.0.0
     * @param array $classes Classes for the body element.
     * @return array
     */
    function astra_body_classes($classes)
    {
    }
    /**
     * Astra Pagination
     *
     * @since 1.0.0
     * @return void            Generate & echo pagination markup.
     */
    function astra_number_pagination()
    {
    }
    /**
     * Return or echo site logo markup.
     *
     * @since 1.0.0
     * @param  string  $device Device name.
     * @param  boolean $echo Echo markup.
     * @return mixed echo or return markup.
     */
    function astra_logo($device = 'desktop', $echo = \true)
    {
    }
    /**
     * Add custom attribute to custom site logo.
     *
     * @param mixed $html custom logo html.
     * @since 4.1.0
     * @return mixed custom logo html.
     */
    function astra_add_custom_logo_attributes($html)
    {
    }
    /**
     * Return or echo site logo markup.
     *
     * @since 2.2.0
     * @param boolean $display_site_title Site title enable or not.
     * @param boolean $display_site_tagline Site tagline enable or not.
     * @param  string  $device   Device name.
     *
     * @return string return markup.
     */
    function astra_get_site_title_tagline($display_site_title, $display_site_tagline, $device = 'desktop')
    {
    }
    /**
     * Return the selected sections
     *
     * @since 1.0.0
     * @param  string $option Custom content type. E.g. search, text-html etc.
     * @return array         Array of Custom contents.
     */
    function astra_get_dynamic_header_content($option)
    {
    }
    /**
     * Adding Wrapper for Search Form.
     *
     * @since 1.0.0
     * @param  string $option   Search Option name.
     * @param  string $device   Device name.
     * @return mixed Search HTML structure created.
     */
    function astra_get_search($option = '', $device = '')
    {
    }
    /**
     * Get custom HTML added by user.
     *
     * @since 1.0.0
     * @param  string $option_name Option name.
     * @return String TEXT/HTML added by user in options panel.
     */
    function astra_get_custom_html($option_name = '')
    {
    }
    /**
     * Get custom HTML added by user.
     *
     * @since 1.0.0
     * @param string $button_text Button Text.
     * @param string $button_options Button Link.
     * @param string $button_style Button Style.
     * @return String Button added by user in options panel.
     */
    function astra_get_custom_button($button_text = '', $button_options = '', $button_style = '')
    {
    }
    /**
     * Get custom widget added by user.
     *
     * @since  1.0.1.1
     * @param  string $option_name Option name.
     * @return Widget added by user in options panel.
     */
    function astra_get_custom_widget($option_name = '')
    {
    }
    /**
     * Function to get Small Left/Right Footer
     *
     * @since 1.0.0
     * @param string $section   Sections of Small Footer.
     * @return mixed            Markup of sections.
     */
    function astra_get_small_footer($section = '')
    {
    }
    /**
     * Function to get Small Footer Custom Text
     *
     * @since 1.0.14
     * @param string $option Custom text option name.
     * @return mixed         Markup of custom text option.
     */
    function astra_get_small_footer_custom_text($option = '')
    {
    }
    /**
     * Function to get Footer Menu
     *
     * @since 1.0.0
     * @return html
     */
    function astra_get_small_footer_menu()
    {
    }
    /**
     * Site Header - <header>
     *
     * @since 1.0.0
     */
    function astra_header_markup()
    {
    }
    /**
     * Site Title / Logo
     *
     * @since 1.0.0
     */
    function astra_site_branding_markup()
    {
    }
    /**
     * Toggle Button Markup
     *
     * @since 1.0.0
     */
    function astra_toggle_buttons_markup()
    {
    }
    /**
     * Site Title / Logo
     *
     * @since 1.0.0
     */
    function astra_primary_navigation_markup()
    {
    }
    /**
     * Add CSS classes for all menu links inside WP Nav menu items.
     *
     * Right now, if Addon is active we add 'menu-link' class through walker_nav_menu_start_el, but if only theme is being used no clas is assigned to anchors.
     *
     * As we are replacing tag based selector assets to class selector, adding 'menu-link' selector to all anchors inside menu items.
     * Ex. .main-header-menu a => .main-header-menu .menu-link
     *
     * @since 2.5.0
     * @param array $atts   An array of all parameters assigned to menu anchors.
     */
    function astra_menu_anchor_class_for_nav_menus($atts)
    {
    }
    /**
     * Add CSS classes for all menu links inside WP Page Menu items.
     *
     * As we are replacing tag based selector to class selector, adding 'menu-link' selector to all anchors inside menu items.
     *
     * @since 2.5.0
     * @param array $atts   An array of all parameters assigned to menu anchors.
     */
    function astra_menu_anchor_class_for_page_menus($atts)
    {
    }
    /**
     * Add CSS classes from wp_nav_menu the wp_page_menu()'s menu items.
     * This will help avoid targeting wp_page_menu and wp_nav_manu separately in CSS/JS.
     *
     * @since 1.6.9
     * @param array   $css_class    An array of CSS classes to be applied
     *                              to each list item.
     * @param WP_Post $page         Page data object.
     * @param int     $depth        Depth of page, used for padding.
     * @param array   $args         An array of arguments.
     * @param int     $current_page ID of the current page.
     * @return Array CSS classes with added menu class `menu-item`
     */
    function astra_page_css_class($css_class, $page, $depth, $args, $current_page)
    {
    }
    /**
     * Site Footer - <footer>
     *
     * @since 1.0.0
     */
    function astra_footer_markup()
    {
    }
    /**
     * Function to get Header Breakpoint
     *
     * @since 1.4.0 Added Mobile Header Breakpoint option from customizer.
     * @since 1.0.0
     * @return number
     */
    function astra_header_break_point()
    {
    }
    /**
     * Function to get Edit Post Link
     *
     * @since 1.0.0
     * @param string $text      Anchor Text.
     * @param string $before    Anchor Text.
     * @param string $after     Anchor Text.
     * @param int    $id           Anchor Text.
     * @param string $class     Anchor Text.
     * @return void
     */
    function astra_edit_post_link($text, $before = '', $after = '', $id = 0, $class = 'post-edit-link')
    {
    }
    /**
     * Function to get Header Classes
     *
     * @since 1.0.0
     */
    function astra_header_classes()
    {
    }
    /**
     * Return classnames for <header> element.
     *
     * @since 2.1.0
     * @return Array classnames for the <header>
     */
    function astra_get_header_classes()
    {
    }
    /**
     * Function to get Footer Classes
     *
     * @since 1.0.0
     */
    function astra_footer_classes()
    {
    }
    /**
     * Return classnames for <footer> element.
     *
     * @since 2.1.0
     * @return Array classnames for the <footer>
     */
    function astra_get_footer_classes()
    {
    }
    /**
     * Function filter comment form's default fields
     *
     * @since 1.0.0
     * @param array $fields Array of comment form's default fields.
     * @return array        Comment form fields.
     */
    function astra_comment_form_default_fields_markup($fields)
    {
    }
    /**
     * Function filter comment form arguments
     *
     * @since 1.0.0
     * @param array $args   Comment form arguments.
     * @return array
     */
    function astra_comment_form_default_markup($args)
    {
    }
    /**
     * Display Blog Post Excerpt
     *
     * @since 1.0.0
     */
    function astra_the_excerpt()
    {
    }
    /**
     * Get Sidebar
     *
     * @since 1.0.1.1
     * @param  string $sidebar_id   Sidebar Id.
     * @return void
     */
    function astra_get_sidebar($sidebar_id)
    {
    }
    /**
     * Get Footer Default Sidebar
     *
     * @param  string $sidebar_id   Sidebar Id..
     * @return void
     */
    function astra_get_footer_widget($sidebar_id)
    {
    }
    /**
     * Astra entry header class
     *
     * @param bool $echo output being echoed or not.
     *
     * @since 1.0.15
     */
    function astra_entry_header_class($echo = \true)
    {
    }
    /**
     * Astra get post thumbnail image
     *
     * @since 1.0.15
     * @param string  $before Markup before thumbnail image.
     * @param string  $after  Markup after thumbnail image.
     * @param boolean $echo   Output print or return.
     * @return string|void
     */
    function astra_get_post_thumbnail($before = '', $after = '', $echo = \true)
    {
    }
    /**
     * Replace header logo.
     *
     * @param array  $attr Image.
     * @param object $attachment Image obj.
     * @param sting  $size Size name.
     *
     * @return array Image attr.
     */
    function astra_replace_header_attr($attr, $attachment, $size)
    {
    }
    /**
     * Astra Color Palletes.
     *
     * @return array Color Palletes.
     */
    function astra_color_palette()
    {
    }
    /**
     * Get theme name.
     *
     * @return string Theme Name.
     */
    function astra_get_theme_name()
    {
    }
    /**
     * Get Addon name.
     *
     * @return string Addon Name.
     */
    function astra_get_addon_name()
    {
    }
    /**
     * Added this filter to modify the post navigation template to remove the h2 tag from screen reader text.
     */
    function astra_post_navigation_template()
    {
    }
    /**
     * Prevent onboarding of Elementor.
     *
     * @param bool $network_wide Whether to enable the plugin for all sites in the network
     *                            or just the current site. Multisite only. Default false.
     *
     * @since 3.9.0
     */
    function astra_skip_elementor_onboarding($network_wide)
    {
    }
    /**
     * Footer disable on archive pages.
     *
     * @param bool $display_footer for controling the header and footer enable/disable options.
     *
     * @since 3.9.4
     */
    function astra_footer_bar_display_cb($display_footer)
    {
    }
    \define('ASTRA_THEME_POST_STRUCTURE_DIR', \ASTRA_THEME_DIR . 'inc/modules/posts-structures/');
    \define('ASTRA_THEME_POST_STRUCTURE_URI', \ASTRA_THEME_URI . 'inc/modules/posts-structures/');
    /**
     * Archive Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Generated dynamic CSS for Post Structures.
     *
     * @since 4.0.0
     */
    function astra_post_archive_structure_dynamic_css($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    /**
     * Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
     * @return String Generated dynamic CSS for Post Structures.
     *
     * @since 4.0.0
     */
    function astra_post_single_structure_dynamic_css($dynamic_css, $dynamic_css_filtered = '')
    {
    }
    \define('ASTRA_RELATED_POSTS_DIR', \ASTRA_THEME_DIR . 'inc/modules/related-posts/');
    /**
     * Related Posts - Dynamic CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @return String Generated dynamic CSS for Related Posts.
     *
     * @since 3.4.0
     */
    function astra_related_posts_css($dynamic_css)
    {
    }
    /**
     * Related Posts - Static CSS
     *
     * @param  string $dynamic_css          Astra Dynamic CSS.
     * @return String Generated dynamic CSS for Related Posts.
     *
     * @since 3.5.0
     */
    function astra_related_posts_static_css($dynamic_css)
    {
    }
    /**
     * Custom Menu Item Markup
     *
     * => Used in hooks:
     *
     * @see astra_masthead_get_menu_items
     * @see astra_masthead_custom_nav_menu_items
     * @param boolean $display_outside_markup Outside / Inside markup.
     *
     * @since 1.0.0
     */
    function astra_masthead_get_menu_items($display_outside_markup = \false)
    {
    }
    /**
     * Header Custom Menu Item
     *
     * => Used in files:
     *
     * /header.php
     *
     * @since 1.0.0
     * @param  array $args Array of arguments.
     * @return array       Modified menu item array.
     */
    function astra_masthead_custom_page_menu_items($args)
    {
    }
    /**
     * Header Custom Menu Item
     *
     * => Used in files:
     *
     * /header.php
     *
     * @since 1.0.0
     * @param  array $items Nav menu item array.
     * @param  array $args  Nav menu item arguments array.
     * @return array       Modified menu item array.
     */
    function astra_masthead_custom_nav_menu_items($items, $args)
    {
    }
    /**
     * Header toggle buttons
     *
     * => Used in files:
     *
     * /header.php
     *
     * @since 1.0.0
     */
    function astra_masthead_toggle_buttons_primary()
    {
    }
    /**
     * Small Footer
     *
     * => Used in files:
     *
     * /footer.php
     *
     * @since 1.0.0
     */
    function astra_footer_small_footer_template()
    {
    }
    /**
     * Primary Header
     *
     * => Used in files:
     *
     * /header.php
     *
     * @since 1.0.0
     */
    function astra_masthead_primary_template()
    {
    }
    /**
     * Single post markup
     *
     * => Used in files:
     *
     * /template-parts/content-single.php
     *
     * @since 1.0.0
     */
    function astra_entry_content_single_template()
    {
    }
    /**
     * Blog post list markup for blog & search page
     *
     * => Used in files:
     *
     * /template-parts/content-blog.php
     * /template-parts/content-search.php
     *
     * @since 1.0.0
     */
    function astra_entry_content_blog_template()
    {
    }
    /**
     * 404 markup
     *
     * => Used in files:
     *
     * /template-parts/content-404.php
     *
     * @since 1.0.0
     */
    function astra_entry_content_404_page_template()
    {
    }
    /**
     * Footer widgets markup
     *
     * Loads appropriate template file based on the style option selected in options panel.
     *
     * @since 1.0.12
     */
    function astra_advanced_footer_markup()
    {
    }
    /**
     * Footer widgets markup
     *
     * Loads appropriate template file based on the style option selected in options panel.
     *
     * @since 1.0.12
     */
    function astra_header_custom_item_outside_menu()
    {
    }
    /**
     * Single page markup
     *
     * => Used in files:
     *
     * /template-parts/single/content-header.php
     *
     * @since 4.0.0
     */
    function astra_entry_content_single_page_template()
    {
    }
    /**
     * Prints HTML with meta information for the categories, tags and comments.
     */
    function astra_entry_footer()
    {
    }
    /**
     * Header Footer builder - Migration of options.
     *
     * @since 3.0.0
     *
     * @return void
     */
    function astra_header_builder_migration()
    {
    }
    /**
     * Header Footer builder - Migration of Primary Header.
     *
     * @since 3.0.0
     * @param array $theme_options Theme options.
     * @param array $used_elements Used Elements array.
     * @param array $widget_options Widget options.
     * @return array
     */
    function astra_primary_header_builder_migration($theme_options, $used_elements, $widget_options)
    {
    }
    /**
     * Header Footer builder - Migration of Below Header.
     *
     * @since 3.0.0
     * @param array $theme_options Theme options.
     * @param array $used_elements Used Elements array.
     * @param array $widget_options Widget options.
     * @return array
     */
    function astra_below_header_builder_migration($theme_options, $used_elements, $widget_options)
    {
    }
    /**
     * Header Footer builder - Migration of Above Header.
     *
     * @since 3.0.0
     * @param array $theme_options Theme options.
     * @param array $used_elements Used Elements array.
     * @param array $widget_options Widget options.
     * @return array
     */
    function astra_above_header_builder_migration($theme_options, $used_elements, $widget_options)
    {
    }
    /**
     * Header Footer builder - Migration of Footer.
     *
     * @since 3.0.0
     * @param array $theme_options Theme options.
     * @param array $used_elements Used Elements array.
     * @param array $widget_options Widget options.
     * @return array
     */
    function astra_footer_builder_migration($theme_options, $used_elements, $widget_options)
    {
    }
    /**
     * Header Footer builder - Migration of Footer Widgets.
     *
     * @since 3.0.0
     * @param array $theme_options Theme options.
     * @param array $used_elements Used Elements array.
     * @param array $widget_options Widget options.
     * @return array
     */
    function astra_footer_widgets_migration($theme_options, $used_elements, $widget_options)
    {
    }
    /**
     * Header Footer builder - Migration of Primary Menu.
     *
     * @since 3.0.0
     * @param array $theme_options Theme options.
     * @param array $used_elements Used Elements array.
     * @param array $widget_options Widget options.
     * @return array
     */
    function astra_primary_menu_builder_migration($theme_options, $used_elements, $widget_options)
    {
    }
    /**
     * Header Footer builder - Migration of Sticky Header.
     *
     * @since 3.0.0
     * @param array $theme_options Theme options.
     * @param array $used_elements Used Elements array.
     * @param array $widget_options Widget options.
     * @return array
     */
    function astra_sticky_header_builder_migration($theme_options, $used_elements, $widget_options)
    {
    }
    /**
     * Check if we need to load icons as font or SVG.
     *
     * @since 3.3.0
     * @return void
     */
    function astra_icons_svg_compatibility()
    {
    }
    /**
     * Header Footer builder - Migration compatibility.
     *
     * @since 3.0.0
     *
     * @return void
     */
    function astra_header_builder_compatibility()
    {
    }
    /**
     * Clears assets cache and regenerates new assets files.
     *
     * @since 3.0.1
     *
     * @return void
     */
    function astra_clear_assets_cache()
    {
    }
    /**
     * Gutenberg pattern compatibility changes.
     *
     * @since 3.3.0
     *
     * @return void
     */
    function astra_gutenberg_pattern_compatibility()
    {
    }
    /**
     * Set flag to provide backward compatibility of float based CSS for existing users.
     *
     * @since 3.3.0
     * @return void.
     */
    function astra_check_flex_based_css()
    {
    }
    /**
     * Update the Cart Style, Icon color & Border radius if None style is selected.
     *
     * @since 3.4.0
     * @return void.
     */
    function astra_update_cart_style()
    {
    }
    /**
     * Update existing 'Grid Column Layout' option in responsive way in Related Posts.
     * Till this update 3.5.0 we have 'Grid Column Layout' only for singular option, but now we are improving it as responsive.
     *
     * @since 3.5.0
     * @return void.
     */
    function astra_update_related_posts_grid_layout()
    {
    }
    /**
     * Migrate Site Title & Site Tagline options to new responsive array.
     *
     * @since 3.5.0
     *
     * @return void
     */
    function astra_site_title_tagline_responsive_control_migration()
    {
    }
    /**
     * Do not apply new font-weight heading support CSS in editor/frontend directly.
     *
     * 1. Adding Font-weight support to widget titles.
     * 2. Customizer font CSS not supporting in editor.
     *
     * @since 3.6.0
     *
     * @return void
     */
    function astra_headings_font_support()
    {
    }
    /**
     * Set flag to avoid direct reflections on live site & to maintain backward compatibility for existing users.
     *
     * @since 3.6.0
     * @return void.
     */
    function astra_remove_logo_max_width()
    {
    }
    /**
     * Set flag to maintain backward compatibility for existing users for Transparent Header border bottom default value i.e from '' to 0.
     *
     * @since 3.6.0
     * @return void.
     */
    function astra_transparent_header_default_value()
    {
    }
    /**
     * Clear Astra + Astra Pro assets cache.
     *
     * @since 3.6.1
     * @return void.
     */
    function astra_clear_all_assets_cache()
    {
    }
    /**
     * Set flag for updated default values for buttons & add GB Buttons padding support.
     *
     * @since 3.6.3
     * @return void
     */
    function astra_button_default_values_updated()
    {
    }
    /**
     * Set flag for old users, to not directly apply underline to content links.
     *
     * @since 3.6.4
     * @return void
     */
    function astra_update_underline_link_setting()
    {
    }
    /**
     * Add compatibility support for WP-5.8. as some of settings & blocks already their in WP-5.7 versions, that's why added backward here.
     *
     * @since 3.6.5
     * @return void
     */
    function astra_support_block_editor()
    {
    }
    /**
     * Set flag to maintain backward compatibility for existing users.
     * Fixing the case where footer widget's right margin space not working.
     *
     * @since 3.6.7
     * @return void
     */
    function astra_fix_footer_widget_right_margin_case()
    {
    }
    /**
     * Set flag to avoid direct reflections on live site & to maintain backward compatibility for existing users.
     *
     * @since 3.6.7
     * @return void
     */
    function astra_remove_elementor_toc_margin()
    {
    }
    /**
     * Set flag to avoid direct reflections on live site & to maintain backward compatibility for existing users.
     * Use: Setting flag for removing widget specific design options when WordPress 5.8 & above activated on site.
     *
     * @since 3.6.8
     * @return void
     */
    function astra_set_removal_widget_design_options_flag()
    {
    }
    /**
     * Apply zero font size for new users.
     *
     * @since 3.6.9
     * @return void
     */
    function astra_zero_font_size_comp()
    {
    }
    /** Set flag to avoid direct reflections on live site & to maintain backward compatibility for existing users.
     *
     * @since 3.6.9
     * @return void
     */
    function astra_unset_builder_elements_underline()
    {
    }
    /**
     * Migrating Builder > Account > transparent resonsive menu color options to single color options.
     * Because we do not show menu on resonsive devices, whereas we trigger login link on responsive devices instead of showing menu.
     *
     * @since 3.6.9
     *
     * @return void
     */
    function astra_remove_responsive_account_menu_colors_support()
    {
    }
    /**
     * Link default color compatibility.
     *
     * @since 3.7.0
     * @return void
     */
    function astra_global_color_compatibility()
    {
    }
    /**
     * Set flag to avoid direct reflections on live site & to maintain backward compatibility for existing users.
     *
     * @since 3.7.4
     * @return void
     */
    function astra_improve_gutenberg_editor_ui()
    {
    }
    /**
     * Set flag to avoid direct reflections on live site & to maintain backward compatibility for existing users.
     *
     * Starting supporting content-background color for Full Width Contained & Full Width Stretched layouts.
     *
     * @since 3.7.8
     * @return void
     */
    function astra_fullwidth_layouts_apply_content_background()
    {
    }
    /**
     * Sets the default breadcrumb separator selector value if the current user is an exsisting user
     *
     * @since 3.7.8
     * @return void
     */
    function astra_set_default_breadcrumb_separator_option()
    {
    }
    /**
     * Set flag to avoid direct reflections on live site & to maintain backward compatibility for existing users.
     *
     * Backward flag purpose - To initiate modern & updated UI of block editor & frontend.
     *
     * @since 3.8.0
     * @return void
     */
    function astra_apply_modern_block_editor_ui()
    {
    }
    /**
     * Set flag to avoid direct reflections on live site & to maintain backward compatibility for existing users.
     *
     * Backward flag purpose - To keep structure defaults updation by filter.
     *
     * @since 3.8.3
     * @return void
     */
    function astra_update_customizer_layout_defaults()
    {
    }
    /**
     * Set flag to avoid direct reflections on live site & to maintain backward compatibility for existing users.
     *
     * Backward flag purpose - To initiate maintain modern, updated v2 experience of block editor & frontend.
     *
     * @since 3.8.3
     * @return void
     */
    function astra_apply_modern_block_editor_v2_ui()
    {
    }
    /**
     * Display Cart Total and Title compatibility.
     *
     * @since 3.9.0
     * @return void
     */
    function astra_display_cart_total_title_compatibility()
    {
    }
    /**
     * If old user then it keeps then default cart icon.
     *
     * @since 3.9.0
     * @return void
     */
    function astra_update_woocommerce_cart_icons()
    {
    }
    /**
     * Set brder color to blank for old users for new users 'default' will take over.
     *
     * @since 3.9.0
     * @return void
     */
    function astra_legacy_customizer_maintenance()
    {
    }
    /**
     * Enable single product breadcrumb to maintain backward compatibility for existing users.
     *
     * @since 3.9.0
     * @return void
     */
    function astra_update_single_product_breadcrumb()
    {
    }
    /**
     * Restrict direct changes on users end so make it filterable.
     *
     * @since 3.9.0
     * @return void
     */
    function astra_apply_modern_ecommerce_setup()
    {
    }
    /**
     * Migrate old user data to new responsive format layout for shop's summary box content alignment.
     *
     * @since 3.9.0
     * @return void
     */
    function astra_responsive_shop_content_alignment()
    {
    }
    /**
     * Change default layout to standard for old users.
     *
     * @since 3.9.2
     * @return void
     */
    function astra_shop_style_design_layout()
    {
    }
    /**
     * Apply css for show password icon on woocommerce account page.
     *
     * @since 3.9.2
     * @return void
     */
    function astra_apply_woocommerce_show_password_icon_css()
    {
    }
    /**
     * Handle backward compatibility on version 3.9.4
     *
     * @since 3.9.4
     * @return void
     */
    function astra_theme_background_updater_3_9_4()
    {
    }
    /**
     * 4.0.0 backward handling part.
     *
     * 1. Migrate existing setting & do required onboarding for new admin dashboard v4.0.0 app.
     * 2. Migrating Post Structure & Meta options in title area meta parts.
     *
     * @since 4.0.0
     * @return void
     */
    function astra_theme_background_updater_4_0_0()
    {
    }
    /**
     * 4.0.2 backward handling part.
     *
     * 1. Read Time option backwards handling for old users.
     *
     * @since 4.0.2
     * @return void
     */
    function astra_theme_background_updater_4_0_2()
    {
    }
    /**
     * Handle backward compatibility on version 4.1.0
     *
     * @since 4.1.0
     * @return void
     */
    function astra_theme_background_updater_4_1_0()
    {
    }
    /**
     * WordPress filter - Widget Tags
     *
     * @param  array $args Tag arguments.
     * @return array       Modified tag arguments.
     */
    function astra_widget_tag_cloud_args($args = array())
    {
    }
    /**
     * WordPress filter - Widget Categories
     *
     * @param  array $tags_data Tags data.
     * @return array            Modified tags data.
     */
    function astra_filter_widget_tag_cloud($tags_data)
    {
    }
    /**
     * Register widget area.
     *
     * @see https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
     */
    function astra_widgets_init()
    {
    }
    /**
     * Search Form for Astra theme.
     *
     * @package     Astra
     * @author      Brainstorm Force
     * @copyright   Copyright (c) 2020, Brainstorm Force
     * @link        https://www.brainstormforce.com
     * @since       Astra 3.3.0
     */
    /**
     * Adding argument checks to avoid rendering search-form markup from other places & to easily use get_search_form() function.
     *
     * @see https://themes.trac.wordpress.org/ticket/101061
     * @since 3.6.1
     */
    $astra_search_input_placeholder = isset($args['input_placeholder']) ? $args['input_placeholder'] : \astra_default_strings('string-search-input-placeholder', \false);
    /**
     * Template for 404
     *
     * @package     Astra
     * @author      Astra
     * @copyright   Copyright (c) 2020, Astra
     * @link        https://wpastra.com/
     * @since       Astra 1.0.0
     */
    $astra_404_subtitle_tag = \true === \astra_check_is_structural_setup() ? 'h3' : 'div';
    /**
     * Template part for displaying archive post's entry banner.
     *
     * @link https://codex.wordpress.org/Template_Hierarchy
     *
     * @package Astra
     * @since 4.0.0
     */
    $astra_post_type = \strval(\get_post_type());
    /**
     * Template part for displaying the footer component.
     *
     * @package Astra
     */
    $astra_component_slug = \get_query_var('type');
    /**
     * Template part for displaying the a row of the footer
     *
     * @package Astra Builder
     */
    $astra_footer_row = \get_query_var('row');
    /**
     * Template for Small Footer Layout 2
     *
     * @package     Astra
     * @author      Astra
     * @copyright   Copyright (c) 2020, Astra
     * @link        https://wpastra.com/
     * @since       Astra 1.0.0
     */
    $astra_footer_section_1 = \astra_get_small_footer('footer-sml-section-1');
    /**
     * Template for Small Footer Layout 1
     *
     * @package     Astra
     * @author      Astra
     * @copyright   Copyright (c) 2020, Astra
     * @link        https://wpastra.com/
     * @since       Astra 1.0.0
     */
    $astra_footer_section_1 = \astra_get_small_footer('footer-sml-section-1');
    /**
     * Template part for header component.
     *
     * @package Astra
     */
    $astra_header_component_args = array();
    /**
     * Template part for displaying header row.
     *
     * @package Astra Builder
     */
    $astra_mobile_header_type = \astra_get_option('mobile-header-type');
    /**
     * Template part for displaying the a row of the header
     *
     * @package Astra Builder
     */
    $astra_header_row = \get_query_var('row');
    /**
     * Template part for displaying the Mobile Header
     *
     * @package Astra Builder
     */
    $astra_mobile_header_type = \astra_get_option('mobile-header-type');
    /**
     * Template part for displaying a row of the mobile header
     *
     * @package Astra Builder
     */
    $astra_row = \get_query_var('row');
    /**
     * Scroll To Top Template
     *
     * @package Astra
     * @since 4.0.0
     */
    $astra_addon_scroll_top_alignment = \astra_get_option('scroll-to-top-icon-position');
    /**
     * Template part for displaying single post's entry banner.
     *
     * @link https://codex.wordpress.org/Template_Hierarchy
     *
     * @package Astra
     * @since 4.0.0
     */
    $astra_post_type = \strval(\get_post_type());
}
