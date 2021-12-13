import { createURL,	createNewPost, publishPost } from '@wordpress/e2e-test-utils';
import { setCustomize } from '../../../../utils/customize';
describe( 'transparent header in the customizer', () => {
	it( 'disable on pages should apply corectly', async () => {
		const Disableonpages = {
			'transparent-header-enable': 1,
			'transparent-header-disable-page': {
				position: 'absolute',
				left: 0,
				right: 0,

			},
		};
		await setCustomize( Disableonpages );
		await createNewPost( { postType: 'page', title: 'hello world' } );
		await publishPost();
		await page.goto( createURL( '/hello-world/' ), {
			waitUntil: 'networkidle0',
		} );
		await page.waitForSelector( '.ast-theme-transparent-header #masthead' );

		await expect( {
			selector: '.ast-theme-transparent-header #masthead',
			property: 'position',
		} ).cssValueToBe(
			`${ Disableonpages[ 'transparent-header-disable-page' ].position }` );
	} );
} );
