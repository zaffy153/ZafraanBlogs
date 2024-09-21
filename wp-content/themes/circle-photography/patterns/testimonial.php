<?php

/**
 * Title: Testimonial
 * Slug: circle-photography/testimonial
 * Categories: circle-photography-patterns
 */
$circle_photograph_testimonial_url = trailingslashit(get_stylesheet_directory_uri());
$circle_photograph_testimonial_img = array(
    $circle_photograph_testimonial_url . '/assets/images/testimonial-1.jpg',
    $circle_photograph_testimonial_url . '/assets/images/gallery-7.jpg'
)
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"black","layout":{"type":"constrained","wideSize":"100%"}} -->
<div class="wp-block-group has-black-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($circle_photograph_testimonial_img[0]) ?>","id":158,"dimRatio":0,"overlayColor":"background-alt","isUserOverlayColor":true,"minHeight":584,"isDark":false,"style":{"color":{"duotone":"var:preset|duotone|dark-grayscale"},"spacing":{"padding":{"top":"60px","bottom":"60px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","wideSize":"100%","contentSize":"100%"}} -->
    <div class="wp-block-cover is-light" style="padding-top:60px;padding-right:var(--wp--preset--spacing--40);padding-bottom:60px;padding-left:var(--wp--preset--spacing--40);min-height:584px"><span aria-hidden="true" class="wp-block-cover__background has-background-alt-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-158" alt="" src="<?php echo esc_url($circle_photograph_testimonial_img[0]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"40px"}},"layout":{"type":"constrained","contentSize":"760px","wideSize":"100%"}} -->
            <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":98,"width":"80px","height":"80px","scale":"cover","sizeSlug":"large","linkDestination":"none","align":"center","style":{"border":{"radius":"50px","width":"4px"}},"borderColor":"primary"} -->
                <figure class="wp-block-image aligncenter size-large is-resized has-custom-border"><img src="<?php echo esc_url($circle_photograph_testimonial_img[1]) ?>" alt="" class="has-border-color has-primary-border-color wp-image-98" style="border-width:4px;border-radius:50px;object-fit:cover;width:80px;height:80px" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","style":{"spacing":{"margin":{"bottom":"30px"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"22px","fontStyle":"italic","fontWeight":"500"}},"textColor":"white","fontFamily":"plus-jakarta-sans"} -->
                <p class="has-text-align-center has-white-color has-text-color has-link-color has-plus-jakarta-sans-font-family" style="margin-bottom:30px;font-size:22px;font-style:italic;font-weight:500"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce placerat sed nunc at laoreet. In ultricies aliquam dui cursus volutpat. Morbi vitae tortor eu velit fermentum ultricies in at dolor.', 'circle-photography') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","placeholder":"George Mathew","style":{"typography":{"fontSize":"20px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontFamily":"plus-jakarta-sans"} -->
                    <h2 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color has-plus-jakarta-sans-font-family" style="font-size:20px"><?php esc_html_e('Alexandra, Photo editor', 'circle-photography') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|post-meta-color-alt"}}}},"textColor":"post-meta-color-alt"} -->
                        <p class="has-post-meta-color-alt-color has-text-color has-link-color"><?php esc_html_e('★★★★★', 'circle-photography') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"x-small","fontFamily":"plus-jakarta-sans"} -->
                    <p class="has-white-color has-text-color has-link-color has-plus-jakarta-sans-font-family has-x-small-font-size"><?php esc_html_e('(5.00)', 'circle-photography') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->