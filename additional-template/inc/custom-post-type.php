<?php

add_action('init', 'template_add_portfolio_custom_post_type');

function template_add_portfolio_custom_post_type()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => 'Portfolio',
        'singular_name'       => 'Portfolio',
        'menu_name'           => 'Portfolio',
        'parent_item_colon'   => 'Portfolio',
        'all_items'           => 'All Portfolio',
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

        'description'         => 'Contents of template Portfolio',
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
        'rewite'              => array('slug' => 'Portfolio'),
        'menu_icon'           => 'dashicons-table-col-before',
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type('Portfolio', $args);
}