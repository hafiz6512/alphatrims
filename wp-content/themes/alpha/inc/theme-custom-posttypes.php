<?php

/**
 * Add Faqs Post Type
 */
$labels = array(
    "name"          => "FAQs",
    "singular_name" => "FAQ",
    "menu_name"     => "FAQs",
);

$args = array(
    "labels"              => $labels,
    "description"         => "alpha FAQs",
    "public"              => true,
    "show_ui"             => true,
    "menu_icon"           => 'dashicons-yes-alt',
    "has_archive"         => true,
    "show_in_menu"        => true,
    "exclude_from_search" => true,
    "capability_type"     => "post",
    "map_meta_cap"        => true,
    "hierarchical"        => true,
    "rewrite"             => array("slug" => "faqs", "with_front" => true),
    "query_var"           => true,
    "supports"            => array("title", "editor", "thumbnail"),
);
register_post_type("faqs", $args);