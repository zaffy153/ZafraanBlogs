<?php

/**
 * Title: Hero Section
 * Slug: circle-photography/hero-section
 * Categories: circle-photography-patterns
 */
$circle_photograph_cover_url = trailingslashit(get_stylesheet_directory_uri());
$circle_photograph_cover_img = array(
    $circle_photograph_cover_url . '/assets/images/cover-1.jpg'
)
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0","padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url($circle_photograph_cover_img[0]) ?>","id":18,"dimRatio":50,"overlayColor":"black","isUserOverlayColor":true,"minHeight":790,"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"760px"}} -->
    <div class="wp-block-cover" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px;min-height:790px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-18" alt="" src="<?php echo esc_url($circle_photograph_cover_img[0]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"64px"}}} -->
            <h2 class="wp-block-heading has-text-align-center" style="font-size:64px"><?php esc_html_e('Creating Memories, One Image at a Time', 'circle-photography') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"italic","fontWeight":"400","fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
            <p class="has-text-align-center has-primary-color has-text-color has-link-color" style="font-size:18px;font-style:italic;font-weight:400;text-transform:uppercase"><?php esc_html_e("“Capturing Life's Beautiful Moments ”", 'circle-photography') ?></p>
            <!-- /wp:paragraph -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->