<?php

class VP_Create_Ticket_Page {
    static function VP_Create_Ticket_Page(){
        $page_check = new WP_Error(409, 'Page Already Exists - Check ');
        $page = get_page_by_title('APTMD Suporte');
        if(!$page){
            $page = array(
                'post_title' => 'APTMD Suporte',
                'post_content' => '[vp_ticket]',
                'post_status' => 'publish',
                'post_type' => 'page',
                'post_author' => 1,
                'post_slug' => 'aptmd-suporte'
            );
            $page_check = wp_insert_post($page);
        }
        return $page_check;
    }
}