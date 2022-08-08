<?php

/**
 * Plugin Name: Latest Posts
 * Plugin URI: https://alialaa.com/
 * Description: Filter and list latest posts.
 * Author: Giandinoto
 * Author URI: www.giandinoto.com
 */

function blocks_course_latest_posts_block_init() {
    register_block_type_from_metadata( __DIR__ );
}

add_action( "init", "blocks_course_latest_posts_block_init" );