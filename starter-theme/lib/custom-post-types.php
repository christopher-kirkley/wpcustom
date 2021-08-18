<?php

/*
 *
 * Custom Post Types
 *
 */

/* register_post_type('projects', array( */
/*     'label' => 'Projects', */
/*     'description' => '', */
/*     'public' => true, */
/*     'show_ui' => true, */
/*     'show_in_menu' => true, */
/*     'capability_type' => 'post', */
/*     'hierarchical' => false, */
/*     'rewrite' => array('slug' => 'projects','with_front'=>false), */
/*     'query_var' => true, */
/*     'has_archive' => true, */
/*     'show_in_rest' => true, */
/*     'exclude_from_search' => false, */
/*     'supports' => array( */
/*         'title', */
/*         'editor', */
/*         'excerpt', */
/*         'trackbacks', */
/*         'custom-fields', */
/*         'revisions', */
/*         'thumbnail', */
/*         'author', */
/*         'page-attributes',), */
/*     'taxonomies' => array( */
/*         'category', 'post_tag' ), */
/*     'labels' => array ( */
/*         'name' => 'Projects', */
/*         'singular_name' => 'Project', */
/*         'menu_name' => 'Projects', */
/*         'add_new' => 'Add Project', */
/*         'add_new_item' => 'Add New Project', */
/*         'edit' => 'Edit', */
/*         'edit_item' => 'Edit Project', */
/*         'new_item' => 'New Project', */
/*         'view' => 'View Project', */
/*         'view_item' => 'View Project', */
/*         'search_items' => 'Search Projects', */
/*         'not_found' => 'No Projects Found', */
/*         'not_found_in_trash' => 'No Projects Found in Trash', */
/*         'parent' => 'Parent Project', */
/*     ), */
/* )); */

/* /1* register_post_type('epks', array(	'label' => 'EPKs', *1/ */
/* /1*     'description' => '', *1/ */
/* /1*     'public' => true, *1/ */
/* /1*     'show_ui' => true, *1/ */
/* /1*     'show_in_menu' => true, *1/ */
/* /1*     'capability_type' => 'post', *1/ */
/* /1*     'hierarchical' => false, *1/ */
/* /1*     'rewrite' => array('slug' => 'epks','with_front'=>false), *1/ */
/* /1*     'query_var' => true, *1/ */
/* /1*     'has_archive' => true, *1/ */
/* /1*     'exclude_from_search' => false, *1/ */
/* /1*     'supports' => array('title', *1/ */
/* /1*     'editor', *1/ */
/* /1*     'excerpt', *1/ */
/* /1*     'trackbacks', *1/ */
/* /1*     'custom-fields', *1/ */
/* /1*     'revisions', *1/ */
/* /1*     'thumbnail', *1/ */
/* /1*     'author', *1/ */
/* /1*     'page-attributes',), *1/ */
/* /1*     'labels' => array ( *1/ */
/* /1*     'name' => 'EPKs', *1/ */
/* /1*     'singular_name' => 'EPK', *1/ */
/* /1*     'menu_name' => 'EPKs', *1/ */
/* /1*     'add_new' => 'Add EPK', *1/ */
/* /1*     'add_new_item' => 'Add New EPK', *1/ */
/* /1*     'edit' => 'Edit', *1/ */
/* /1*     'edit_item' => 'Edit EPK', *1/ */
/* /1*     'new_item' => 'New EPK', *1/ */
/* /1*     'view' => 'View EPK', *1/ */
/* /1*     'view_item' => 'View EPK', *1/ */
/* /1*     'search_items' => 'Search EPKs', *1/ */
/* /1*     'not_found' => 'No EPKs Found', *1/ */
/* /1*     'not_found_in_trash' => 'No EPKs Found in Trash', *1/ */
/* /1*     'parent' => 'Parent EPK', *1/ */
/* /1* ),) ); *1/ */

/* /1* register_post_type('videos', array( *1/ */
/* /1*     'label' => 'Videos', *1/ */
/* /1*     'description' => '', *1/ */
/* /1*     'public' => true, *1/ */
/* /1*     'show_ui' => true, *1/ */
/* /1*     'show_in_menu' => true, *1/ */
/* /1*     'capability_type' => 'post', *1/ */
/* /1*     'hierarchical' => false, *1/ */
/* /1*     'rewrite' => array('slug' => 'videos','with_front'=>false), *1/ */
/* /1*     'query_var' => true, *1/ */
/* /1*     'has_archive' => true, *1/ */
/* /1*     'exclude_from_search' => false, *1/ */
/* /1*     'supports' => array('title', *1/ */
/* /1*     'editor', *1/ */
/* /1*     'excerpt', *1/ */
/* /1*     'trackbacks', *1/ */
/* /1*     'custom-fields', *1/ */
/* /1*     'revisions', *1/ */
/* /1*     'thumbnail', *1/ */
/* /1*     'author', *1/ */
/* /1*     'page-attributes',), *1/ */
/* /1*     'taxonomies' => array( 'category', 'post_tag' ), *1/ */
/* /1*     'labels' => array ( *1/ */
/* /1*     'name' => 'Videos', *1/ */
/* /1*     'singular_name' => 'Video', *1/ */
/* /1*     'menu_name' => 'Videos', *1/ */
/* /1*     'add_new' => 'Add Video', *1/ */
/* /1*     'add_new_item' => 'Add New Video', *1/ */
/* /1*     'edit' => 'Edit', *1/ */
/* /1*     'edit_item' => 'Edit Video', *1/ */
/* /1*     'new_item' => 'New Video', *1/ */
/* /1*     'view' => 'View Video', *1/ */
/* /1*     'view_item' => 'View Video', *1/ */
/* /1*     'search_items' => 'Search Videos', *1/ */
/* /1*     'not_found' => 'No Videos Found', *1/ */
/* /1*     'not_found_in_trash' => 'No Videos Found in Trash', *1/ */
/* /1*     'parent' => 'Parent Video', *1/ */
/* /1* ),) ); *1/ */

