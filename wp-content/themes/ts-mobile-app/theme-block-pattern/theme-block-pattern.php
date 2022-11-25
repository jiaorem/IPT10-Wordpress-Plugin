<?php
/**
 * TS Mobile App : Block Patterns
 *
 * @package  TS Mobile App 
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'ts-mobile-app',
		array( 'label' => __( ' TS Mobile App ', 'ts-mobile-app' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'ts-mobile-app/banner-section',
		array(
			'title'      => __( 'Banner Section', 'ts-mobile-app' ),
			'categories' => array( 'ts-mobile-app' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . get_theme_file_uri() . "/theme-block-pattern/images/banner.png\",\"id\":548,\"dimRatio\":20,\"overlayColor\":\"white\",\"focalPoint\":{\"x\":\"0.00\",\"y\":\"0.52\"},\"minHeight\":600,\"minHeightUnit\":\"px\",\"isDark\":false,\"align\":\"full\",\"className\":\"ts-banner-section mb-0\"} -->\n<div class=\"wp-block-cover alignfull is-light ts-banner-section mb-0\" style=\"min-height:600px\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-white-background-color has-background-dim-20 has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-548\" alt=\"\" src=\"" . get_theme_file_uri() . "/theme-block-pattern/images/banner.png\" style=\"object-position:0% 52%\" data-object-fit=\"cover\" data-object-position=\"0% 52%\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"4%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:4%\"></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"66.66%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:66.66%\"><!-- wp:heading {\"level\":1,\"style\":{\"color\":{\"text\":\"#3a2a34\"},\"typography\":{\"fontStyle\":\"normal\",\"fontWeight\":\"700\"}}} -->\n<h1 class=\"has-text-color\" style=\"color:#3a2a34;font-style:normal;font-weight:700\">LOREM IPSUM DOLOR</h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"style\":{\"color\":{\"text\":\"#3a2a34\"},\"typography\":{\"fontSize\":\"15px\"}}} -->\n<p class=\"has-text-color\" style=\"color:#3a2a34;font-size:15px\">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting.lorem ipsum dolor.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"textColor\":\"white\",\"style\":{\"color\":{\"background\":\"#ca486c\"},\"border\":{\"radius\":\"3px\"}},\"className\":\"ts-banner-section-btn\",\"fontSize\":\"small\"} -->\n<div class=\"wp-block-button has-custom-font-size ts-banner-section-btn has-small-font-size\"><a class=\"wp-block-button__link has-white-color has-text-color has-background\" style=\"border-radius:3px;background-color:#ca486c\">READ MORE</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);

	register_block_pattern(
		'ts-mobile-app/service-section',
		array(
			'title'      => __( 'Service section', 'ts-mobile-app' ),
			'categories' => array( 'ts-mobile-app' ),
			'content'    => "<!-- wp:columns {\"align\":\"full\",\"className\":\"ts-service-section mt-0\"} -->\n<div class=\"wp-block-columns alignfull ts-service-section mt-0\"><!-- wp:column {\"style\":{\"color\":{\"background\":\"#3a2a34\"}},\"className\":\"ts-service-box1 p-4\"} -->\n<div class=\"wp-block-column ts-service-box1 p-4 has-background\" style=\"background-color:#3a2a34\"><!-- wp:image {\"align\":\"center\",\"id\":554,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"mb-0\"} -->\n<figure class=\"wp-block-image aligncenter size-full mb-0\"><img src=\"" . get_theme_file_uri() . "/theme-block-pattern/images/service-icon1.png\" alt=\"\" class=\"wp-image-554\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":4,\"style\":{\"typography\":{\"fontStyle\":\"normal\",\"fontWeight\":\"600\"}},\"textColor\":\"white\",\"fontSize\":\"medium\"} -->\n<h4 class=\"has-text-align-center has-white-color has-text-color has-medium-font-size\" style=\"font-style:normal;font-weight:600\">UNLIMITED THEME OPTION</h4>\n<!-- /wp:heading --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"style\":{\"color\":{\"background\":\"#b73558\"}},\"className\":\"ts-service-box2 p-4\"} -->\n<div class=\"wp-block-column ts-service-box2 p-4 has-background\" style=\"background-color:#b73558\"><!-- wp:image {\"align\":\"center\",\"id\":555,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"mb-0\"} -->\n<figure class=\"wp-block-image aligncenter size-full mb-0\"><img src=\"" . get_theme_file_uri() . "/theme-block-pattern/images/service-icon2.png\" alt=\"\" class=\"wp-image-555\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":4,\"style\":{\"typography\":{\"fontStyle\":\"normal\",\"fontWeight\":\"600\"}},\"textColor\":\"white\",\"fontSize\":\"medium\"} -->\n<h4 class=\"has-text-align-center has-white-color has-text-color has-medium-font-size\" style=\"font-style:normal;font-weight:600\">FULLY CUSTOMIZABLE</h4>\n<!-- /wp:heading --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"style\":{\"color\":{\"background\":\"#3a2a34\"}},\"className\":\"ts-service-box1 p-4\"} -->\n<div class=\"wp-block-column ts-service-box1 p-4 has-background\" style=\"background-color:#3a2a34\"><!-- wp:image {\"align\":\"center\",\"id\":556,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"mb-0\"} -->\n<figure class=\"wp-block-image aligncenter size-full mb-0\"><img src=\"" . get_theme_file_uri() . "/theme-block-pattern/images/service-icon3.png\" alt=\"\" class=\"wp-image-556\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":4,\"style\":{\"typography\":{\"fontStyle\":\"normal\",\"fontWeight\":\"600\"}},\"textColor\":\"white\",\"fontSize\":\"medium\"} -->\n<h4 class=\"has-text-align-center has-white-color has-text-color has-medium-font-size\" style=\"font-style:normal;font-weight:600\">UNLIMITED SUPPORT</h4>\n<!-- /wp:heading --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"style\":{\"color\":{\"background\":\"#b73558\"}},\"className\":\"ts-service-box2 p-4\"} -->\n<div class=\"wp-block-column ts-service-box2 p-4 has-background\" style=\"background-color:#b73558\"><!-- wp:image {\"align\":\"center\",\"id\":557,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"mb-0\"} -->\n<figure class=\"wp-block-image aligncenter size-full mb-0\"><img src=\"" . get_theme_file_uri() . "/theme-block-pattern/images/service-icon4.png\" alt=\"\" class=\"wp-image-557\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":4,\"style\":{\"typography\":{\"fontStyle\":\"normal\",\"fontWeight\":\"600\"}},\"textColor\":\"white\",\"fontSize\":\"medium\"} -->\n<h4 class=\"has-text-align-center has-white-color has-text-color has-medium-font-size\" style=\"font-style:normal;font-weight:600\">RESPONSIVE ALL DEVICE</h4>\n<!-- /wp:heading --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
		)
	);

	register_block_pattern(
		'ts-mobile-app/about-section',
		array(
			'title'      => __( 'About section', 'ts-mobile-app' ),
			'categories' => array( 'ts-mobile-app' ),
			'content'    => "<!-- wp:columns {\"className\":\"ts-about-section py-5\"} -->\n<div class=\"wp-block-columns ts-about-section py-5\"><!-- wp:column {\"width\":\"50%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:50%\"><!-- wp:image {\"id\":572,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-full\"><img src=\"" . get_theme_file_uri() . "/theme-block-pattern/images/Mobile.png\" alt=\"\" class=\"wp-image-572\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"50%\",\"className\":\"ts-about-content\"} -->\n<div class=\"wp-block-column ts-about-content\" style=\"flex-basis:50%\"><!-- wp:heading {\"textAlign\":\"left\",\"level\":5,\"style\":{\"typography\":{\"fontSize\":\"25px\",\"fontStyle\":\"normal\",\"fontWeight\":\"700\"}},\"textColor\":\"black\"} -->\n<h5 class=\"has-text-align-left has-black-color has-text-color\" style=\"font-size:25px;font-style:normal;font-weight:700\">ABOUT TS MOBILE APP</h5>\n<!-- /wp:heading -->\n\n<!-- wp:image {\"id\":625,\"width\":89,\"height\":5,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"ts-border\"} -->\n<figure class=\"wp-block-image size-full is-resized ts-border\"><img src=\"" . get_theme_file_uri() . "/theme-block-pattern/images/sectionborder.png\" alt=\"\" class=\"wp-image-625\" width=\"89\" height=\"5\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph {\"style\":{\"color\":{\"text\":\"#777777\"},\"typography\":{\"fontSize\":\"17px\"}}} -->\n<p class=\"has-text-color\" style=\"color:#777777;font-size:17px\">Lorem ipsum &nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"style\":{\"border\":{\"radius\":\"3px\"},\"color\":{\"background\":\"#ca486c\"}},\"className\":\"ts-about-section-btn\",\"fontSize\":\"small\"} -->\n<div class=\"wp-block-button has-custom-font-size ts-about-section-btn has-small-font-size\"><a class=\"wp-block-button__link has-background\" style=\"border-radius:3px;background-color:#ca486c\">READ MORE</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
		)
	);
}