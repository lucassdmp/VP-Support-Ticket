<?php
/**
 * Plugin Name: VP supports Ticket
 * Description: Plugin to handle support Ticket for wordpress
 * Version: 1.0.0
 * Author: VPTEC
 * Author URI: https://github.com/lucassdmp/
 * Plugin URI: https://github.com/lucassdmp/VP-Support-Ticket
 * Requires at least: 5.0
 * Tested up to: 8.0
 * Tags: support, tickets, VPTEC
 */


 function remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
      show_admin_bar(false);
    }
  }
  add_action('after_setup_theme', 'remove_admin_bar');


  