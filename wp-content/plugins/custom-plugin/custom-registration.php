<?php
/*
 * Plugin Name:       Custom Registration Plugin
 * Description:       REST API for User Registration and Authentication.
 * Version:           1.0
 * Author:            Sadique Rahmani
*/

add_action('rest_api_init', function () {
    register_rest_route('v1', '/register', array(
        'methods' => 'POST',
        'callback' => 'custom_registration_endpoint_handler',
    ));
});

function custom_registration_endpoint_handler($request) {
    $parameters = $request->get_json_params();

    // Extract user data from request parameters
    $username = sanitize_text_field($parameters['username']);
    $email = sanitize_email($parameters['email']);
    $password = $parameters['password'];
    $first_name = sanitize_text_field($parameters['first_name']);
    $last_name = sanitize_text_field($parameters['last_name']);

    // Create user
    $user_id = wp_create_user($username, $password, $email);

    if (is_wp_error($user_id)) {
        return new WP_Error('registration_failed', $user_id->get_error_message(), array('status' => 400));
    }


    update_user_meta($user_id, 'first_name', $first_name);
    update_user_meta($user_id, 'last_name', $last_name);

    $user = get_user_by('id', $user_id);

    return array(
        'message' => 'User registered successfully.',
        'data' => $user->data
    );
}


add_filter('jwt_auth_token_before_dispatch', 'add_user_info_jwt', 10, 2); 

function add_user_info_jwt($data, $user) {
    
    // Fetch user data
	$new_user = get_userdata( $user->ID );
	$first_name = $new_user->first_name;
	$last_name = $new_user->last_name;

    //Set details in data 
    $data['first_name'] = $first_name ? $first_name : '';
	$data['last_name'] = $last_name ? $last_name : '';

    return $data;
}

