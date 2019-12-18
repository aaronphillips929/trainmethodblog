<?php
/**
 * Monochrome Pro homepage.
 *
 * Homepage content optionally installed after theme activation.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Monochrome
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/monochrome/
 */

// Images by Joel Filipe on Unsplash: https://unsplash.com/photos/TmSYx44Y0QY and https://unsplash.com/photos/_Di_gyxSdSk.
$monochrome_homepage_background1 = CHILD_URL . '/config/import/images/minimal/minimal-background-1.jpg';
$monochrome_homepage_background2 = CHILD_URL . '/config/import/images/minimal/minimal-background-2.jpg';

// Placeholder logos.
$monochrome_homepage_logos = [
	1 => CHILD_URL . '/config/import/images/logos/les-avenirs.png',
	2 => CHILD_URL . '/config/import/images/logos/avec-simple.png',
	3 => CHILD_URL . '/config/import/images/logos/whitespace.png',
	4 => CHILD_URL . '/config/import/images/logos/minimalism.png',
	5 => CHILD_URL . '/config/import/images/logos/barcelona-33.png',
	6 => CHILD_URL . '/config/import/images/logos/smooth-vanilla.png',
];

return <<<CONTENT


<!-- wp:paragraph {"customTextColor":"#ffffff","fontSize":"small","className":"fade-in-up"} -->
<p style="color:#ffffff" class="has-text-color has-small-font-size fade-in-up"><strong>Monochrome</strong> is a creative agency based in Chicago. We developed the Genesis Framework and build mobile-optimized themes for WordPress.</p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->



<!-- wp:paragraph {"className":"fade-in-up"} -->
<p class="fade-in-up">A minimalist approach is the only way to design a website.</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-default fade-in-up"} -->
<hr class="wp-block-separator is-style-default fade-in-up"/>
<!-- /wp:separator -->

<!-- wp:columns {"columns":3,"className":"fade-in-up"} -->
<div class="wp-block-columns has-3-columns fade-in-up"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3} -->
<h3>Design</h3>
<!-- /wp:heading -->



<!-- wp:button {"customBackgroundColor":"#000000"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background" href="#" style="background-color:#000000">Learn More</a></div>
<!-- /wp:button --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3} -->
<h3>Content</h3>
<!-- /wp:heading -->



<!-- wp:button {"customBackgroundColor":"#000000"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background" href="#" style="background-color:#000000">Learn more </a></div>
<!-- /wp:button --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3} -->
<h3>Strategy</h3>
<!-- /wp:heading -->



<!-- wp:button {"customBackgroundColor":"#000000"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background" href="#" style="background-color:#000000">Learn More</a></div>
<!-- /wp:button --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->





<!-- wp:separator {"customColor":"#ffffff","className":"is-style-default fade-in-up"} -->
<hr class="wp-block-separator has-text-color has-background is-style-default fade-in-up" style="background-color:#ffffff;color:#ffffff"/>
<!-- /wp:separator -->



<!-- wp:atomic-blocks/ab-container {"containerPaddingTop":10,"containerPaddingRight":8,"containerPaddingBottom":2,"containerPaddingLeft":8,"containerWidth":"full","containerMaxWidth":1200} -->
<div style="padding-left:8%;padding-right:8%;padding-bottom:2%;padding-top:10%" class="wp-block-atomic-blocks-ab-container ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:1200px"><!-- wp:heading {"className":"bold-text fade-in-up"} -->
<h2 class="bold-text fade-in-up">We create stories.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"fade-in-up"} -->
<p class="fade-in-up">A killer narrative will turn your readers into raving fans.</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"fade-in-up"} -->
<hr class="wp-block-separator fade-in-up"/>
<!-- /wp:separator -->

<!-- wp:atomic-blocks/ab-spacer -->
<div style="color:#ddd" class="wp-block-atomic-blocks-ab-spacer ab-block-spacer ab-divider-solid ab-divider-size-1"><hr style="height:30px"/></div>
<!-- /wp:atomic-blocks/ab-spacer -->

<!-- wp:atomic-blocks/ab-post-grid {"className":"fade-in-up","postsToShow":4,"displayPostExcerpt":false,"displayPostLink":false,"imageSize":"featured-blog"} /--></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->
CONTENT;
