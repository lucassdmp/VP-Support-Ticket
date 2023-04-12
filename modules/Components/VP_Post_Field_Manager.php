<?php

class VP_Ticket_Field_Manager{
    static function VP_Get_Post_Field($id, $field){
        if(get_post_meta($id, $field, true))
            return true;
        else
            return false;
    }
    
    static function VP_Insert_Post_Field($id, $field, $value){
        if(update_post_meta($id, $field, $value))
            return true;
        else
            return false;
    }
}
