<?php

/**
 * Title: About Us
 * Slug: circle-photography/about-us
 * Categories: circle-photography-patterns
 */
$circle_photograph_about_url = trailingslashit(get_stylesheet_directory_uri());
$circle_photograph_about_img = array(
    $circle_photograph_about_url . '/assets/images/wedding.jpg'
)
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"30px","right":"0","left":"0"}}},"backgroundColor":"black","layout":{"type":"constrained","wideSize":"100%"}} -->
<div class="wp-block-group has-black-background-color has-background" style="padding-top:100px;padding-right:0;padding-bottom:30px;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","wideSize":"1260px"}} -->
    <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"110px"}}}} -->
        <div class="wp-block-columns"><!-- wp:column {"width":"469px"} -->
            <div class="wp-block-column" style="flex-basis:469px"><!-- wp:heading {"style":{"typography":{"fontSize":"36px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontFamily":"plus-jakarta-sans","cozyAnimation":{"type":"none","easingFunction":"ease-in-out","anchorPlacement":"top-bottom","duration":800}} -->
                <h2 class="wp-block-heading has-white-color has-text-color has-link-color has-plus-jakarta-sans-font-family" style="font-size:36px;font-style:normal;font-weight:600"><?php esc_html_e('The Art of Storytelling Through Photography', 'circle-photography') ?></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"681px"} -->
            <div class="wp-block-column" style="flex-basis:681px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"small","fontFamily":"plus-jakarta-sans","cozyAnimation":{"type":"none","easingFunction":"ease-in-out","anchorPlacement":"top-bottom","duration":1000}} -->
                <p class="has-foreground-color has-text-color has-link-color has-plus-jakarta-sans-font-family has-small-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','circle-photography') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons -->
                <div class="wp-block-buttons"><!-- wp:button -->
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('About us', 'circle-photography') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cover {"url":"<?php echo esc_url($circle_photograph_about_img[0])?>","id":86,"hasParallax":true,"dimRatio":0,"isUserOverlayColor":true,"minHeight":500,"minHeightUnit":"px","isDark":false,"style":{"spacing":{"blockGap":"0"},"color":{"duotone":["#111111","#ffffff"]}}} -->
    <div class="wp-block-cover is-light has-parallax" style="min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
        <div class="wp-block-cover__image-background wp-image-86 has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url($circle_photograph_about_img[0])?>)"></div>
        <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
            <p class="has-text-align-center has-large-font-size"></p>
            <!-- /wp:paragraph -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->