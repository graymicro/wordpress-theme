<?php

add_action('init', 'sample_template_add_programming_custom_post_type');

function sample_template_add_programming_custom_post_type()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => 'Programming',
        'singular_name'       => 'Programming',
        'menu_name'           => 'Programming',
        'parent_item_colon'   => 'Programming',
        'all_items'           => 'All Programming',
        'view_item'           => 'View Item',
        'add_new_item'        => 'Add New Project',
        'add_new'             => 'Add Project',
        'new_item'            => 'Add Project',
        'edit_item'           => 'Edit Project',
        'update_item'         => 'Update Project',
        'search_items'        => 'Search Project',
        'parent_item_colon'   => 'Project Bese',
        'not_found'           => 'No project found',
        'not_found_in_trash'  => 'Not found in Trash',
    );

    // Set other options for Custom Post Type

    $args = array(

        'description'         => 'Contents of template Programming',
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array('genres'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewite'              => array('slug' => 'Programming'),
        'menu_icon'           => 'dashicons-align-wide',
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type('Programming', $args);
}

// #########################################################

add_action('init', 'sample_template_add_ecommerce_custom_post_type');

function sample_template_add_ecommerce_custom_post_type()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => 'Ecommerce',
        'singular_name'       => 'Ecommerce',
        'menu_name'           => 'Ecommerce',
        'parent_item_colon'   => 'Ecommerce',
        'all_items'           => 'All Products',
        'view_item'           => 'View Products',
        'add_new_item'        => 'Add New Products',
        'add_new'             => 'Add Products',
        'new_item'            => 'Add Products',
        'edit_item'           => 'Edit Products',
        'update_item'         => 'Update Products',
        'search_items'        => 'Search Products',
        'parent_item_colon'   => 'Products Bese',
        'not_found'           => 'No Products found',
        'not_found_in_trash'  => 'Not found in Trash',
    );

    // Set other options for Custom Post Type

    $args = array(

        'description'         => 'Contents of template Products',
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array('genres'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewite'              => array('slug' => 'ecommerce'),
        'menu_icon'           => 'dashicons-align-wide',
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type('Ecommerce', $args);
}

// #########################################################

add_action('init', 'sample_template_add_photography_custom_post_type');

function sample_template_add_photography_custom_post_type()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => 'Photography',
        'singular_name'       => 'Photography',
        'menu_name'           => 'Photography',
        'parent_item_colon'   => 'Photography',
        'all_items'           => 'All Project',
        'view_item'           => 'View Project',
        'add_new_item'        => 'Add New Project',
        'add_new'             => 'Add Project',
        'new_item'            => 'Add Project',
        'edit_item'           => 'Edit Project',
        'update_item'         => 'Update Project',
        'search_items'        => 'Search Project',
        'parent_item_colon'   => 'Project Bese',
        'not_found'           => 'No Project found',
        'not_found_in_trash'  => 'Not found in Trash',
    );

    // Set other options for Custom Post Type

    $args = array(

        'description'         => 'Contents of template Products',
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array('genres'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewite'              => array('slug' => 'photography'),
        'menu_icon'           => 'dashicons-align-wide',
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type('photography', $args);
}


// #######################- What we do custom post type -#########################

add_action('init', 'what_we_do_custom_post_type');

function what_we_do_custom_post_type()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => 'Services',
        'singular_name'       => 'Services',
        'menu_name'           => 'Services',
        'parent_item_colon'   => 'Services',
        'all_items'           => 'All Services',
        'view_item'           => 'View Services',
        'add_new_item'        => 'Add New Service',
        'add_new'             => 'Add Service',
        'new_item'            => 'Add Service',
        'edit_item'           => 'Edit Service',
        'update_item'         => 'Update Service',
        'search_items'        => 'Search Service',
        'parent_item_colon'   => 'Team Bese',
        'not_found'           => 'No Services found',
        'not_found_in_trash'  => 'Not found in Trash',
    );

    // Set other options for Custom Post Type

    $args = array(

        'description'         => 'What we Do custom post type',
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array('genres'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewite'              => array('slug' => 'services'),
        'menu_icon'           => 'dashicons-table-col-before',
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type('services', $args);
}
