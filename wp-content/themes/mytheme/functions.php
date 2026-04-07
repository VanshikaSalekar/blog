<?php
function mytheme_assets() {
    wp_enqueue_style("mytheme-style", get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "mytheme_assets");

function mytheme_setup() {
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");

    register_nav_menus([
        "primary" => "Primary Menu"
    ]);
}
add_action("after_setup_theme", "mytheme_setup");