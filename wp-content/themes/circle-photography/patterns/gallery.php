<?php

/**
 * Title: Gallery
 * Slug: circle-photography/gallery
 * Categories: circle-photography-patterns
 */
$circle_photograph_gallery_url = trailingslashit(get_stylesheet_directory_uri());
$circle_photograph_gallery_img = array(
    $circle_photograph_gallery_url . '/assets/images/gallery-1.jpg',
    $circle_photograph_gallery_url . '/assets/images/gallery-2.jpg',
    $circle_photograph_gallery_url . '/assets/images/gallery-3.jpg',
    $circle_photograph_gallery_url . '/assets/images/gallery-4.jpg',
    $circle_photograph_gallery_url . '/assets/images/gallery-5.jpg',
    $circle_photograph_gallery_url . '/assets/images/gallery-6.jpg',
    $circle_photograph_gallery_url . '/assets/images/gallery-7.jpg',
    $circle_photograph_gallery_url . '/assets/images/gallery-8.jpg'
)
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"60px"}},"layout":{"type":"constrained","wideSize":"1260px"}} -->
    <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained","wideSize":"446px"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"textTransform":"uppercase","lineHeight":"1.5"}},"textColor":"foreground","fontFamily":"plus-jakarta-sans"} -->
                <p class="has-text-align-center has-foreground-color has-text-color has-link-color has-plus-jakarta-sans-font-family" style="line-height:1.5;text-transform:uppercase"><?php esc_html_e('Portfolio', 'circle-photography') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:separator {"backgroundColor":"foreground"} -->
                <hr class="wp-block-separator has-text-color has-foreground-color has-alpha-channel-opacity has-foreground-background-color has-background" />
                <!-- /wp:separator -->
            </div>
            <!-- /wp:group -->

            <!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"36px","fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"textColor":"white","fontFamily":"plus-jakarta-sans"} -->
            <h3 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color has-plus-jakarta-sans-font-family" style="font-size:36px;font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e('Our Latest Portfolio!', 'circle-photography') ?></h3>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"constrained"},"cozyAnimation":{"type":"none","easingFunction":"ease-in-out","anchorPlacement":"top-bottom","duration":1000}} -->
        <div class="wp-block-group"><!-- wp:gallery {"columns":4,"linkTo":"none","className":"is-style-enable-grayscale-mode-on-image","style":{"spacing":{"blockGap":{"top":"20px","left":"20px"}}}} -->
            <figure class="wp-block-gallery has-nested-images columns-4 is-cropped is-style-enable-grayscale-mode-on-image"><!-- wp:image {"id":40,"sizeSlug":"large","linkDestination":"none"} -->
                <figure class="wp-block-image size-large"><img src="<?php echo esc_url($circle_photograph_gallery_img[0]) ?>" alt="" class="wp-image-40" /></figure>
                <!-- /wp:image -->

                <!-- wp:image {"id":42,"sizeSlug":"large","linkDestination":"none"} -->
                <figure class="wp-block-image size-large"><img src="<?php echo esc_url($circle_photograph_gallery_img[1]) ?>" alt="" class="wp-image-42" /></figure>
                <!-- /wp:image -->

                <!-- wp:image {"id":38,"sizeSlug":"large","linkDestination":"none"} -->
                <figure class="wp-block-image size-large"><img src="<?php echo esc_url($circle_photograph_gallery_img[2]) ?>" alt="" class="wp-image-38" /></figure>
                <!-- /wp:image -->

                <!-- wp:image {"id":45,"sizeSlug":"large","linkDestination":"none"} -->
                <figure class="wp-block-image size-large"><img src="<?php echo esc_url($circle_photograph_gallery_img[3]) ?>" alt="" class="wp-image-45" /></figure>
                <!-- /wp:image -->

                <!-- wp:image {"id":44,"sizeSlug":"large","linkDestination":"none"} -->
                <figure class="wp-block-image size-large"><img src="<?php echo esc_url($circle_photograph_gallery_img[4]) ?>" alt="" class="wp-image-44" /></figure>
                <!-- /wp:image -->

                <!-- wp:image {"id":39,"sizeSlug":"large","linkDestination":"none"} -->
                <figure class="wp-block-image size-large"><img src="<?php echo esc_url($circle_photograph_gallery_img[5]) ?>" alt="" class="wp-image-39" /></figure>
                <!-- /wp:image -->

                <!-- wp:image {"id":41,"sizeSlug":"large","linkDestination":"none"} -->
                <figure class="wp-block-image size-large"><img src="<?php echo esc_url($circle_photograph_gallery_img[6]) ?>" alt="" class="wp-image-41" /></figure>
                <!-- /wp:image -->

                <!-- wp:image {"id":38,"sizeSlug":"large","linkDestination":"none"} -->
                <figure class="wp-block-image size-large"><img src="<?php echo esc_url($circle_photograph_gallery_img[7]) ?>" alt="" class="wp-image-38" /></figure>
                <!-- /wp:image -->
            </figure>
            <!-- /wp:gallery -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->