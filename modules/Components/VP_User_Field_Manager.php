<?php

class VP_User_Field_Manager{
    static function get_User_Meta($id, $field){
        if(get_user_meta($id, $field, true))
            return true;
        else
            return false;
    }
    
    static function update_User_Meta($id, $field, $value){
        if(get_user_meta($id, $field, $value))
            return true;
        else
            return false;
    }
}