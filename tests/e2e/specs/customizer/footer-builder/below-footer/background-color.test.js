import { createURL } from '@wordpress/e2e-test-utils';
import { setCustomize } from '../../../../utils/customize';
import { setBrowserViewport } from '../../../../utils/set-browser-viewport';
import { scrollToElement } from '../../../../utils/scroll-to-element';

describe( 'below footer background color settings in the customizer', () => {
	it( 'background color should apply correctly', async () => {
		const backgroundcolor = {
			'hbb-footer-bg-obj-responsive': {
				desktop: {
					'background-color': 'rgb(210, 248, 249)',
				},
				tablet: {
					'background-color': 'rgb(210, 248, 249)',
				},
				mobile: {
					'background-color': 'rgb(210, 248, 249)',
				},
			},
		};
		await setCustomize( backgroundcolor );
		await page.goto( createURL( '/' ), {
			waitUntil: 'networkidle0',
		} );
		await page.waitForSelector( '.site-below-footer-wrap[data-section="section-below-footer-builder"]' );
		await setBrowserViewport( 'large' );
		await scrollToElement( '#colophon' );
		await expect( {
			selector: '.site-below-footer-wrap[data-section="section-below-footer-builder"]',
			property: 'background-color',
		} ).cssValueToBe( `${ backgroundcolor[ 'hbb-footer-bg-obj-responsive' ].desktop[ 'background-color' ] }` );

		await page.waitForSelector( '.site-below-footer-wrap[data-section="section-below-footer-builder"]' );
		await setBrowserViewport( 'medium' );
		await scrollToElement( '#colophon' );
		await expect( {
			selector: '.site-below-footer-wrap[data-section="section-below-footer-builder"]',
			property: 'background-color',
		} ).cssValueToBe( `${ backgroundcolor[ 'hbb-footer-bg-obj-responsive' ].tablet[ 'background-color' ] }` );

		await page.waitForSelector( '.site-below-footer-wrap[data-section="section-below-footer-builder"]' );
		await setBrowserViewport( 'small' );
		await scrollToElement( '#colophon' );
		await expect( {
			selector: '.site-below-footer-wrap[data-section="section-below-footer-builder"]',
			property: 'background-color',
		} ).cssValueToBe( `${ backgroundcolor[ 'hbb-footer-bg-obj-responsive' ].mobile[ 'background-color' ] }` );
	} );
} );
