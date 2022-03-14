<?php

/**
 * Faqs Shortcode
 * [accordion sec_title="Diehardcoder FAQ" post_type="faqs"]
 */
add_shortcode('accordion', 'fn_faq_accordion');
function fn_faq_accordion($atts, $content = null, $tag) {

    $args = shortcode_atts( array(
        'post_type'      => 'faqs',
        'posts_per_page' => '-1',
        'sec_title'      => '',
    ), $atts );

    extract( shortcode_atts( array(
        'post_type'      => $post_type,
        'posts_per_page' => $posts_per_page,
        'sec_title'      => $sec_title,
    ), $args));

    $content = "";

    $faq_accordian_query = new WP_query( $args );

    if( $faq_accordian_query->have_posts() ){

        $content .= '<div class="faq_accordian_wrap" role="tablist" aria-multiselectable="true">';
        if ($sec_title) {
            $content .= '<div class="faq_sec_title"><h2>'. esc_attr( $sec_title ) . '</h2></div>';
        }

        while ( $faq_accordian_query->have_posts() ){
            $faq_accordian_query->the_post();

            $thePostID = get_the_ID();
            $postNum = $faq_accordian_query->current_post + 1;
            $content .= '<div class="faq_item">';
            $content .= '<div class="faq_item_heading" role="tab" id="heading-id-'.$thePostID.'"><a class="collapsed" data-toggle="collapse" href="#faq-post-id-'.$thePostID.'" role="button" aria-expanded="true" aria-controls="faq-post-id-'.$thePostID.'">'. $postNum .'. '. get_the_title() .'</a></div>';
            $content .= '<div id="faq-post-id-'.$thePostID.'" class="faq_body collapse" role="tabpanel" aria-labelledby="heading-id-'.$thePostID.'"><div class="faq_body_content">'. get_the_content() .'</div></div>';
            $content .= '</div>';
        }

        $content .= '</div>';

    }

    wp_reset_postdata();

    return $content;
}
