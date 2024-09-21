<?php

/**
 * Title: Follow Me
 * Slug: circle-photography/followme
 * Categories: circle-photography-patterns
 */
$circle_photograph_follow_url = trailingslashit(get_stylesheet_directory_uri());
$circle_photograph_follow_img = array(
    $circle_photograph_follow_url . '/assets/images/follow.png',
    $circle_photograph_follow_url . '/assets/images/gallery-4.jpg',
    $circle_photograph_follow_url . '/assets/images/gallery-5.jpg',
    $circle_photograph_follow_url . '/assets/images/gallery-7.jpg',
    $circle_photograph_follow_url . '/assets/images/gallery-8.jpg'
)
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"black","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-black-background-color has-background" style="padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"60px"}},"layout":{"type":"constrained","wideSize":"1260px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"blockGap":"30px"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:image {"id":1907,"width":"70px","height":"70px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
            <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($circle_photograph_follow_img[0]) ?>" alt="" class="wp-image-1907" style="object-fit:cover;width:70px;height:70px" /></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"200"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"large","fontFamily":"plus-jakarta-sans"} -->
            <h2 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color has-plus-jakarta-sans-font-family has-large-font-size" style="font-style:normal;font-weight:200"><?php esc_html_e('Follow Me On Instagram','circle-photography') ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
        <div class="wp-block-columns"><!-- wp:column {"width":"25%","cozyAnimation":{"type":"fade-up","easingFunction":"ease-in-out","anchorPlacement":"top-bottom","duration":800}} -->
            <div class="wp-block-column" style="flex-basis:25%"><!-- wp:cover {"url":"<?php echo esc_url($circle_photograph_follow_img[1]) ?>","id":98,"dimRatio":0,"overlayColor":"black","isUserOverlayColor":true,"minHeight":300,"isDark":false,"className":"fotawp-cover-hover","layout":{"type":"constrained","wideSize":"25%","contentSize":"30px"}} -->
                <div class="wp-block-cover is-light fotawp-cover-hover" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-98" alt="" src="<?php echo esc_url($circle_photograph_follow_img[1]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","className":"is-style-logos-only"} -->
                            <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
                            <!-- /wp:social-links -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"25%","cozyAnimation":{"type":"fade-up","easingFunction":"ease-in-out","anchorPlacement":"top-bottom","duration":1000}} -->
            <div class="wp-block-column" style="flex-basis:25%"><!-- wp:cover {"url":"<?php echo esc_url($circle_photograph_follow_img[2]) ?>","id":95,"dimRatio":0,"overlayColor":"black","isUserOverlayColor":true,"minHeight":300,"className":"fotawp-cover-hover","layout":{"type":"constrained","wideSize":"25%","contentSize":"30px"}} -->
                <div class="wp-block-cover fotawp-cover-hover" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-95" alt="" src="<?php echo esc_url($circle_photograph_follow_img[2]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","className":"is-style-logos-only"} -->
                            <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
                            <!-- /wp:social-links -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"25%","cozyAnimation":{"type":"fade-up","easingFunction":"ease-in-out","anchorPlacement":"top-bottom","duration":1200}} -->
            <div class="wp-block-column" style="flex-basis:25%"><!-- wp:cover {"url":"<?php echo esc_url($circle_photograph_follow_img[3]) ?>","id":100,"dimRatio":0,"overlayColor":"black","isUserOverlayColor":true,"minHeight":300,"isDark":false,"className":"fotawp-cover-hover","layout":{"type":"constrained","wideSize":"25%","contentSize":"30px"}} -->
                <div class="wp-block-cover is-light fotawp-cover-hover" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-100" alt="" src="<?php echo esc_url($circle_photograph_follow_img[3]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","className":"is-style-logos-only"} -->
                            <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
                            <!-- /wp:social-links -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"25%","cozyAnimation":{"type":"fade-up","easingFunction":"ease-in-out","anchorPlacement":"top-bottom","duration":1400}} -->
            <div class="wp-block-column" style="flex-basis:25%"><!-- wp:cover {"url":"<?php echo esc_url($circle_photograph_follow_img[4]) ?>","id":96,"dimRatio":0,"overlayColor":"black","isUserOverlayColor":true,"minHeight":300,"className":"fotawp-cover-hover","layout":{"type":"constrained","wideSize":"25%","contentSize":"30px"}} -->
                <div class="wp-block-cover fotawp-cover-hover" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-96" alt="" src="<?php echo esc_url($circle_photograph_follow_img[4]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","className":"is-style-logos-only"} -->
                            <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
                            <!-- /wp:social-links -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->