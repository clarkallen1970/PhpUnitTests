<?php

    class StringHelper {
        
        //should return true if a valid email address is passed to it
        //or false if an invalid email address is passed to it
        public static function is_valid_email_format($email) {
            return filter_var($email, FILTER_VALIDATE_EMAIL);
        }
        
        //converts all spaces to underscore characters
        public static function space_to_underscore($string) {
            return str_replace(' ', '_', $string);
        }
        
        //should return the full textual representation of the day of the week
        public static function get_current_day_by_name() {
            return date("l");
        }
    }
?>