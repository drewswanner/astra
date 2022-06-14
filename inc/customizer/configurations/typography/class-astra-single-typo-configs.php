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

if ( ! class_exists( 'Astra_Single_Typo_Configs' ) ) {

	/**
	 * Customizer Single Typography Configurations.
	 *
	 * @since 1.4.3
	 */
	class Astra_Single_Typo_Configs extends Astra_Customizer_Config_Base {

		/**
		 * Register Single Typography configurations.
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
					 * Option: Learn More about Typography
					 */
					array(
						'name'     => ASTRA_THEME_SETTINGS . '[ast-sngle-blog-typography-more-feature-description]',
						'type'     => 'control',
						'control'  => 'ast-description',
						'section'  => 'section-blog-single',
						'priority' => 999,
						'title'    => '',
						'help'     => '<p>' . __( 'More Options Available in Astra Pro!', 'astra' ) . '</p><a href="' . astra_get_pro_url( 'https://wpastra.com/pro/', 'customizer', 'learn-more', 'upgrade-to-pro' ) . '" class="button button-secondary"  target="_blank" rel="noopener">' . __( 'Learn More', 'astra' ) . '</a>',
						'settings' => array(),
						'divider'  => array( 'ast_class' => 'ast-bottom-divider' ),
					),

					array(
						'name'     => ASTRA_THEME_SETTINGS . '[blog-single-post-ast-button-link]',
						'type'     => 'control',
						'control'  => 'ast-button-link',
						'section'  => 'section-blog-single',
						'priority' => 999,
						'title'    => __( 'View Astra Pro Features', 'astra' ),
						'url'      => 'https://wpastra.com/pro',
						'settings' => array(),
					),

				);
			}

			if ( defined( 'ASTRA_EXT_VER' ) && Astra_Ext_Extension::is_active( 'typography' ) ) {

				$new_configs = array(

					array(
						'name'      => ASTRA_THEME_SETTINGS . '[blog-single-title-typo]',
						'type'      => 'control',
						'priority'  => Astra_Builder_Helper::$is_header_footer_builder_active ?
						13 : 20,
						'control'   => 'ast-settings-group',
						'title'     => __( 'Title Font', 'astra' ),
						'section'   => 'section-blog-single',
						'transport' => 'postMessage',
						'context'   => Astra_Builder_Helper::$is_header_footer_builder_active ?
							Astra_Builder_Helper::$design_tab : Astra_Builder_Helper::$general_tab,
					),

					/**
					 * Option: Single Post / Page Title Font Size
					 */

					array(
						'name'              => 'font-size-entry-title',
						'parent'            => ASTRA_THEME_SETTINGS . '[blog-single-title-typo]',
						'type'              => 'sub-control',
						'control'           => 'ast-responsive-slider',
						'sanitize_callback' => array( 'Astra_Customizer_Sanitizes', 'sanitize_responsive_slider' ),
						'section'           => 'section-blog-single',
						'transport'         => 'postMessage',
						'title'             => __( 'Size', 'astra' ),
						'priority'          => 8,
						'default'           => astra_get_option( 'font-size-entry-title' ),
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

				$new_configs = array();

				/**
				 * Option: Single Post / Page Title Font Size
				 */

				$new_configs[] = array(
					'name'              => ASTRA_THEME_SETTINGS . '[font-size-entry-title]',
					'type'              => 'control',
					'control'           => 'ast-responsive-slider',
					'sanitize_callback' => array( 'Astra_Customizer_Sanitizes', 'sanitize_responsive_slider' ),
					'section'           => 'section-blog-single',
					'transport'         => 'postMessage',
					'title'             => __( 'Post / Page Title Font Size', 'astra' ),
					'priority'          => 9,
					'default'           => astra_get_option( 'font-size-entry-title' ),
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
				);
			}

			$_configs = array_merge( $_configs, $new_configs );

			$configurations = array_merge( $configurations, $_configs );

			return $configurations;
		}
	}
}

new Astra_Single_Typo_Configs();
