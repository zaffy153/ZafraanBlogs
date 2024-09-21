<?php

/**
 * Title: Blog Pattern
 * Slug: circle-photography/blog
 * Categories: circle-photography-patterns
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"black","layout":{"type":"constrained","wideSize":"100%"}} -->
<div class="wp-block-group has-black-background-color has-background" style="padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"60px"}},"layout":{"type":"constrained","wideSize":"1260px"}} -->
    <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:group {"layout":{"type":"constrained","wideSize":"100%"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"textTransform":"uppercase","lineHeight":"1.5"}},"textColor":"foreground","fontFamily":"plus-jakarta-sans"} -->
                <p class="has-text-align-center has-foreground-color has-text-color has-link-color has-plus-jakarta-sans-font-family" style="line-height:1.5;text-transform:uppercase"><?php esc_html_e('Blog & Article', 'circle-photography') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:separator {"backgroundColor":"foreground"} -->
                <hr class="wp-block-separator has-text-color has-foreground-color has-alpha-channel-opacity has-foreground-background-color has-background" />
                <!-- /wp:separator -->
            </div>
            <!-- /wp:group -->

            <!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"36px","fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"textColor":"white","fontFamily":"plus-jakarta-sans"} -->
            <h3 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color has-plus-jakarta-sans-font-family" style="font-size:36px;font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e('Latest Blog & Article', 'circle-photography') ?></h3>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:query {"queryId":7,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
            <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"grid","columnCount":3}} -->
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}},"backgroundColor":"secondary","layout":{"type":"constrained","wideSize":""},"cozyAnimation":{"type":"none","easingFunction":"ease-in-out","anchorPlacement":"top-bottom","duration":1000}} -->
                <div class="wp-block-group has-secondary-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"280px"} /-->

                    <!-- wp:group {"style":{"spacing":{"padding":{"right":"40px","left":"40px","top":"20px","bottom":"20px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="padding-top:20px;padding-right:40px;padding-bottom:20px;padding-left:40px"><!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"constrained","wideSize":"315px","justifyContent":"left"}} -->
                        <div class="wp-block-group"><!-- wp:post-terms {"term":"category","className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /-->

                            <!-- wp:post-title {"isLink":true,"className":"is-style-fotawp-title-hover-underline-primary-color","style":{"typography":{"fontSize":"22px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontFamily":"plus-jakarta-sans"} /-->

                            <!-- wp:post-date {"className":"is-style-post-date-with-icon","fontSize":"xx-small"} /-->

                            <!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":12,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"foreground"} /-->

                            <!-- wp:read-more {"content":"Read More \u003e","className":"is-style-readmore-hover-primary-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase"}},"textColor":"primary","fontSize":"small","fontFamily":"plus-jakarta-sans"} /-->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:post-template -->

                <!-- wp:query-no-results -->
                <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
                <p></p>
                <!-- /wp:paragraph -->
                <!-- /wp:query-no-results -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->