/* /1* register_post_type('mixes', array(	'label' => 'Mixes', *1/ */
/* /1*     'description' => '', *1/ */
/* /1*     'public' => true, *1/ */
/* /1*     'show_ui' => true, *1/ */
/* /1*     'show_in_menu' => true, *1/ */
/* /1*     'capability_type' => 'post', *1/ */
/* /1*     'hierarchical' => false, *1/ */
/* /1*     'rewrite' => array('slug' => 'mixes','with_front'=>false), *1/ */
/* /1*     'query_var' => true, *1/ */
/* /1*     'has_archive' => true, *1/ */
/* /1*     'exclude_from_search' => false, *1/ */
/* /1*     'supports' => array('title', *1/ */
/* /1*     'editor', *1/ */
/* /1*     'trackbacks', *1/ */
/* /1*     'custom-fields', *1/ */
/* /1*     'revisions', *1/ */
/* /1*     'thumbnail', *1/ */
/* /1*     'author', *1/ */
/* /1*     'page-attributes',), *1/ */
/* /1*     'taxonomies' => array( 'category', 'post_tag' ), *1/ */
/* /1*     'labels' => array ( *1/ */
/* /1* 'name' => 'Mixes', *1/ */
/* /1* 'singular_name' => 'Mix', *1/ */
/* /1* 'menu_name' => 'Mixes', *1/ */
/* /1* 'add_new' => 'Add Mix', *1/ */
/* /1* 'add_new_item' => 'Add New Mix', *1/ */
/* /1* 'edit' => 'Edit', *1/ */
/* /1* 'edit_item' => 'Edit Mix', *1/ */
/* /1* 'new_item' => 'New Mix', *1/ */
/* /1* 'view' => 'View Mix', *1/ */
/* /1* 'view_item' => 'View Mix', *1/ */
/* /1* 'search_items' => 'Search Mixes', *1/ */
/* /1* 'not_found' => 'No Mixes Found', *1/ */
/* /1* 'not_found_in_trash' => 'No Mixes Found in Trash', *1/ */
/* /1* 'parent' => 'Parent Mix', *1/ */
/* /1* ),) ); *1/ */

/* /1* register_taxonomy('live-artist',array ( *1/ */
/* /1* 1 => 'epks', *1/ */
/* /1* ),array( 'hierarchical' => true, 'label' => 'Live Artists','show_ui' => true,'query_var' => true,'rewrite' => array('slug' => ''),'singular_label' => 'Live Artist') ); *1/ */

/* /1* register_post_type('spotifys', array(	'label' => 'Spotifys', *1/ */
/* /1*     'description' => '', *1/ */
/* /1*     'public' => true, *1/ */
/* /1*     'show_ui' => true, *1/ */
/* /1*     'show_in_menu' => true, *1/ */
/* /1*     'capability_type' => 'post', *1/ */
/* /1*     'hierarchical' => false, *1/ */
/* /1*     'rewrite' => array('slug' => 'spotifys','with_front'=>false), *1/ */
/* /1*     'query_var' => true, *1/ */
/* /1*     'has_archive' => true, *1/ */
/* /1*     'show_in_rest' => true, *1/ */
/* /1*     'exclude_from_search' => false, *1/ */
/* /1*     'supports' => array('title', *1/ */
/* /1*     'editor', *1/ */
/* /1*     'excerpt', *1/ */
/* /1*     'trackbacks', *1/ */
/* /1*     'custom-fields', *1/ */
/* /1*     'revisions', *1/ */
/* /1*     'thumbnail', *1/ */
/* /1*     'author', *1/ */
/* /1*     'page-attributes',), *1/ */
/* /1*     'taxonomies' => array( 'category', 'post_tag' ), *1/ */
/* /1*     'labels' => array ( *1/ */
/* /1*     'name' => 'Spotifys', *1/ */
/* /1*     'singular_name' => 'Spotify', *1/ */
/* /1*     'menu_name' => 'Spotifys', *1/ */
/* /1*     'add_new' => 'Add Spotify', *1/ */
/* /1*     'add_new_item' => 'Add New Spotify', *1/ */
/* /1*     'edit' => 'Edit', *1/ */
/* /1*     'edit_item' => 'Edit Spotify', *1/ */
/* /1*     'new_item' => 'New Spotify', *1/ */
/* /1*     'view' => 'View Spotify', *1/ */
/* /1*     'view_item' => 'View Spotify', *1/ */
/* /1*     'search_items' => 'Search Spotifys', *1/ */
/* /1*     'not_found' => 'No Spotifys Found', *1/ */
/* /1*     'not_found_in_trash' => 'No Spotifys Found in Trash', *1/ */
/* /1*     'parent' => 'Parent Spotify', *1/ */
/* /1* ),) ); *1/ */
