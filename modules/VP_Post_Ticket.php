<?php

//require_once('./Components/VP_Post_Field_Manager.php');

global $wpdb;

if(isset($_POST['VP_ticket_type']) && isset($_POST['VP_ticket_content'])){
    $id = $_POST['VP_userid'];
    $type = $_POST['VP_ticket_type'];
    $content = $_POST['VP_ticket_content'];
    $email = $_POST['VP_ticket_email'];

    $post_id = wp_insert_post(array(
        'post_title' => 'Chamado #'.time(),
        'post_content' => $content,
        'post_status' => 'publish',
        'post_author' => $id,
        'post_type' => 'VP_Ticket',
    ));

    VP_Ticket_Field_Manager::VP_Insert_Post_Field($post_id, 'VP_Ticket_Type', $type);
}