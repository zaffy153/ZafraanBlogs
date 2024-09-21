<?php

/**
 * Title: Services
 * Slug: circle-photography/services
 * Categories: circle-photography-patterns
 */
$circle_photograph_services_url = trailingslashit(get_stylesheet_directory_uri());
$circle_photograph_services_img = array(
    $circle_photograph_services_url . '/assets/images/icon-1.png',
    $circle_photograph_services_url . '/assets/images/icon-2.png',
    $circle_photograph_services_url . '/assets/images/icon-3.png',
    $circle_photograph_services_url . '/assets/images/icon-4.png',
    $circle_photograph_services_url . '/assets/images/icon-5.png',
    $circle_photograph_services_url . '/assets/images/icon-6.png'
)
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"black","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-black-background-color has-background" style="padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"60px"}},"layout":{"type":"constrained","wideSize":"1260px"}} -->
    <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained","wideSize":"100%"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"textTransform":"uppercase","lineHeight":"1.5"}},"textColor":"foreground","fontFamily":"plus-jakarta-sans"} -->
                <p class="has-text-align-center has-foreground-color has-text-color has-link-color has-plus-jakarta-sans-font-family" style="line-height:1.5;text-transform:uppercase"><?php esc_html_e('My Services', 'circle-photography') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:separator {"backgroundColor":"foreground"} -->
                <hr class="wp-block-separator has-text-color has-foreground-color has-alpha-channel-opacity has-foreground-background-color has-background" />
                <!-- /wp:separator -->
            </div>
            <!-- /wp:group -->

            <!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"36px","fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"textColor":"white","fontFamily":"plus-jakarta-sans"} -->
            <h3 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color has-plus-jakarta-sans-font-family" style="font-size:36px;font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e('My Recommended Services !', 'circle-photography') ?></h3>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"30px","left":"30px"}}}} -->
            <div class="wp-block-columns"><!-- wp:column {"width":"398px"} -->
                <div class="wp-block-column" style="flex-basis:398px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"65px","bottom":"65px","left":"35px","right":"35px"}}},"backgroundColor":"secondary","layout":{"type":"constrained","wideSize":"328px"},"cozyAnimation":{"type":"zoom-in-up","easingFunction":"ease-in-out","anchorPlacement":"top-bottom","duration":800}} -->
                    <div class="wp-block-group has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:65px;padding-right:35px;padding-bottom:65px;padding-left:35px"><!-- wp:image {"id":133,"width":"69px","height":"72px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
                        <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($circle_photograph_services_img[0]) ?>" alt="" class="wp-image-133" style="object-fit:cover;width:69px;height:72px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"25px","bottom":"16px"}}},"textColor":"white"} -->
                        <h5 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color" style="margin-top:25px;margin-bottom:16px"><?php esc_html_e('General Photography', 'circle-photography') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                        <p class="has-text-align-center has-foreground-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.', 'circle-photography') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"398px"} -->
                <div class="wp-block-column" style="flex-basis:398px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"65px","bottom":"65px","left":"35px","right":"35px"}}},"backgroundColor":"secondary","layout":{"type":"constrained","wideSize":"328px"},"cozyAnimation":{"type":"zoom-in-up","easingFunction":"ease-in-out","anchorPlacement":"top-bottom","duration":1000}} -->
                    <div class="wp-block-group has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:65px;padding-right:35px;padding-bottom:65px;padding-left:35px"><!-- wp:image {"id":146,"width":"69px","height":"72px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
                        <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($circle_photograph_services_img[1]) ?>" alt="" class="wp-image-146" style="object-fit:cover;width:69px;height:72px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"25px","bottom":"16px"}}},"textColor":"white"} -->
                        <h5 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color" style="margin-top:25px;margin-bottom:16px"><?php esc_html_e('Wedding Photography', 'circle-photography') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                        <p class="has-text-align-center has-foreground-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.', 'circle-photography') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"398px"} -->
                <div class="wp-block-column" style="flex-basis:398px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"65px","bottom":"65px","left":"35px","right":"35px"}}},"backgroundColor":"secondary","layout":{"type":"constrained","wideSize":"328px"},"cozyAnimation":{"type":"zoom-in-up","easingFunction":"ease-in-out","anchorPlacement":"top-bottom","duration":1200}} -->
                    <div class="wp-block-group has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:65px;padding-right:35px;padding-bottom:65px;padding-left:35px"><!-- wp:image {"id":147,"width":"69px","height":"72px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
                        <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($circle_photograph_services_img[2]) ?>" alt="" class="wp-image-147" style="object-fit:cover;width:69px;height:72px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"25px","bottom":"16px"}}},"textColor":"white"} -->
                        <h5 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color" style="margin-top:25px;margin-bottom:16px"><?php esc_html_e('Portrait Photography', 'circle-photography') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                        <p class="has-text-align-center has-foreground-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.', 'circle-photography') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"30px","left":"30px"}}}} -->
            <div class="wp-block-columns"><!-- wp:column {"width":"398px"} -->
                <div class="wp-block-column" style="flex-basis:398px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"65px","bottom":"65px","left":"35px","right":"35px"}}},"backgroundColor":"secondary","layout":{"type":"constrained","wideSize":"328px"},"cozyAnimation":{"type":"zoom-in-up","easingFunction":"ease-in-out","anchorPlacement":"top-bottom","duration":800}} -->
                    <div class="wp-block-group has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:65px;padding-right:35px;padding-bottom:65px;padding-left:35px"><!-- wp:image {"id":148,"width":"69px","height":"72px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
                        <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($circle_photograph_services_img[3]) ?>" alt="" class="wp-image-148" style="object-fit:cover;width:69px;height:72px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"25px","bottom":"16px"}}},"textColor":"white"} -->
                        <h5 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color" style="margin-top:25px;margin-bottom:16px"><?php esc_html_e('Event Photography', 'circle-photography') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                        <p class="has-text-align-center has-foreground-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.', 'circle-photography') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"398px"} -->
                <div class="wp-block-column" style="flex-basis:398px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"65px","bottom":"65px","left":"35px","right":"35px"}}},"backgroundColor":"secondary","layout":{"type":"constrained","wideSize":"328px"},"cozyAnimation":{"type":"zoom-in-up","easingFunction":"ease-in-out","anchorPlacement":"top-bottom","duration":1000}} -->
                    <div class="wp-block-group has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:65px;padding-right:35px;padding-bottom:65px;padding-left:35px"><!-- wp:image {"id":149,"width":"69px","height":"72px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
                        <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($circle_photograph_services_img[4]) ?>" alt="" class="wp-image-149" style="object-fit:cover;width:69px;height:72px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"25px","bottom":"16px"}}},"textColor":"white"} -->
                        <h5 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color" style="margin-top:25px;margin-bottom:16px"><?php esc_html_e('Fine Art Photography', 'circle-photography') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                        <p class="has-text-align-center has-foreground-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.', 'circle-photography') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"398px"} -->
                <div class="wp-block-column" style="flex-basis:398px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"65px","bottom":"65px","left":"35px","right":"35px"}}},"backgroundColor":"secondary","layout":{"type":"constrained","wideSize":"328px"},"cozyAnimation":{"type":"zoom-in-up","easingFunction":"ease-in-out","anchorPlacement":"top-bottom","duration":1200}} -->
                    <div class="wp-block-group has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:65px;padding-right:35px;padding-bottom:65px;padding-left:35px"><!-- wp:image {"id":150,"width":"69px","height":"72px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
                        <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($circle_photograph_services_img[5]) ?>" alt="" class="wp-image-150" style="object-fit:cover;width:69px;height:72px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"25px","bottom":"16px"}}},"textColor":"white"} -->
                        <h5 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color" style="margin-top:25px;margin-bottom:16px"><?php esc_html_e('Personal Photography', 'circle-photography') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <p class="has-text-align-center has-white-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.', 'circle-photography') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->