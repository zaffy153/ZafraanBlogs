<?php

/**
 * Title: Header with Banner
 * Slug: circle-photography/header-banner
 * Categories: header,circle-photography-patterns
 */
$circle_photograph_cover_url = trailingslashit(get_stylesheet_directory_uri());
$circle_photograph_cover_img = array(
    $circle_photograph_cover_url . '/assets/images/cover-1.jpg'
)
?>
<!-- wp:group {"tagName":"header","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0px","bottom":"0px"}},"border":{"top":{"style":"none","width":"0px"},"right":{"style":"none","width":"0px"},"bottom":{"color":"var:preset|color|border","width":"0px","style":"none"},"left":{"style":"none","width":"0px"}}},"backgroundColor":"transparent","layout":{"type":"constrained","wideSize":"100%"}} -->
<header class="wp-block-group has-transparent-background-color has-background" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border);border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($circle_photograph_cover_img[0]) ?>","id":18,"dimRatio":50,"overlayColor":"black","isUserOverlayColor":true,"minHeight":790,"contentPosition":"top center","style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"},"blockGap":"300px"}},"layout":{"type":"constrained","contentSize":"1260px","wideSize":"100%"}} -->
    <div class="wp-block-cover has-custom-content-position is-position-top-center" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px;min-height:790px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-18" alt="" src="<?php echo esc_url($circle_photograph_cover_img[0]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:site-logo {"width":56,"shouldSyncIcon":false} /-->

                    <!-- wp:group {"layout":{"type":"constrained","wideSize":"156px"}} -->
                    <div class="wp-block-group"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"none","fontSize":"20px"}},"textColor":"white","fontFamily":"plus-jakarta-sans"} /--></div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"metadata":{"name":""},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
                <div class="wp-block-group"><!-- wp:navigation {"ref":5,"textColor":"white"} -->
                    <!-- wp:page-list /-->
                    <!-- /wp:navigation -->

                    <!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"backgroundColor":"transparent"} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"layout":{"type":"constrained","wideSize":"760px"}} -->
            <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"64px"}}} -->
                <h2 class="wp-block-heading has-text-align-center" style="font-size:64px"><?php esc_html_e('Creating Memories, One Image at a Time', 'circle-photography') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"italic","fontWeight":"400","fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
                <p class="has-text-align-center has-primary-color has-text-color has-link-color" style="font-size:18px;font-style:italic;font-weight:400;text-transform:uppercase"><?php esc_html_e("“Capturing Life's Beautiful Moments ”", 'circle-photography') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
</header>
<!-- /wp:group -->