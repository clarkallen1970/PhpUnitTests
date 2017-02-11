<?php

class StringHelperTest extends PHPUnit\Framework\TestCase {
    
    public function test_is_valid_email_format($email){
        
         $email= new email("john@msn.com");
         $this->assertEquals("john@msn.com", filter_var($this->$email, FILTER_VALIDATE_EMAIL));
        
         $email= new email("john2msn.com");
         $this->assertEquals("john2msn.com", filter_var($this->$email, FILTER_VALIDATE_EMAIL));
          
      
}    


        public function test_space_to_underscore($string) {
        $string = new string ("Hi     friends, my name is Jonas!");
        $this->assertContains(test_space_to_underscore($this->$string));
        
        }
        
        
        public function test_get_current_day_by_name(){
            $date= new date("l");
            $this->assertNan($this->$date);
            
        }
        
        
};
        
        
     
      

       
        ?>