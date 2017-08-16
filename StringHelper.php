<?php

    class StringHelper {
        
        //should return true if a valid email address is passed to it
        //or false if an invalid email address is passed to it
        public static function is_valid_email_format($email) {
            
        //This is the right idea... but, keep in mind, the semicolon
        //ends your statement...
        if (filter_var($email, FILTER_VALIDATE_EMAIL) == $email) return true;
        else return false;      //so this statement doesn't execute.      
           
           /*
                Remember, an if-else should be
                if (condition) {
                    
                } else {
                    
                }
                
                I recommend always using curly braces because it avoids premature
                termination as you did above.
                
                Also, filter_var will return the email address is it's valid,
                or, it will return an empty value, if it's invalid.... which it looks
                like you understood, so, your code should be
                if (filter_var($email, FILTER_VALIDATE_EMAIL) == $email) {
                    return true;
                } else {
                    return false; 
                }
           */
            
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