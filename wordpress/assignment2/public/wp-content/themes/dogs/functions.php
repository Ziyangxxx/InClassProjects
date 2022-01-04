<?php

/**
 * Enqueue scripts and styles
 */
if(!function_exists('dogs_scripts')){
    function dogs_scripts(){

        wp_enqueue_style('bootstrap', get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css', [], null, false);
    
        wp_enqueue_style('dogstyle', get_template_directory_uri().'/style.css', ['bootstrap'], null, false);
    
        wp_enqueue_script('dogscripts', get_template_directory_uri().'/js/clean-blog.min.js', [], null, true);
    
        wp_enqueue_script('dogsjquery', get_template_directory_uri().'/vendor/jquery/jquery.min.js', ['jquery'], null, true);

        wp_enqueue_script('dogsbootstrap', get_template_directory_uri().'/vendor/bootstrap/js/bootstrap.bundle.min.js', ['bootstrap'], null, true);

        wp_enqueue_style('fontstyle', get_template_directory_uri(). '/vendor/fontawesome-free/css/all.min.css',['fontawesome', 'googleapi']);

        wp_enqueue_style('fontawesome', 'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic');

        wp_enqueue_style('googleapi', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');

    }

    add_action('wp_enqueue_scripts', 'dogs_scripts');
}

if(!function_exists('dogs_custom_post_type')){

    function dogs_custom_post_type(){
        $params = array(

            'labels' => [
                'name' => 'Dogs',
                'singular_name' => 'Dog'
            ],
            'public' => true,
            'capability_type' => 'page',
            'has_archive' => true,
            'hierarchical' => true,
            'taxonomies' => ['category'],
            'support' => [
                'title',
                'editor',
                'excerpt',
                'custom-fields',
                'revisions',
                'page-attributes',
                'thumbnail'
            ]
        );

        register_post_type('dogs', $params);
    }

    add_action('init', 'dogs_custom_post_type');
}

function the_dog_name(){
    global $post;
    $dog_name = get_post_meta($post->ID, 'dog_name', true);
    echo esc_html($dog_name);
}

function the_other_name(){
    global $post;
    $other_names = get_post_meta($post->ID, 'other_names', true);
    echo esc_html($other_names);
}

function the_image(){
    global $post;
	$id = get_post_meta($post->ID, 'image', true);
	echo wp_get_attachment_image_url($id, 'full');
}

function the_dog_origin(){
    global $post;
    $origin = get_post_meta($post->ID, 'origin', true);
    echo esc_html($origin);
}

function the_dog_category(){
    global $post;
    $category = get_post_meta($post->ID, 'category', true);
    echo esc_html($category);
}

function the_male_weight(){
    global $post;
    $male_weight = get_post_meta($post->ID, 'male_weight', true);
    echo esc_html($male_weight);
}

function the_female_weight(){
    global $post;
    $female_weight = get_post_meta($post->ID, 'female-weight', true);
    echo esc_html($female_weight);
}

function the_life_span(){
    global $post;
    $life_span = get_post_meta($post->ID, 'life_span', true);
    echo esc_html($life_span);
}

function the_legitimacy(){
    global $post;
    $legitimacy = get_post_meta($post->ID, 'legitimacy', true);
    echo esc_html($legitimacy);
}

function the_description(){
    global $post;
    $description = get_post_meta($post->ID, 'description', true);
    echo esc_html($description);
}