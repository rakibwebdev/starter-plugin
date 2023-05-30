<?php
/*
 * Plugin Name: Start Plugin with react
 */


 // Register the admin menu
function register_starter_menu() {
    add_menu_page(
      'Starter Plugin',        // Page title
      'Starter Plugin',        // Menu title
      'manage_options',        // Capability required to access the menu
      'starter-plugin',        // Menu slug
      'starter_plugin_page',   // Callback function to render the menu page
      'dashicons-admin-plugins' // Icon URL or dashicon class name
    );
  }
  add_action('admin_menu', 'register_starter_menu');
  
  // Callback function to render the menu page
  function starter_plugin_page() {
    // Display the content of the menu page
    echo '<div id="starter-page"></div>';
  }


  // Enqueue script for the admin area
function enqueue_admin_script() {
    wp_enqueue_script('starter-admin-script', plugins_url('/public/js/index.js', __FILE__), array('jquery'), '1.0.0', true);
}
add_action('admin_enqueue_scripts', 'enqueue_admin_script');