<?php
/**
 * Styling Options for Astra Theme.
 *
 * @package     Astra
 * @author      Astra
 * @copyright   Copyright (c) 2020, Astra
 * @link        https://wpastra.com/
 * @since       Astra 1.0.15
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Astra_Archive_Typo_Configs' ) ) {

	/**
	 * Customizer Sanitizes Initial setup
	 */
	class Astra_Archive_Typo_Configs extends Astra_Customizer_Config_Base {

		/**
		 * Register Archive Typography Customizer Configurations.
		 *
		 * @param Array                $configurations Astra Customizer Configurations.
		 * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
		 * @since 1.4.3
		 * @return Array Astra Customizer Configurations with updated configurations.
		 */
		public function register_configuration( $configurations, $wp_customize ) {

			$_configs = array();

			// Learn More link if Astra Pro is not activated.
			if ( ! defined( 'ASTRA_EXT_VER' ) ) {

				$_configs = array(

					/**
					 * Option: Learn More about Contant Typography
					 */
					array(
						'name'     => ASTRA_THEME_SETTINGS . '[ast-blog-typography-more-feature-description]',
						'type'     => 'control',
						'control'  => 'ast-description',
						'section'  => 'section-blog',
						'priority' => 999,
						'title'    => '',
						'help'     => '<p>' . __( 'More Options Available in Astra Pro!', 'astra' ) . '</p><a href="' . astra_get_pro_url( 'https://wpastra.com/pro/', 'customizer', 'learn-more', 'upgrade-to-pro' ) . '" class="button button-secondary"  target="_blank" rel="noopener">' . __( 'Learn More', 'astra' ) . '</a>',
						'settings' => array(),
						'divider'  => array( 'ast_class' => 'ast-bottom-divider' ),
					),
				);
			}

			if ( defined( 'ASTRA_EXT_VER' ) && Astra_Ext_Extension::is_active( 'typography' ) ) {

				$new_configs = array(

					/**
					 * Option: Blog / Archive Typography
					 */
					array(
						'name'      => ASTRA_THEME_SETTINGS . '[blog-content-archive-summary-typo]',
						'default'   => astra_get_option( 'blog-content-archive-summary-typo' ),
						'type'      => 'control',
						'control'   => 'ast-settings-group',
						'title'     => __( 'Archive Title Font', 'astra' ),
						'section'   => 'section-blog',
						'transport' => 'postMessage',
						'priority'  => 140,
						'divider'   => array( 'ast_class' => 'ast-bottom-divider' ),
						'context'   => ( true === Astra_Builder_Helper::$is_header_footer_builder_active ) ?
							Astra_Builder_Helper::$design_tab : Astra_Builder_Helper::$general_tab,
					),

					/**
					 * Option: Archive Summary Box Title Font Size
					 */

					array(
						'name'              => 'font-size-archive-summary-title',
						'parent'            => ASTRA_THEME_SETTINGS . '[blog-content-archive-summary-typo]',
						'type'              => 'sub-control',
						'control'           => 'ast-responsive-slider',
						'sanitize_callback' => array( 'Astra_Customizer_Sanitizes', 'sanitize_responsive_slider' ),
						'section'           => 'section-blog',
						'transport'         => 'postMessage',
						'title'             => __( 'Size', 'astra' ),
						'priority'          => 8,
						'default'           => astra_get_option( 'font-size-archive-summary-title' ),
						'suffix'            => array( 'px', 'em' ),
						'input_attrs'       => array(
							'px' => array(
								'min'  => 0,
								'step' => 1,
								'max'  => 100,
							),
							'em' => array(
								'min'  => 0,
								'step' => 1,
								'max'  => 20,
							),
						),
						'divider'           => array( 'ast_class' => 'ast-bottom-divider ast-top-divider' ),
					),

					array(
						'name'      => ASTRA_THEME_SETTINGS . '[blog-content-blog-post-title-typo]',
						'default'   => astra_get_option( 'blog-content-blog-post-title-typo' ),
						'type'      => 'control',
						'control'   => 'ast-settings-group',
						'title'     => __( 'Post Title Font', 'astra' ),
						'section'   => 'section-blog',
						'transport' => 'postMessage',
						'priority'  => 140,
						'divider'   => array( 'ast_class' => 'ast-bottom-divider' ),
						'context'   => ( true === Astra_Builder_Helper::$is_header_footer_builder_active ) ?
							Astra_Builder_Helper::$design_tab : Astra_Builder_Helper::$general_tab,
					),

					/**
					 * Option: Blog - Post Title Font Size
					 */

					array(
						'name'              => 'font-size-page-title',
						'parent'            => ASTRA_THEME_SETTINGS . '[blog-content-blog-post-title-typo]',
						'type'              => 'sub-control',
						'control'           => 'ast-responsive-slider',
						'sanitize_callback' => array( 'Astra_Customizer_Sanitizes', 'sanitize_responsive_slider' ),
						'section'           => 'section-blog',
						'transport'         => 'postMessage',
						'title'             => __( 'Size', 'astra' ),
						'priority'          => 2,
						'default'           => astra_get_option( 'font-size-page-title' ),
						'suffix'            => array( 'px', 'em' ),
						'input_attrs'       => array(
							'px' => array(
								'min'  => 0,
								'step' => 1,
								'max'  => 100,
							),
							'em' => array(
								'min'  => 0,
								'step' => 1,
								'max'  => 20,
							),
						),
					),
				);
			} else {

				$new_configs = array(

					/**
					 * Option: Archive Summary Box Title Font Size
					 */

					array(
						'name'              => ASTRA_THEME_SETTINGS . '[font-size-archive-summary-title]',
						'control'           => 'ast-responsive-slider',
						'sanitize_callback' => array( 'Astra_Customizer_Sanitizes', 'sanitize_responsive_slider' ),
						'section'           => 'section-blog',
						'type'              => 'control',
						'transport'         => 'postMessage',
						'title'             => __( 'Archive Title Font Size', 'astra' ),
						'priority'          => 140,
						'default'           => astra_get_option( 'font-size-archive-summary-title' ),
						'suffix'            => array( 'px', 'em' ),
						'input_attrs'       => array(
							'px' => array(
								'min'  => 0,
								'step' => 1,
								'max'  => 100,
							),
							'em' => array(
								'min'  => 0,
								'step' => 1,
								'max'  => 20,
							),
						),
						'context'           => ( true === Astra_Builder_Helper::$is_header_footer_builder_active ) ?
							Astra_Builder_Helper::$design_tab : Astra_Builder_Helper::$general_tab,
					),

					/**
					 * Option: Blog - Post Title Font Size
					 */

					array(
						'name'              => ASTRA_THEME_SETTINGS . '[font-size-page-title]',
						'control'           => 'ast-responsive-slider',
						'sanitize_callback' => array( 'Astra_Customizer_Sanitizes', 'sanitize_responsive_slider' ),
						'section'           => 'section-blog',
						'type'              => 'control',
						'transport'         => 'postMessage',
						'title'             => __( 'Post Title Font Size', 'astra' ),
						'priority'          => 140,
						'default'           => astra_get_option( 'font-size-page-title' ),
						'suffix'            => array( 'px', 'em' ),
						'input_attrs'       => array(
							'px' => array(
								'min'  => 0,
								'step' => 1,
								'max'  => 100,
							),
							'em' => array(
								'min'  => 0,
								'step' => 1,
								'max'  => 20,
							),
						),
						'context'           => ( true === Astra_Builder_Helper::$is_header_footer_builder_active ) ?
							Astra_Builder_Helper::$design_tab : Astra_Builder_Helper::$general_tab,
					),
				);
			}

			$_configs = array_merge( $_configs, $new_configs );

			$configurations = array_merge( $configurations, $_configs );

			return $configurations;
		}
	}
}

new Astra_Archive_Typo_Configs();
